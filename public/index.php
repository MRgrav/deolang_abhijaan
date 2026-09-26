<?php
if (!defined('ROOT')) {
    http_response_code(404);
    exit;
}
?>
<?php
// Default fallbacks for dynamic SEO metadata
$pageTitle = $pageTitle ?? 'DeoLang - Innovative Tech Solutions';
$metaDesc = $metaDesc ?? 'Innovative tech solutions from Jorhat, Northeast India. Crafting cutting-edge apps, websites, and software to empower businesses.';
$keywords = $keywords ?? 'services, development, web, apps, android, mac, linux, deolang, ideas, digital, smart, ai, create, cutting-edge, mobile, desktop, northeast, it, jorhat, golaghat';
$author = $author ?? 'DeoLang Team';
$ogType = $ogType ?? 'website';
$canonicalUrl = $canonicalUrl ?? ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . $_SERVER['REQUEST_URI']);
$coverImg = $coverImg ?? asset('images/logo_192.png');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDesc) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>">
  <meta name="author" content="<?= htmlspecialchars($author) ?>">
  
  <!-- OpenGraph -->
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDesc) ?>">
  <meta property="og:type" content="<?= htmlspecialchars($ogType) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($coverImg) ?>">
  <meta property="og:locale" content="en_IN">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($metaDesc) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($coverImg) ?>">
  
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
  <link rel="icon" href="<?= asset('images/favicon.ico') ?>">
  <link preload rel="stylesheet" href="<?= asset('style.css') ?>">
  <!-- <link rel="stylesheet" href="<?= asset('style.min.css') ?>"> -->
  <!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
  <script src="<?= asset('tailwind.js') ?>"></script>
  <?php if (HTMX) {
    echo '<script src="https://unpkg.com/htmx.org@2.0.4" integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+" crossorigin="anonymous"></script>';
  } ?>
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/duotone/style.css" />
  <!-- Other meta tags, stylesheets, or scripts -->
  <meta name="google-adsense-account" content="ca-pub-5591235870596420">
</head>

<body>
  <script src="<?= asset('pocketbase.umd.js') ?>"></script>
  <script>
    const pb = new PocketBase('https://pk.deolang.com');
    //       console.log('pb :',<?php //echo get_env('PB_HOST'); ?>);
    // const PB_HOST = 'https://pkdb23.deolang.com';
    const COLLECTION = 'clients';

  </script>