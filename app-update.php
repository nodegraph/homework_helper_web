<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Upcoming app update';
$pageDescription = 'Device requirements, saved work and transition information for the upcoming Homework Helper and Classroom Helper updates.';
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
        <p class="page-kicker">Homework Helper &amp; Classroom Helper</p>
        <h1 class="page-title">A new chat experience is coming.</h1>
        <p class="page-lede">Please check your device and keep your saved work before updating.</p>
        <div class="update-status" aria-label="Transition status">
            <p><strong>Status: live calls paused.</strong> New live avatar calls to Homework Helper are temporarily paused while we validate the new chat experience. The updated apps are still in private testing.</p>
            <p>Live-call pause verified: November 13, 2026 at 8:58 p.m. Pacific time. A completion time is not yet confirmed.</p>
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
        <section class="update-section" aria-labelledby="audience">
            <h2 id="audience">Classroom is changing to ages 13+</h2>
            <p>The updated Classroom Helper is for people aged 13 and older. It asks for an age-range confirmation on the device before lessons can start. Users under 13 cannot use the updated lessons; privacy, support, account-deletion and prior-data export options remain available. Homework Helper continues to be for ages 13 and older.</p>
            <p>Classroom Helper uses its existing store listings. On the Apple App Store, its name remains <strong>Cloud Classroom</strong>.</p>
        </section>
        <section class="update-section" aria-labelledby="availability">
            <h2 id="availability">Expect an interruption during the transition</h2>
            <p>The old live conversation service may be unavailable while we move to the new experience and the stores review the updates. Older installed apps may show a connection error instead of a maintenance or upgrade message.</p>
            <p>A completion date is not confirmed because store review times vary. Updates may become available on different platforms at different times. We will update this page as backend testing and store reviews progress.</p>
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
