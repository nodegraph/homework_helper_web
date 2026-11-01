<?php
function siteIcon(string $name, string $class = ''): string {
    $paths = [
        'arrow' => '<path d="M5 12h14m-6-6 6 6-6 6"/>',
        'play' => '<path d="m9 5 11 7-11 7Z" fill="currentColor" stroke="none"/>',
        'chat' => '<path d="M21 11a8 8 0 0 1-8 8H6l-4 3V11a9 9 0 0 1 19 0Z"/><path d="M7 10h10M7 14h6"/>',
        'photo' => '<rect x="3" y="3" width="18" height="18" rx="4"/><circle cx="8" cy="8" r="1.5"/><path d="m3 16 6-5 5 5 3-3 4 4"/>',
        'draw' => '<path d="m15 4 5 5M4 20l5-1L21 7a2 2 0 0 0-5-5L4 14Z"/><path d="M4 20h16"/>',
        'phone' => '<rect x="6" y="2" width="12" height="20" rx="3"/><path d="M10 18h4"/>',
        'tablet' => '<rect x="3" y="2" width="18" height="20" rx="3"/><path d="M10 18h4"/>',
        'desktop' => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8m-4-4v4"/>',
        'web' => '<rect x="2" y="3" width="20" height="18" rx="3"/><path d="M2 8h20M6 5.5h.01M9 5.5h.01"/>',
        'check' => '<path d="m5 12 4 4L19 6"/>',
        'plus' => '<path d="M5 12h14M12 5v14"/>',
    ];
    return '<svg class="icon ' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . ($paths[$name] ?? $paths['arrow']) . '</svg>';
}
