<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/site-icons.php';
?>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <div class="nav-wrap">
        <a href="/" class="brand" aria-label="Homework Helper home">
            <img src="/assets/showcase/app-icon.png" width="36" height="36" alt="">
            <span>homework helper<span class="brand-dot">.</span></span>
        </a>
        <nav class="desktop-nav" aria-label="Main navigation">
            <a href="/#how-it-works">How it works</a>
            <a href="/#in-action">See it in action</a>
            <a href="/faq.php">FAQs</a>
        </nav>
        <div class="nav-actions">
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode" hidden>
                <span class="theme-icon-light"><?= siteIcon('sun') ?></span>
                <span class="theme-icon-dark"><?= siteIcon('moon') ?></span>
                <span class="theme-toggle-label">Light</span>
            </button>
            <a class="button button-primary button-small" href="<?= htmlspecialchars($common['tryNowUrl'], ENT_QUOTES, 'UTF-8') ?>">Try in browser</a>
            <details class="mobile-nav">
                <summary aria-label="Navigation menu"><span></span><span></span></summary>
                <nav aria-label="Mobile navigation"><a href="/#how-it-works">How it works</a><a href="/#in-action">See it in action</a><a href="/faq.php">FAQs</a><a href="/contact.php">Contact</a><a href="/#download">Get the app</a></nav>
            </details>
        </div>
    </div>
</header>
<aside class="upgrade-banner" aria-label="App update notice">
    <div class="section-wrap">
        A new way to ask, hear and understand.
        <a href="/app-update.php">Check device requirements and transition details</a>
    </div>
</aside>
