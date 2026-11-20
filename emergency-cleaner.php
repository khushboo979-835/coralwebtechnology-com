<?php
/**
 * Coral Web Technology - Emergency Malware Cleaner & Site Restorer
 * 
 * Usage:
 * 1. Upload this file to your Hostinger public_html folder.
 * 2. Open in browser: https://coralwebtechnology.com/emergency-cleaner.php?key=coral_clean_2026
 * 3. Review the cleanup report and delete this script afterwards.
 */

// Security Protection Key
$security_key = 'coral_clean_2026';
if (!isset($_GET['key']) || $_GET['key'] !== $security_key) {
    http_response_code(403);
    die('<div style="font-family:sans-serif;padding:40px;text-align:center;"><h2>Access Denied</h2><p>Please provide the security key to run this cleaner tool.</p></div>');
}

$rootDir = __DIR__;
$actions = [];
$threatsFound = 0;
$threatsFixed = 0;

// 1. DELETE KNOWN MALWARE WEBSHELL: admin/assets/img/backgrounds/18-bundle.jpg
$malwareBackdoor = $rootDir . '/admin/assets/img/backgrounds/18-bundle.jpg';
if (file_exists($malwareBackdoor)) {
    $threatsFound++;
    if (@unlink($malwareBackdoor)) {
        $threatsFixed++;
        $actions[] = ['status' => 'success', 'msg' => 'DELETED malicious backdoor: <code>admin/assets/img/backgrounds/18-bundle.jpg</code>'];
    } else {
        $actions[] = ['status' => 'danger', 'msg' => 'FAILED to delete <code>admin/assets/img/backgrounds/18-bundle.jpg</code> (Permission denied)'];
    }
} else {
    $actions[] = ['status' => 'info', 'msg' => 'File <code>admin/assets/img/backgrounds/18-bundle.jpg</code> is not present or already deleted.'];
}

// 2. CHECK AND CLEAN index.php
$indexFile = $rootDir . '/index.php';
if (file_exists($indexFile)) {
    $indexContent = file_get_contents($indexFile);
    $origIndex = $indexContent;
    
    // Check for malware signatures (gv_..., eval(base64, etc.)
    if (strpos($indexContent, 'gv_6524a3') !== false || strpos($indexContent, 'eval(') !== false || preg_match('/\<\?php\s*@?eval\(/i', $indexContent)) {
        $threatsFound++;
        
        // Remove malware block
        $cleanedIndex = preg_replace('/\<\?php\s*if\s*\(!function_exists\([\'"]gv_[^\)]+\).*?\?\>/is', '', $indexContent);
        $cleanedIndex = preg_replace('/\<\?php\s*@?eval\([^\?]+\?\>/is', '', $cleanedIndex);
        $cleanedIndex = preg_replace('/function\s+gv_[a-z0-9]+\s*\([^)]*\)\s*\{[^}]*\}/is', '', $cleanedIndex);

        // If index was severely corrupted, write verified clean index.php
        if (strpos($cleanedIndex, 'common/config.php') === false) {
            $cleanTemplate = '<!DOCTYPE html>' . "\n" .
'<html lang="en">' . "\n\n" .
'<head>' . "\n" .
'    <?php include \'common/config.php\'; ?>' . "\n" .
'    <?php include \'common/head.php\'; ?>' . "\n" .
'    <?php include \'common/plugins.php\'; ?>' . "\n" .
'    <link rel="preload" as="image" href="<?= $base_url ?>assets/images/banner/banner.jpg">' . "\n" .
'    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />' . "\n" .
'    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />' . "\n" .
'    <meta name="google-site-verification" content="IIOU8rPCF02uyHIWxr4lMdeULGDEvB_xIxEZbJWyVnw" />' . "\n" .
'</head>' . "\n\n" .
'<body>' . "\n" .
'    <main>' . "\n" .
'        <h1 class="visually-hidden">Best Web Development & SEO Services - Coral Web Technology</h1>' . "\n" .
'        <?php include \'common/header.php\'; ?>' . "\n";
            // Replace header portion
            $cleanedIndex = preg_replace('/^.*?\<\?php\s+include\s+[\'"]common\/header\.php[\'"];\s*\?\>/is', $cleanTemplate, $indexContent);
        }

        if ($cleanedIndex !== $origIndex && !empty($cleanedIndex)) {
            file_put_contents($indexFile, $cleanedIndex);
            $threatsFixed++;
            $actions[] = ['status' => 'success', 'msg' => 'CLEANED malware injection from <code>index.php</code>'];
        } else {
            $actions[] = ['status' => 'warning', 'msg' => 'Suspicious code found in <code>index.php</code> but automatic regex could not safely strip it. Please upload clean <code>index.php</code> manually.'];
        }
    } else {
        $actions[] = ['status' => 'info', 'msg' => '<code>index.php</code> is clean and contains no malware function definitions.'];
    }
}

