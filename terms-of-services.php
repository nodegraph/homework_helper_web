<?php
// Include config for global variables
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = "Terms of Service";
    $pageDescription = "Terms of Service for " . $common['appName'] . " App";
    include '_components/meta.php';
    ?>
    <style>
        /* Keep policy typography and surfaces in step with the shared theme. */
        body.policy-page {
            font-family: var(--font);
            font-size: 18px;
            font-weight: 500;
            line-height: 1.8;
            color: var(--ink);
            background: var(--paper);
            min-height: 100vh;
        }
        .policy-page #main.container {
            width: min(960px, calc(100% - 40px));
            max-width: none;
            margin: 0 auto;
            padding: 48px 0;
            overflow-wrap: anywhere;
        }
        .policy-page .header {
            text-align: center;
            padding: 36px 24px;
            color: var(--ink);
            background: var(--accent-soft);
            border: 1px solid var(--line);
            border-radius: 24px;
            margin-bottom: 32px;
        }
        .policy-page .header h1 {
            font-size: clamp(32px, 5vw, 46px);
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -1.5px;
            margin-bottom: 12px;
        }
        .policy-page .header p { font-size: 20px; font-weight: 600; }
        .policy-page .content {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 24px;
            padding: clamp(24px, 5vw, 48px);
            margin-bottom: 32px;
        }
        .policy-page .content h1,
        .policy-page .content h2,
        .policy-page .content h3,
        .policy-page .content > strong {
            display: block;
            color: var(--ink);
            font-weight: 800;
            line-height: 1.35;
            margin: 32px 0 16px;
        }
        .policy-page .content h1 { font-size: 30px; }
        .policy-page .content h2,
        .policy-page .content > strong { font-size: 25px; }
        .policy-page .content h3 { font-size: 21px; }
        .policy-page .content > :first-child { margin-top: 0; }
        .policy-page .content p {
            margin-bottom: 20px;
            font-size: 18px;
            line-height: 1.8;
            color: var(--muted);
        }
        .policy-page .content ul,
        .policy-page .content ol { margin: 24px 0; padding-left: 26px; }
        .policy-page .content ul { list-style: disc; }
        .policy-page .content ol { list-style: decimal; }
        .policy-page .content li { margin-bottom: 12px; color: var(--muted); }
        .policy-page .content li::marker { color: var(--accent); }
        .policy-page .content strong { color: var(--ink); font-weight: 700; }
        .policy-page .content a {
            color: var(--accent);
            text-decoration: underline;
            text-underline-offset: 4px;
            font-weight: 600;
        }
        .policy-page .content a:hover { text-decoration-thickness: 2px; }
        .policy-page :is(.info-box, .warning-box, .contact-box, .effective-date) {
            padding: 24px;
            margin: 32px 0;
            border: 1px solid var(--line);
            border-radius: 16px;
            background: var(--soft);
            color: var(--muted);
        }
        .policy-page :is(.info-box, .warning-box) { border-left: 4px solid var(--accent); }
        .policy-page .contact-box { text-align: center; background: var(--accent-soft); }
        .policy-page .contact-box strong { color: var(--ink); font-size: 21px; }
        .policy-page .effective-date { font-style: italic; text-align: center; }
        @media (max-width: 480px) {
            .policy-page #main.container { width: calc(100% - 32px); padding-block: 32px; }
            .policy-page .content { padding: 24px 20px; }
            .policy-page .content h1 { font-size: 28px; }
            .policy-page .content h2 { font-size: 23px; }
        }
        @media print {
            body.policy-page {
                --paper: #fff;
                --surface: #fff;
                --ink: #17221d;
                --muted: #35453c;
                --line: #ccc;
                --soft: #f5f5f5;
                --accent: #a02c23;
                --accent-soft: #f5f5f5;
                color-scheme: light;
            }
            .policy-page .content { box-shadow: none; }
        }
    </style>
</head>

<body class="site-page policy-page">
    <!-- Header -->
    <?php include '_components/header.php'; ?>

    <div id="main" class="container">
        <div class="header">
            <h1>Terms of Service</h1>
            <p><?php echo $common['appName']; ?> Application</p>
        </div>

        <div class="content">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-md"> <a id="generate-button"
                    style="color: white!important;" class="text-white   font-bold"
                    href="https://app-privacy-policy-generator.firebaseapp.com/" target="_blank">Generate </a>
            </button>
            <p>After Generating the terms of service, you can copy the terms of service and paste it here.</p>
        
        </div>
    </div>

    <!-- Footer -->
    <?php include '_components/footer.php'; ?>
</body>

</html>