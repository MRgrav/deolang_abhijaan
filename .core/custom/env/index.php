<?php

// function get_env($string) {
//     $env = parse_ini_file('.env');
//     echo $env[$string];
// }

// // function install() {
// //     echo
// // }

// load-env.php
// $envPath = ROOT . '/.env';
// if (file_exists($envPath)) {
//     $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//     foreach ($lines as $line) {
//         if (strpos(trim($line), '#') === 0) continue;        // skip comments
//         [$k, $v] = array_map('trim', explode('=', $line, 2) + [1 => '']);
//         $v = trim($v, "\"'");                              // strip quotes
//         putenv("$k=$v");
//         $_ENV[$k] = $v;
//         $_SERVER[$k] = $v;
//     }
// }


// function get_env($key){
//     return htmlspecialchars($_ENV[$key] ?? '');
// }

