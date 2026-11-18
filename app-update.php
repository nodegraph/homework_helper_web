<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'App update and device requirements';
$pageDescription = 'Device requirements, saved work and rollout information for Homework Helper and Cloud Classroom.';
$canonicalUrl = 'https://homeworkhelper.dev/app-update.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/_components/meta.php'; ?>
</head>
<body class="site-page">
    <?php include __DIR__ . '/_components/header.php'; ?>
    <main id="main" class="page-wrap section-wrap">
        <p class="page-kicker">Homework Helper &amp; Cloud Classroom</p>
        <h1 class="page-title">A new way to work through your questions.</h1>
        <p class="page-lede">Please check your device and keep your saved work before updating.</p>
        <div class="update-status" aria-label="Transition status">
            <p><strong>Try the current experience in your browser.</strong> Ask in a text conversation, use Speak or share a question image, and tap an answer to request its avatar video with audio. <a href="<?= htmlspecialchars($common['tryNowUrl'], ENT_QUOTES, 'UTF-8') ?>">Open Homework Helper</a>.</p>
            <p>As of November 18, 2026, the latest app updates have been submitted to the Android, Apple and Microsoft stores. Review and availability can differ by platform. The former continuous live-call workflow remains paused.</p>
        </div>
        <section class="update-section" aria-labelledby="requirements">
            <h2 id="requirements">Check your device</h2>
            <ul>
                <li>The new Android apps require <strong>Android 7 or later</strong>.</li>
                <li>The new iPhone and iPad apps require <strong>iOS or iPadOS 16.4 or later</strong>.</li>
                <li>The new Windows apps require <strong>Windows 10 version 1809 or later</strong>.</li>
            </ul>
            <p>Devices below these versions cannot install the new apps. Access through an older browser has not been verified and is not a supported replacement.</p>
        </section>
        <section class="update-section" aria-labelledby="apps">
            <h2 id="apps">Choose the app for what you want to learn</h2>
            <p>Homework Helper starts with your own question. <a href="https://www.faviclone.com/ai-teachers">Cloud Classroom</a> offers guided math, language and science lessons in a separate app. Both use the same chat style, speech input and optional avatar replies.</p>
            <p>Cloud Classroom continues to use its existing store listings. The Windows Store listing keeps its registered name, <strong>Cloud_Classroom</strong>.</p>
        </section>
        <section class="update-section" aria-labelledby="availability">
            <h2 id="availability">If your older app cannot connect</h2>
            <p>The former continuous live-call service is paused. Older installed apps that use that workflow may show a connection error instead of an upgrade message. You can try the current browser app while waiting for your store update.</p>
            <p>A release date is not guaranteed because store review times vary. Updates may become available on different platforms at different times. The older-browser compatibility limitation above still applies.</p>
        </section>
        <section class="update-section" aria-labelledby="saved-work">
            <h2 id="saved-work">Keep your app and saved work</h2>
            <p><strong>Do not uninstall the app or clear its data to fix a connection error.</strong> Export any saved work you want to keep before upgrading. Keep the exported files in a safe location.</p>
            <p>When the update is available, install it from the same store listing. Earlier saved files and new conversation history may be accessed separately; older server conversations are not automatically imported into the new experience.</p>
            <p>For help finding or exporting saved work, contact <a href="mailto:support@nodegraph.com">support@nodegraph.com</a>.</p>
        </section>
    </main>
    <?php include __DIR__ . '/_components/footer.php'; ?>
</body>
</html>
