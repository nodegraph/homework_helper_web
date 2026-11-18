<?php
require_once __DIR__ . '/site-icons.php';
const HOMEWORK_MEDIA_ROOT = '/assets/refresh-20261118';
function homeworkDemos(): array {
    return [
        'android' => ['name' => 'Android', 'icon' => 'phone', 'duration' => '0:55', 'width' => 1080, 'height' => 2144, 'title' => 'Ask aloud. See it explained.', 'description' => 'A real Pixel recording: hear the avatar, ask a question with Speak, and bring a colorful worksheet into the conversation.'],
        'iphone' => ['name' => 'iPhone', 'icon' => 'phone', 'duration' => '0:20', 'width' => 886, 'height' => 1920, 'title' => 'A closer look at your study companion.', 'description' => 'An iPhone feature tour showing the avatar, the Speak button and a worksheet screenshot. Recorded in the iPhone simulator; this clip does not demonstrate a spoken question being transcribed.'],
        'ipad' => ['name' => 'iPad', 'icon' => 'tablet', 'duration' => '0:22', 'width' => 1200, 'height' => 1600, 'title' => 'Give your question some room.', 'description' => 'Recorded on a real iPad: add a worksheet screenshot, ask out loud, and hear the avatar explain the answer.'],
        'windows' => ['name' => 'Windows', 'icon' => 'desktop', 'duration' => '0:30', 'width' => 1920, 'height' => 1080, 'title' => 'From another window to a clearer answer.', 'description' => 'A real Windows recording with the avatar’s original voice, speech input, screenshot capture and a colorful question to explore.'],
    ];
}
function mediaEscape($value): string { return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8'); }
function homeworkVideo(string $platform, string $id): void {
    $demo = homeworkDemos()[$platform];
    $base = HOMEWORK_MEDIA_ROOT . '/' . $platform;
    ?>
    <figure class="film" data-film>
        <div class="film-screen" style="--film-ratio:<?= $demo['width'] ?> / <?= $demo['height'] ?>">
            <video id="<?= mediaEscape($id) ?>" controls playsinline preload="none" poster="<?= $base ?>-poster.webp" width="<?= $demo['width'] ?>" height="<?= $demo['height'] ?>" data-src="<?= $base ?>-demo.mp4" aria-label="Homework Helper <?= $demo['name'] ?> demo"><track kind="captions" src="<?= $base ?>-demo.vtt" srclang="en" label="English"></video>
            <button class="film-start" type="button" data-video-start aria-label="Play <?= $demo['name'] ?> demo with sound"><span class="film-play"><?= siteIcon('play') ?></span><span>Watch with sound <small><?= $demo['duration'] ?></small></span></button>
        </div>
        <figcaption class="film-caption"><span><?= $demo['name'] ?> · <?= $demo['duration'] ?> · Captions available</span><a href="<?= $base ?>-demo.mp4">Open video</a></figcaption>
        <p class="video-error" role="status" hidden>Couldn’t start the preview. Use the Open video link to watch it directly.</p>
    </figure>
    <?php
}
function homeworkShot(string $file, string $title, string $alt, string $class = ''): void {
    $src = HOMEWORK_MEDIA_ROOT . '/' . $file . '.webp'; ?>
    <a class="shot-link <?= mediaEscape($class) ?>" href="<?= mediaEscape($src) ?>" data-screenshot data-title="<?= mediaEscape($title) ?>" aria-label="Enlarge: <?= mediaEscape($title) ?>"><img src="<?= mediaEscape($src) ?>" alt="<?= mediaEscape($alt) ?>" width="960" height="2133" loading="lazy" decoding="async"><span class="shot-enlarge" aria-hidden="true"><?= siteIcon('expand') ?></span></a>
    <?php
}
function homeworkMediaCredits(): void { ?>
    <details class="media-credits"><summary>Recording, music and worksheet credits</summary><div>
        <p>These are actual app recordings edited to shorten waiting time. The avatar’s original audio is included, with narration and quiet background music. Gallery screenshots are from Android. The iPhone feature tour was recorded in the simulator; the other demos use real devices. Store updates may become available at different times.</p>
        <p>Music: “Simplicity” by <a href="https://www.scottbuckley.com.au/library/simplicity/">Scott Buckley</a>, released under <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>. Excerpted, level-adjusted, ducked under speech and faded.</p>
        <p>Worksheet: <a href="https://im.kendallhunt.com/MS/students/1/2/1/index.html#activity-1.1">“What Kind and How Many?”</a>, Illustrative Mathematics, originally developed by Open Up Resources, via Kendall Hunt. Licensed under <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>. Original question and diagrams unchanged; compact layout reformatted for the demonstrations. AI explanations are not official publisher solutions.</p>
    </div></details>
<?php }