// 3. CHECK FOR ROGUE .user.ini / php.ini (auto_prepend_file)
$iniFiles = [$rootDir . '/.user.ini', $rootDir . '/php.ini'];
foreach ($iniFiles as $ini) {
    if (file_exists($ini)) {
        $iniContent = file_get_contents($ini);
        if (stripos($iniContent, 'auto_prepend_file') !== false || stripos($iniContent, 'auto_append_file') !== false || stripos($iniContent, '18-bundle') !== false) {
            $threatsFound++;
            @unlink($ini);
            $threatsFixed++;
            $actions[] = ['status' => 'success', 'msg' => 'REMOVED rogue auto_prepend configuration file: <code>' . basename($ini) . '</code>'];
        }
    }
}

// 4. SCAN ASSETS & UPLOAD FOLDERS FOR PHP EXECUTABLES IN DISGUISED EXTENSIONS (.jpg, .png, .ico, .txt)
$scanDirs = [
    $rootDir . '/admin/assets',
    $rootDir . '/assets',
    $rootDir . '/uploads'
];

foreach ($scanDirs as $sDir) {
    if (!is_dir($sDir)) continue;
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($sDir, RecursiveDirectoryIterator::SKIP_DOTS));
    foreach ($iterator as $item) {
        if ($item->isFile()) {
            $ext = strtolower($item->getExtension());
            // Check non-php files for embedded php tags or eval
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'ico', 'svg', 'bmp', 'txt'])) {
                $content = @file_get_contents($item->getPathname());
                if (stripos($content, '<?php') !== false || stripos($content, 'eval(') !== false || stripos($content, 'gv_6524a3') !== false) {
                    $threatsFound++;
                    $rel = str_replace($rootDir . DIRECTORY_SEPARATOR, '', $item->getPathname());
                    if (@unlink($item->getPathname())) {
                        $threatsFixed++;
                        $actions[] = ['status' => 'success', 'msg' => "DELETED malicious webshell disguised as image: <code>$rel</code>"];
                    } else {
                        $actions[] = ['status' => 'danger', 'msg' => "DETECTED webshell in <code>$rel</code> but could not delete (permission denied)"];
                    }
                }
            }
        }
    }
}

// 5. CHECK ROOT .htaccess FOR MALICIOUS AUTO-PREPEND OR SCRIPT ENGINE RULES
$htaccessFile = $rootDir . '/.htaccess';
if (file_exists($htaccessFile)) {
    $htContent = file_get_contents($htaccessFile);
    if (stripos($htContent, 'auto_prepend_file') !== false || stripos($htContent, 'auto_append_file') !== false || stripos($htContent, '18-bundle') !== false) {
        $threatsFound++;
        $cleanedHt = preg_replace('/.*auto_prepend_file.*/i', '', $htContent);
        $cleanedHt = preg_replace('/.*auto_append_file.*/i', '', $cleanedHt);
        file_put_contents($htaccessFile, $cleanedHt);
        $threatsFixed++;
        $actions[] = ['status' => 'success', 'msg' => 'CLEANED rogue <code>auto_prepend_file</code> directive from <code>.htaccess</code>'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coral Web Technology - Malware Cleanup Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background: #f1f5f9; font-family: system-ui, -apple-system, sans-serif; color: #1e293b; padding: 40px 15px; }
        .card-custom { border-radius: 16px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.08); background: #ffffff; }
        .badge-status { font-size: 1rem; padding: 8px 16px; border-radius: 50px; }
    </style>
</head>
<body>
    <div class="container" style="max-width: 800px;">
        <div class="card card-custom p-4 p-md-5 mb-4">
            <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                <div>
                    <h3 class="fw-bold mb-1"><i class="bi bi-shield-check text-success me-2"></i> Malware Cleanup & Restoration</h3>
                    <p class="text-muted mb-0">Coral Web Technology Hosting Environment</p>
                </div>
                <span class="badge bg-<?= $threatsFound === $threatsFixed ? 'success' : 'danger' ?> badge-status">
                    <?= $threatsFixed ?> / <?= $threatsFound ?> Threats Resolved
                </span>
            </div>

            <h5 class="fw-bold mb-3">Audit & Cleanup Actions:</h5>
            <div class="list-group mb-4">
                <?php foreach ($actions as $act): ?>
                    <div class="list-group-item list-group-item-<?= $act['status'] === 'success' ? 'success' : ($act['status'] === 'danger' ? 'danger' : 'light') ?> d-flex align-items-center gap-3 py-3">
                        <i class="bi bi-<?= $act['status'] === 'success' ? 'check-circle-fill text-success' : ($act['status'] === 'danger' ? 'exclamation-octagon-fill text-danger' : 'info-circle-fill text-primary') ?> fs-5"></i>
                        <div><?= $act['msg'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="alert alert-info border-0 rounded-3">
                <h6 class="fw-bold mb-2"><i class="bi bi-lightbulb-fill me-1"></i> Next Steps:</h6>
                <ol class="mb-0 ps-3 small">
                    <li class="mb-1">Visit your website homepage: <a href="https://coralwebtechnology.com/" target="_blank" class="fw-bold text-decoration-underline">coralwebtechnology.com</a> to confirm it loads cleanly.</li>
                    <li class="mb-1">Once verified, <strong>DELETE this <code>emergency-cleaner.php</code> file</strong> from Hostinger File Manager for security.</li>
                    <li>Change your Hostinger account password and database password immediately.</li>
                </ol>
            </div>
        </div>
    </div>
</body>
</html>
