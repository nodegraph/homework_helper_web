# Homework Helper website

The PHP marketing website at **homeworkhelper.dev**, using real app recordings,
screenshots and existing promotional artwork. The November 2026 redesign keeps
the existing Google Play, Apple App Store, Microsoft Store and Chrome Web Store
destinations, including while those stores serve the previous app versions.

## Local development

```sh
npm install
npm run build
php -S 127.0.0.1:8092 -t .
```

Open `http://127.0.0.1:8092`. On Windows use `npm.cmd` if PowerShell blocks npm.
The preview requires PHP; serving the directory as plain static files will not
render templates. `npm run build-css` watches the legacy Tailwind stylesheet.

## Editing

- `index.php`: homepage, platform demo data and download section.
- `assets/site.css`: responsive design, shared navigation and supporting pages.
- `assets/site.js`: accessible demo tabs, on-demand video playback and mobile nav.
- `_components/`: shared metadata, header, footer and small inline SVG icons.
- `contact.php`, `faq.php`: current support and product information.
- `config.php`: existing store URLs and settings used by legacy routes.
- `assets/showcase/`: compressed derivatives of the latest promotional media.
- `docs/media-provenance.json`: source references, hashes and transformations.

The video selector supports arrow keys, Home and End. Each video retains its
actual app footage, original tutor audio and distinct action narrator, with
English WebVTT captions. No MP4 loads until playback is requested. Selecting
another device or hiding the page pauses playback. The videos have native
controls and a direct-file fallback; all four are linked without JavaScript.

Images are proportionally resized WebP exports. Videos are H.264/AAC MP4s with
faststart, proportional scaling and no edits to the source timeline. Sources
remain in the live_agent store-listing directories and the operator's Homework
Helper video handoff. The entire new media set is approximately 11 MB; media is
served locally, without loading a YouTube player or advertising SDK.

## Release notes

The new app updates were still under store review when these pages were
prepared. The demo section states this explicitly. Update that short note only
after confirming the corresponding releases are publicly available. Existing
store links stay usable throughout review. The Chrome extension link is kept
separate from the four redesigned app demos.

The footer links to the current Homework Helper privacy policy. Legacy PHP
policy and reward routes are preserved for existing callers. No review claims,
ratings, guaranteed grades or unverified testimonials are added to the new site.

Vercel currently deploys PHP plus `assets/**` and `dist/**`. Rebuild and commit
`dist/output.css` when changing Tailwind template classes. `assets/site.css` and
`assets/site.js` are served directly. Local commits do not publish the site;
deployment is a separate step.

## Verification (November 1, 2026)

- Production CSS build, all changed PHP syntax checks and JavaScript syntax pass.
- Homepage, FAQ, contact and preserved legacy routes return HTTP 200.
- All four original store URLs match the preceding revision exactly.
- Download redirects checked for Android, iPhone, iPad desktop user agent,
  Windows, Linux and an absent user agent.
- Chrome layout checks at 320, 390, 768, 1024 and 1440 pixels show no horizontal
  overflow. Desktop and mobile layouts were visually reviewed.
- All four videos start playback, report no media error and load English caption
  cues (Android 23, iPhone 7, iPad 7, Windows 19). Full FFmpeg decode checks pass.
- MP4 requests are absent on initial page load. Arrow/Home/End navigation selects
  the matching demo and moves focus; mobile navigation closes after selection.
- Browser console contains no errors or warnings. Shared skip links have content
  targets, and the FAQ uses native accessible disclosure controls.
