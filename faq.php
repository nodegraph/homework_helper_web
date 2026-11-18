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
                <p>Anyone working through a question or reviewing something they want to understand. Bring a homework problem, explore a diagram, or ask a follow-up at your own pace.</p>
            </details>
            <details class="faq-item">
                <summary>How do the avatar replies work?</summary>
                <p>Answers appear in the text chat. Tap a completed reply to request its avatar video with spoken audio. You choose which answers to watch; you can also continue the conversation in text.</p>
            </details>
            <details class="faq-item">
                <summary>Can I show a question instead of typing it?</summary>
                <p>Yes. Take a photo, add an image, draw, or use Screenshot. Browsers can capture a tab, window or display; Windows offers a window or display picker; Android uses its screen-sharing picker. On iPhone and iPad, take a normal screenshot and import it. Tap an attached image to take a closer look.</p>
            </details>
            <details class="faq-item">
                <summary>Does it work on my device?</summary>
                <p>Try it in a browser, or get the Android, iPhone, iPad or Windows app. Check your device’s store listing for compatibility. The demos show the latest submitted update; store availability may vary while reviews finish.</p>
            </details>
            <details class="faq-item">
                <summary>Do I need an internet connection?</summary>
                <p>Yes. Questions, speech transcription and requested avatar videos use our online services. Allow microphone access when you use Speak and camera access when you take a photo. Responses and videos may take longer when the service is busy.</p>
            </details>
            <details class="faq-item">
                <summary>Are the answers always right?</summary>
                <p>AI can make mistakes. Use the explanations to explore ideas, and check important answers against your course materials or with a teacher. <a href="/contact.php">Contact support</a> if an answer needs review.</p>
            </details>
            <details class="faq-item">
                <summary>How do I manage my data?</summary>
                <p>See our <a href="https://www.faviclone.com/homework-helper/privacy">privacy policy</a> for how questions, images and responses are handled, and <a href="https://www.faviclone.com/homework-helper/delete-data">data-deletion guidance</a> to manage your data.</p>
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
