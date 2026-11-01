<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Contact';
$pageDescription = 'Get help with Homework Helper, privacy questions, or your account and data.';
$canonicalUrl = 'https://homeworkhelper.dev/contact.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/_components/meta.php'; ?>
</head>
<body class="site-page">
    <?php include __DIR__ . '/_components/header.php'; ?>
    <main id="main" class="page-wrap section-wrap">
        <p class="page-kicker">Here to help</p>
        <h1 class="page-title">A little help with<br>Homework Helper.</h1>
        <p class="page-lede">Questions, feedback, or something not working? Tell us which device you're using and what happened.</p>
        <div class="contact-actions">
            <a class="button button-primary" href="mailto:support@nodegraph.com?subject=Homework%20Helper%20support">Email support</a>
            <a class="button button-secondary" href="/faq.php">Quick answers</a>
        </div>
        <p class="contact-email"><a href="mailto:support@nodegraph.com">support@nodegraph.com</a></p>
        <section class="contact-privacy" aria-labelledby="privacy-help">
            <h2 id="privacy-help">Your privacy, your choice.</h2>
            <p>For account and data requests, open Settings &rarr; Privacy in the app or use the guidance below.</p>
            <div class="contact-actions">
                <a class="button button-secondary" href="https://www.faviclone.com/homework-helper/privacy">Privacy policy</a>
                <a class="button button-secondary" href="https://www.faviclone.com/homework-helper/delete-data">Account &amp; data deletion</a>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/_components/footer.php'; ?>
</body>
</html>
