# Homework Helper website and YouMacro referral refresh

## Scope

Refreshed the dedicated homepage and the existing `/authors.php` inbound URL with
approved November 18 Store media. Both lead with the avatar and its original
audio. The homepage highlights voice and screenshot input, image enlargement and
conversation continuity, with Android, iPhone, physical iPad and Windows demos.
The referral page provides direct browser/Windows calls to action and describes
an explicit screenshot-and-question workflow for YouMacro visitors. It does not
claim automatic video importing or an embedded YouMacro integration.

Shared FAQ, metadata and rollout copy now describe text chat, push-to-speak and
on-demand avatar playback. Outdated age-gate and bundled-teacher descriptions are
removed to match the current app behavior and owner direction. Cloud Classroom
is presented as a separate app. Device requirements, prior saved-work guidance,
Store destinations, legacy routes and support details are preserved.

## Source and media integrity

The clean starting checkout was `6798078`. Before publishing, fetched and
fast-forwarded to existing remote `75e79b74454df9370ec0ca69197ba85069b89cad`,
preserving its three later release-notice commits. The in-progress task changes
were safely stashed/restored and merged without conflicts, then the notice text
was updated for the current submitted versions. No force push or history rewrite.

`docs/media-refresh-20261118.json` records sources, exact hashes, human approvals,
dimensions, caption timings and linked credits. The 18 public assets total
29,556,909 bytes. All four MP4/VTT pairs retain the approved source bytes; WebP
images preserve full framing. `.gitattributes` preserves original VTT line endings.
The iPhone clip is accurately described as a simulator feature tour; it is not
presented as a successful speech-transcription capture.

## Local validation

- PHP 8.5.2 syntax checks passed for every changed PHP file; JavaScript syntax
  check passed. The new styles are plain CSS, so no Tailwind compilation or app
  binary build was required.
- Actual PHP server at `http://127.0.0.1:8092`; no mocked pages, API data or media.
- Homepage, referral, FAQ, contact and app-update routes returned HTTP 200.
- 50 layout/theme combinations: five routes at 1440, 1024, 768, 390 and 320 pixels,
  in light and dark themes, with no horizontal overflow or page errors.
- All four actual demos decoded video frames and loaded caption cues; both hero
  players also started successfully. Browser QA muted playback. Audio/sync quality
  is covered by the unchanged sources' existing human approval, not automated
  claims about hearing the audio.
- No MP4 request before Play. Switching device tabs pauses videos; only one video
  plays at a time. Arrow keys, Home and End select tabs and move focus.
- Both screenshot dialogs loaded images, closed with Escape and restored focus.
- JavaScript-disabled check: all four direct video links remain visible and
  inactive playback overlays are hidden. Screenshot anchors work as direct links.
- All 18 media files served through PHP matched their manifest SHA-256 hashes.
- Desktop, mobile and feature-gallery screenshots were visually reviewed.
  Review found and fixed joined mobile heading words and restored the no-JS links.

Local QA receipts/screenshots are in the operator workspace under
`live_agent/.artifacts/homework-site-refresh-20261118/local-qa/`. Existing desktop
browser automation was unavailable; validation used a fresh isolated Chrome
profile with the installed current driver, not the user's browser profile.

## Publication

Keep existing Vercel project `node-graph/homework-helper-web` and GitHub repository
`nodegraph/homework_helper_web`. Public GitHub metadata verified that the prior
remote main commit had a successful Production deployment. Publish through that
existing integration, then verify live routes, interactions and media hashes.
No Vercel project settings, credentials, audience or domain changes are needed.
