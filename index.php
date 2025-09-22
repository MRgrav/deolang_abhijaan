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
header("Referrer-Policy: strict-origin-when-cross-origin");

// Performance and Caching Headers
// header("Cache-Control: no-cache, no-store, must-revalidate");
// header("Pragma: no-cache");
// header("Expires: 0");

// Basic Caching Control
// Cache-Control Header
header("Cache-Control:public, max-age=3600, stale-while-revalidate=86400");

// Expires Header (HTTP/1.0 compatibility)
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');

// Last-Modified Header
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');

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
// main header
require_once 'public/index.php';

// redirects the routes
require_once redirector();
