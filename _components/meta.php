<?php
require_once __DIR__ . '/../config.php';
$siteTitle = isset($pageTitle) ? $pageTitle . ' - Homework Helper' : 'Homework Helper - Less stuck. More aha.';
$siteDescription = $pageDescription ?? 'Talk through homework, share a photo, or sketch an idea with your AI study companion. Meet Homework Helper for Android, iPhone, iPad and Windows. Ages 13+.';
$sitePath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$siteCanonical = $canonicalUrl ?? 'https://homeworkhelper.dev' . ($sitePath === '/index.php' ? '/' : $sitePath);
$escapeMeta = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#faf9f6">
<script>
(() => {
    let preference;
    try {
        preference = localStorage.getItem('homework-helper-theme');
    } catch {
        // The theme still works when browser storage is unavailable.
    }
    const theme = preference === 'light' || preference === 'dark'
        ? preference
        : 'light';
    document.documentElement.dataset.theme = theme;
    document.documentElement.style.colorScheme = theme;
    document.querySelector('meta[name="theme-color"]').content = theme === 'dark' ? '#141917' : '#faf9f6';
})();
</script>
<title><?= $escapeMeta($siteTitle) ?></title>
<meta name="description" content="<?= $escapeMeta($siteDescription) ?>">
<link rel="canonical" href="<?= $escapeMeta($siteCanonical) ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Homework Helper">
<meta property="og:title" content="<?= $escapeMeta($siteTitle) ?>">
<meta property="og:description" content="<?= $escapeMeta($siteDescription) ?>">
<meta property="og:url" content="<?= $escapeMeta($siteCanonical) ?>">
<meta property="og:image" content="https://homeworkhelper.dev/assets/showcase/study-art.webp">
<meta property="og:image:alt" content="A notebook, pencil and science-inspired study illustration">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $escapeMeta($siteTitle) ?>">
<meta name="twitter:description" content="<?= $escapeMeta($siteDescription) ?>">
<meta name="twitter:image" content="https://homeworkhelper.dev/assets/showcase/study-art.webp">
<link rel="icon" type="image/png" href="/assets/showcase/app-icon.png">
<link rel="apple-touch-icon" href="/assets/showcase/app-icon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="/dist/output.css" rel="stylesheet">
<link href="/assets/site.css" rel="stylesheet">
