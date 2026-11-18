# Homework Helper website

The PHP marketing site at **homeworkhelper.dev**. The homepage and `/authors.php`
use the latest approved Store media, showing the avatar first, speech input second
and screenshot capture third. The referral page addresses visitors from YouMacro
Video Downloader and links directly to the browser app and existing Store pages.

## Local development

```sh
npm install
npm run build
php -S 127.0.0.1:8092 -t .
```

On Windows, use `npm.cmd`; PHP is installed at `I:\installs\php-8.5.2\php.exe` on
the development machine. Preview with PHP, not a plain static file server.

## Editing

- `index.php`: avatar-first homepage, feature gallery and four platform demos.
- `authors.php`: YouMacro referral landing page; preserve this inbound URL.
- `_components/product-media.php`: shared media data, video/gallery markup and
  linked attribution.
- `assets/product-showcase.css`: responsive layouts and image viewer.
- `assets/site.css`, `assets/site.js`: shared branding, themes, navigation and
  accessible playback, tabs and screenshot enlargement.
- `_components/`: shared metadata, header, footer and inline SVG icons.
- `faq.php`, `contact.php`: product information and support.
- `config.php`: existing Store destinations and legacy route settings.
- `assets/refresh-20261118/`: versioned approved videos, captions and WebP images.
- `docs/media-refresh-20261118.json`: source/output hashes, human approvals,
  credits and derivation details. Source references are relative to `live_agent`.

The four video/caption pairs retain their approved bytes, including the avatar’s
original audio, narration and music. Total media is about 29.6 MB, but no MP4 is
requested before Play. Selecting another demo or hiding the page pauses playback.
Native controls and direct-file links remain available; JavaScript is not needed
to open an image or video directly. Video tabs support arrows, Home and End.
Image enlargement supports Escape, focus restoration and a full-size image link.

The Android, Windows and iPad recordings use real devices. The iPhone preview is
the approved simulator feature tour, and is not presented as a successful spoken
transcription demonstration. Posters and screenshots retain complete framing.

The pages describe the current question-and-reply workflow, with optional avatar
video requested by tapping a reply. Cloud Classroom is a separate app. Store
review timing can differ by platform, so the pages do not promise that every
submitted feature is already available in every public binary.

## Hosting and legacy routes

Keep the existing Vercel PHP deployment and domain. `vercel.json` serves root PHP
routes, `assets/**`, `dist/**` and `app-ads.txt`. Confirm the existing project’s
Git integration before publishing. No hosting migration or new account is needed.
Rebuild and commit `dist/output.css` if Tailwind utility classes change; the two
plain CSS files are served directly. This media update uses plain CSS classes.

Store URL values, download routing, privacy routes, contact details and the
separate reward route stay in place. No new tracking SDK, incentive, rating or
testimonial is introduced. The referral page does not claim that Homework Helper
automatically imports videos or runs inside YouMacro.
