<?php

// namespace Core;

// secure
require_once 'inbuilts/secure/secure.php';

// route
require_once 'inbuilts/routing/route.php';

// connection
// require_once 'inbuilts/connection/connection.php';

// for user routes
require_once ROOT.'/routes/routes.php';

// for customs 
foreach (glob('custom/*/index.php') as $file) {
    require_once $file;
}

// asset()
function asset($path) {
    return "/public/".$path;
}

// Start session at the very beginning of the script
session_start();

// Secure CSRF Token Generation Function
function generateCSRFToken() {
    // Check if token already exists in session
    if (!isset($_SESSION['csrf_token'])) {
        // Generate a cryptographically secure random token
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Validate CSRF Token Function
function validateCSRFToken($token) {
    // Check if token exists in session and matches submitted token
    return isset($_SESSION['csrf_token']) && 
           is_string($token) && 
           hash_equals($_SESSION['csrf_token'], $token);
}


function redirector() {
    // getting parsed uri
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
    // using route as global
    global $route;
    // getting the key for the route array
    $key_uri = routeFilter($uri, $query);
    // echo $key_uri;
    // echo $route[$key_uri];
    // route redirecting
    if (isset($route[$key_uri])) {
    $viewPath = $route[$key_uri];
    if (file_exists($viewPath)) { 
        // Read the contents of the template file
        // ob_start(); // Start output buffering
            // include $viewPath; // Include the view file
            // $templateFile = ob_get_clean(); // Capture the output into a string
            // echo file_get_contents($viewPath);

        $templateContent = file_get_contents($viewPath);
        
        // Process the template
        $processed = processTemplate($templateContent);
        
        // Output the processed PHP code
        // echo $processed; // Outputs the transformed PHP code
        // mkdir('dev', 0777, true);
        $rendered = 'dev/temp.php';
        file_put_contents($rendered, $processed);
        return $rendered;
        // return $processed;
        // return $viewPath;
    } else {
        // echo "4041 Not Found";
        // echo "1";
        // return ROOT.'/.core/inbuilts/errors/404.php';
        // File not found
        return handleNotFound();
    }
    } else {
    // route not found
    // return ROOT.'/.core/inbuilts/errors/404.php';
        // File not found
        return handleNotFound();
    }
}

function routeFilter($uri, $query) {
    if (!$query) {
      return $uri;
    } else {
      $uri = rtrim($uri, '/');
      return $uri . '/GET';
    }
}

function handleNotFound() {
    // You can customize this function to handle 404 errors
    http_response_code(404);
    include ROOT.'/.core/inbuilts/errors/404.php';
    exit;
}

function processTemplate($template) {
    $processedTemplate = preg_replace_callback_array([
        // Variable replacement
       /* '/{{\s*\_(\w+)\s*}}/' => function ($matches) {
            return '<?php echo $' . $matches[1] . '; ?>';
        }, */

        // For loop
        '/{{\s*for\s+(\$\w+)\s+in\s+(\$\w+)\s*}}/' => function ($matches) {
            return '<?php foreach (' . $matches[2] . ' as ' . $matches[1] . '): ?>';
        },
        '/{{\s*endfor\s*}}/' => function () {
            return '<?php endforeach; ?>';
        },

        // If statement
        '/{{\s*if\s+(.+?)\s*}}/' => function ($matches) {  // Non-greedy matching for condition
            return '<?php if (' . $matches[1] . '): ?>';
        },
        '/{{\s*elseif\s+(.+?)\s*}}/' => function ($matches) { // Non-greedy matching for condition
            return '<?php elseif (' . $matches[1] . '): ?>';
        },
        '/{{\s*else\s*}}/' => function () {
            return '<?php else: ?>';
        },
        '/{{\s*endif\s*}}/' => function () {
            return '<?php endif; ?>';
        },

        // Switch statement (basic)
        '/{{\s*switch\s+(\$\w+)\s*}}/' => function ($matches) {
            return '<?php switch (' . $matches[1] . '): ?>';
        },
        '/{{\s*case\s+(.+?)\s*}}/' => function ($matches) { // Non-greedy for case value
            return '<?php case ' . $matches[1] . ': ?>';
        },
        '/{{\s*break\s*}}/' => function () {
            return '<?php break; ?>';
        },
        '/{{\s*default\s*}}/' => function () {
            return '<?php default: ?>'; 
        },
        '/{{\s*endswitch\s*}}/' => function () {
            return '<?php endswitch; ?>';
        },
        
        // include
        '/<x_use_\s*(\w+)\s*>/' => function ($matches) {
            $path = ROOT."/views/components/{".$matches[1]."}.php";
            return '<?php include $path; ?>';
        },

         // Comments (for template clarity)
        '/{{\s*#(.+?)#\s*}}/' => function ($matches) {
            return '<?php /* ' . $matches[1] . ' */ ?>'; // PHP comment
        },

        '/{{\s*_(\w+)\s*}}/' => function ($matches) {
            return '<?php echo $'.$matches[1].'; ?>'; // PHP comment
        },

        '/{{\s_(\w+)\s=\s*(\d+)\s*}}/' => function ($matches) {
            return '<?php ' . $matches[1].' = '.$matches[2] .'; ?>';
        },
        '/{{\s_(\w+)\s=\s*(\d+)\s*}}/' => function ($matches) {
            return '<?php $' . $matches[1].'='.$matches[2] . '; ?>';
        },
        '/{{\s_(\w+)\s=\s*(\w+)\s*}}/' => function ($matches) {
            return '<?php $' . $matches[1].'='.$matches[2] . '; ?>';
        },
        '/{{\s*_(\w+)\s*=\s*[\'"]?(.*?)[\'"]?\s*}}/' => function ($matches) {
            return '<?php $' . $matches[1] . ' = \'' . $matches[2] . '\'; ?>';
        },
        '/{{\sisset_GET_(\w+)\s}}/' => function ($matches) {
            return '<?php if (isset($_GET[\'' . $matches[1] . '\'])) { echo $_GET[\'' . $matches[1] . '\']; } ?>';
        },
        '/{{\sisset_POST_(\w+)\s}}/' => function ($matches) {
            return '<?php if (isset($_POST[\'' . $matches[1] . '\'])) { echo $_POST[\'' . $matches[1] . '\']; } ?>';
        },

    ], $template);

    return $processedTemplate;
}



// Example usage:
/* $template = <<<EOT
Hello, {{\_name}}!

<ul>
    {{\_items}}
        <li>{{\_item}}</li>
    {{\_items}}
</ul>

{{\_condition}}
    <p>This is shown if the condition is true.</p>
{{\_condition}}

{{\_value}}
    <p>The value is: {{\_value}}</p>
{{\_value}}

{{\_fruit}}
    <p>The fruit is: {{\_fruit}}</p>
{{\_fruit}}


EOT;

$name = "John";
$items = ["apple", "banana", "cherry"];
$condition = true; // Or false
$value = 10;
$fruit = "orange";


$processed = processTemplate($template);

// Assign values to variables dynamically (IMPORTANT!)
extract(compact('name', 'items', 'condition', 'value', 'fruit')); // Make variables available

eval('?>' . $processed . '<?php '); // Execute the processed template

?>
*/
