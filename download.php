<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/BrowserDetection.php';

$userAgent = isset($_SERVER['HTTP_USER_AGENT']) && is_string($_SERVER['HTTP_USER_AGENT'])
    ? $_SERVER['HTTP_USER_AGENT']
    : '';
$browser = new foroco\BrowserDetection();
$device = $browser->getOS($userAgent);
$osFamily = strtolower($device['os_family'] ?? '');
$redirectUrl = '/#download';

// Some iPads identify as Macintosh but still include Apple's Mobile token.
// A plain Macintosh user agent remains on the platform chooser.
$ipadDesktopAgent = preg_match('/Macintosh/i', $userAgent)
    && preg_match('/\bMobile\//i', $userAgent);
$iosDevice = in_array($osFamily, ['ios', 'iphone', 'ipad'], true)
    || strtolower($device['os_name'] ?? '') === 'ios'
    || preg_match('/\b(?:iPhone|iPad|iPod)\b/i', $userAgent)
    || $ipadDesktopAgent;

if ($osFamily === 'android' && !empty($common['googlePlayUrl'])) {
    $redirectUrl = $common['googlePlayUrl'];
} elseif ($iosDevice && !empty($common['appStoreUrl'])) {
    $redirectUrl = $common['appStoreUrl'];
} elseif ($osFamily === 'windows' && !empty($common['microsoftStoreUrl'])) {
    $redirectUrl = $common['microsoftStoreUrl'];
}

header('Cache-Control: private, no-store');
header('Vary: User-Agent');
header('Location: ' . $redirectUrl, true, 302);
exit;
