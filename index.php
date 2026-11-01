<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/_components/site-icons.php';
$platforms = [
    'android' => ['name' => 'Android', 'icon' => 'phone', 'duration' => '1:29', 'title' => 'A question. A conversation. A clearer idea.', 'description' => 'Watch a real Pixel session: check an algebra answer, upload a science worksheet, and hear the tutor talk it through.', 'width' => 1080, 'height' => 2410],
    'iphone' => ['name' => 'iPhone', 'icon' => 'phone', 'duration' => '0:53', 'title' => 'Big questions. Pocket-sized help.', 'description' => 'See a real iPhone session with a speaking avatar, an algebra check and an image-based science question.', 'width' => 886, 'height' => 1920],
    'ipad' => ['name' => 'iPad', 'icon' => 'tablet', 'duration' => '0:30', 'title' => 'A little more room to work it out.', 'description' => 'See the tutor, share a worksheet, and make space for the explanation in the iPad app.', 'width' => 1200, 'height' => 1600],
    'windows' => ['name' => 'Windows', 'icon' => 'desktop', 'duration' => '1:10', 'title' => 'Make your desk a place for discovery.', 'description' => 'Follow a real Windows session from an algebra question to an uploaded science worksheet, with the tutor’s spoken replies.', 'width' => 1920, 'height' => 1080],
];
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include __DIR__ . '/_components/meta.php'; ?></head>
<body class="site-page">
<?php include __DIR__ . '/_components/header.php'; ?>
<main id="main">
    <section class="hero section-wrap" aria-labelledby="hero-heading">
        <div class="hero-copy">
            <p class="eyebrow"><span class="eyebrow-dot"></span> YOUR STUDY SIDEKICK</p>
            <h1 id="hero-heading">Less stuck.<br>More <em>aha.</em></h1>
            <p class="hero-description">That tricky question? Let’s work it out.<br class="desktop-break"> Talk, snap, or sketch your way to understanding with an AI study companion.</p>
            <div class="hero-actions"><a class="button button-primary" href="<?= htmlspecialchars($common['tryNowUrl'], ENT_QUOTES, 'UTF-8') ?>">Try it now <?= siteIcon('arrow') ?></a><a class="button button-secondary" href="#download">Find your app</a><a class="button button-text" href="#in-action"><?= siteIcon('play') ?> Watch a demo</a></div>
            <p class="hero-platforms">Android <span>·</span> iPhone <span>·</span> iPad <span>·</span> Windows</p>
        </div>
        <div class="hero-visual">
            <div class="hero-orbit" aria-hidden="true"></div>
            <div class="hero-tablet device-frame"><img src="/assets/showcase/ipad-chat.webp" width="1000" height="1333" alt="Homework Helper on iPad, discussing an uploaded science worksheet" fetchpriority="high"></div>
            <div class="hero-phone device-frame"><img src="/assets/showcase/iphone-chat.webp" width="720" height="1565" alt="Homework Helper’s speaking avatar and an algebra explanation on iPhone" fetchpriority="high"></div>
            <span class="hero-sticker">Let’s work<br>it out. <span aria-hidden="true">↗</span></span>
            <span class="hero-visual-caption">Real app recordings. AI-powered conversations.</span>
        </div>
    </section>
    <div class="section-wrap quick-strip" aria-label="Ways to ask"><?php foreach (['chat' => 'Talk it through', 'photo' => 'Snap a question', 'draw' => 'Sketch an idea'] as $icon => $label): ?><span><?= siteIcon($icon) ?><?= $label ?></span><?php endforeach; ?></div>

    <section id="how-it-works" class="section-wrap how-section" aria-labelledby="how-heading">
        <div class="section-heading"><div><p class="eyebrow">HOW YOU GET THERE IS UP TO YOU</p><h2 id="how-heading">Bring your question.<br>Find your way forward.</h2></div><p>No perfect prompt needed. Start with what you have, and keep asking until the next step makes sense.</p></div>
        <div class="feature-grid">
            <article class="feature feature-talk"><div class="feature-copy"><span class="step-label">01 / TALK</span><h3>Make it a conversation.</h3><p>Ask out loud or type it in. Hear an explanation, then follow your curiosity.</p></div><div class="feature-screen phone-screen"><img src="/assets/showcase/android-chat.webp" alt="An Android conversation with Homework Helper" width="720" height="1607" loading="lazy"></div></article>
            <article class="feature feature-share"><div class="feature-copy"><span class="step-label">02 / SHARE</span><h3>Show what’s got you stuck.</h3><p>Share a homework photo or screenshot. Give your question a little context.</p></div><div class="feature-screen phone-screen"><img src="/assets/showcase/iphone-worksheet.webp" alt="A science worksheet attached to an iPhone conversation" width="720" height="1565" loading="lazy"></div></article>
            <article class="feature feature-draw"><div class="feature-copy"><span class="step-label">03 / SKETCH</span><h3>Put your thinking on the page.</h3><p>Draw a diagram or mark up an image. Sometimes a few lines say it best.</p></div><div class="drawing-screen"><img src="/assets/showcase/windows-drawing.webp" alt="An original right-triangle sketch in Homework Helper’s drawing editor on Windows" width="1200" height="675" loading="lazy"></div><span class="drawing-note">Your ideas, in your own lines.</span></article>
        </div>
        <div class="teacher-note"><span class="teacher-note-icon"><?= siteIcon('plus') ?></span><p><strong>A little more guidance?</strong> Choose a teacher for math, languages or science and explore a course at your own pace.</p><img src="/assets/showcase/iphone-home.webp" width="600" height="1304" alt="The app’s four agents: Homework Helper, Math Teacher, Language Teacher and Science Teacher" loading="lazy"></div>
    </section>

    <section id="in-action" class="demo-section" aria-labelledby="demo-heading">
        <div class="section-wrap">
            <div class="section-heading demo-heading"><div><p class="eyebrow">TAKE A LOOK AROUND</p><h2 id="demo-heading">Real app. Real <em>aha.</em></h2></div><p>Math, science, and a question from a photo.<br>See how a study session comes together.</p></div>
            <div class="platform-tabs" role="tablist" aria-label="Choose a demo platform">
            <?php foreach ($platforms as $key => $platform): ?><button id="tab-<?= $key ?>" class="platform-tab" role="tab" aria-selected="<?= $key === 'android' ? 'true' : 'false' ?>" aria-controls="demo-<?= $key ?>" tabindex="<?= $key === 'android' ? '0' : '-1' ?>" data-platform="<?= $key ?>"><?= siteIcon($platform['icon']) ?> <?= $platform['name'] ?></button><?php endforeach; ?>
            </div>
            <?php foreach ($platforms as $key => $platform): ?>
            <div id="demo-<?= $key ?>" class="demo-panel demo-<?= $key ?>" role="tabpanel" aria-labelledby="tab-<?= $key ?>" tabindex="0" <?= $key !== 'android' ? 'hidden' : '' ?>>
                <div class="demo-stage">
                    <div class="demo-player" style="--video-ratio:<?= $platform['width'] ?> / <?= $platform['height'] ?>">
                        <video controls playsinline preload="none" poster="/assets/showcase/<?= $key ?>-poster.webp" width="<?= $platform['width'] ?>" height="<?= $platform['height'] ?>" aria-label="Homework Helper on <?= $platform['name'] ?> walkthrough" data-src="/assets/showcase/<?= $key ?>-demo.mp4">
                            <track kind="captions" src="/assets/showcase/<?= $key ?>-demo.vtt" srclang="en" label="English" default>
                        </video>
                        <button class="video-start" data-video="<?= $key ?>" aria-label="Play the <?= $platform['name'] ?> demo"><span class="play-disc"><?= siteIcon('play') ?></span><span>Play demo <span class="play-duration">/ <?= $platform['duration'] ?></span></span></button>
                    </div>
                </div>
                <div class="demo-copy"><span class="demo-badge"><?= $platform['name'] ?> <span>· <?= $platform['duration'] ?></span></span><h3><?= $platform['title'] ?></h3><p><?= $platform['description'] ?></p><ul class="demo-points"><li><?= siteIcon('check') ?> Actual app recordings</li><li><?= siteIcon('check') ?> Hear the tutor’s replies</li><li><?= siteIcon('check') ?> English captions included</li></ul><a class="text-link" href="/assets/showcase/<?= $key ?>-demo.mp4">Open video <?= siteIcon('arrow') ?></a><p class="video-error" role="status" hidden>Having trouble playing? Use the Open video link.</p></div>
            </div>
            <?php endforeach; ?>
            <p class="demo-footnote">Recordings show the upcoming app update. Store availability may vary while reviews finish.</p>
            <noscript><p class="no-js-demos">Watch: <a href="/assets/showcase/android-demo.mp4">Android</a> · <a href="/assets/showcase/iphone-demo.mp4">iPhone</a> · <a href="/assets/showcase/ipad-demo.mp4">iPad</a> · <a href="/assets/showcase/windows-demo.mp4">Windows</a></p></noscript>
        </div>
    </section>

    <section id="download" class="section-wrap download-section" aria-labelledby="download-heading">
        <div class="download-intro"><p class="eyebrow">A FRESH WAY TO FIGURE IT OUT</p><h2 id="download-heading">Curiosity looks<br>good on you.</h2><p>Make room for your next “I get it.”<br>Find Homework Helper on your favorite device.</p></div>
        <img class="download-art" src="/assets/showcase/study-art.webp" width="1200" height="675" alt="A notebook, pencil and science-inspired illustration" loading="lazy">
        <div class="download-grid">
            <a class="download-card" href="<?= htmlspecialchars($common['googlePlayUrl'], ENT_QUOTES, 'UTF-8') ?>"><?= siteIcon('phone') ?><span><strong>Android</strong><small>Get it on Google Play</small></span><?= siteIcon('arrow') ?></a>
            <a class="download-card" href="<?= htmlspecialchars($common['appStoreUrl'], ENT_QUOTES, 'UTF-8') ?>"><?= siteIcon('tablet') ?><span><strong>iPhone &amp; iPad</strong><small>Download on the App Store</small></span><?= siteIcon('arrow') ?></a>
            <a class="download-card" href="<?= htmlspecialchars($common['microsoftStoreUrl'], ENT_QUOTES, 'UTF-8') ?>"><?= siteIcon('desktop') ?><span><strong>Windows</strong><small>Get it from Microsoft</small></span><?= siteIcon('arrow') ?></a>
            <a class="download-card" href="<?= htmlspecialchars($common['tryNowUrl'], ENT_QUOTES, 'UTF-8') ?>"><?= siteIcon('web') ?><span><strong>Web</strong><small>Try it in your browser</small></span><?= siteIcon('arrow') ?></a>
        </div>
        <p class="download-note">For teens 13+ and adults. Internet required. AI can make mistakes; check important answers.</p>
        <p class="chrome-link">On your browser? <a href="<?= htmlspecialchars($common['chromeWebStoreUrl'], ENT_QUOTES, 'UTF-8') ?>">Get the Chrome extension</a></p>
    </section>
</main>
<?php include __DIR__ . '/_components/footer.php'; ?>
</body>
</html>
