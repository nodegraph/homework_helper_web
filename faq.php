<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Questions, answered';
$pageDescription = 'Quick answers about Homework Helper, supported devices, AI study help, and privacy.';
$canonicalUrl = 'https://homeworkhelper.dev/faq.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/_components/meta.php'; ?>
</head>
<body class="site-page">
    <?php include __DIR__ . '/_components/header.php'; ?>
    <main id="main" class="page-wrap section-wrap">
        <p class="page-kicker">Good to know</p>
        <h1 class="page-title">Questions, answered.</h1>
        <p class="page-lede">The essentials before you jump in.</p>
        <div class="faq-list">
            <details class="faq-item">
                <summary>Who is Homework Helper for?</summary>
                <p>Teens aged 13 and older and adults. Review a topic, work through a problem, or ask a follow-up question at your own pace.</p>
            </details>
            <details class="faq-item">
                <summary>Which helper should I choose?</summary>
                <p>Start with Homework Helper for a question of your own. Choose Math Teacher, Language Teacher, or Science Teacher to explore available courses and guided activities.</p>
            </details>
            <details class="faq-item">
                <summary>Can I show a question instead of typing it?</summary>
                <p>Yes. Share an image, take a photo, or use the drawing tools to show what you're working on. You can also speak or type during a call.</p>
            </details>
            <details class="faq-item">
                <summary>Does it work on my device?</summary>
                <p>Homework Helper has apps for Android, iPhone, iPad, and Windows. Check your device's store listing for compatibility. Store updates may arrive at different times.</p>
            </details>
            <details class="faq-item">
                <summary>Do I need an internet connection?</summary>
                <p>Yes. Calls use our online AI service and microphone access. You may see a queue when available helpers are busy. Camera access is only needed when you take a photo.</p>
            </details>
            <details class="faq-item">
                <summary>Are the answers always right?</summary>
                <p>AI can make mistakes. Use the explanations to explore ideas, and check important answers against your course materials or with a teacher. You can report a response directly from the chat.</p>
            </details>
            <details class="faq-item">
                <summary>How do I manage my data?</summary>
                <p>Open Settings &rarr; Privacy in the app for privacy information and account-deletion controls. See our <a href="https://www.faviclone.com/homework-helper/privacy">privacy policy</a> or <a href="https://www.faviclone.com/homework-helper/delete-data">data-deletion guidance</a> for more.</p>
            </details>
        </div>
        <div class="faq-contact">
            <p>Something else on your mind?</p>
            <a class="button button-secondary" href="/contact.php">Get in touch</a>
        </div>
    </main>
    <?php include __DIR__ . '/_components/footer.php'; ?>
</body>
</html>
