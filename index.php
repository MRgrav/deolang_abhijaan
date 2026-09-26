<?php

// ./index.php

// uncomment the below line when developing and debugging
ini_set('display_errors', 1);

// Define constants for paths
define('ROOT', __DIR__);

// Security Headers Middleware
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("X-Powered-By: abhijaan");
header("X-Developed-By: gaurab gogoi");
header("Referrer-Policy: strict-origin-when-cross-origin");

// TLS Security & Transport Cache Headers
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("Upgrade-Insecure-Requests: 1");

// Basic Caching Control
header("Cache-Control: public, max-age=3600, stale-while-revalidate=86400, s-maxage=86400");
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');

// Generate ETag for browser and TLS cache validation
$eTag = '"' . md5($_SERVER['REQUEST_URI'] . (file_exists(__FILE__) ? filemtime(__FILE__) : '')) . '"';
header("ETag: $eTag");

if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) === $eTag) {
    header("HTTP/1.1 304 Not Modified");
    exit;
}

if (extension_loaded('zlib') && !ini_get('zlib.output_compression')) {
    // Enable output compression
    ini_set('zlib.output_compression', 'On');
    ini_set('zlib.output_compression_level', 6);
    
    // Compression Headers
    header('Vary: Accept-Encoding');
    header('Content-Encoding: gzip');
}

// config
require_once 'config/config.php';
// core files
require_once '.core/core.php';

// Prepare route and buffer output so view logic runs first (setting $pageTitle, $metaDesc, etc.)
ob_start();
$renderedViewFile = redirector();
require_once $renderedViewFile;
$viewContent = ob_get_clean();

// Render main header HTML (<head>) with dynamic SEO variables
require_once 'public/index.php';

// Output the rendered view body
echo $viewContent;

