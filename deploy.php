<?php
// UI_Lightweight_Tea - PHP Deployment Entry
header('Content-Type: text/html; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('Cache-Control: no-cache, no-store, must-revalidate');

$docRoot = __DIR__;
$indexPath = $docRoot . '/index.html';

if (file_exists($indexPath)) {
    readfile($indexPath);
    exit;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>UI_Lightweight_Tea</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #1d1b20; color: white; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; text-align: center; padding: 20px; }
        .container { max-width: 600px; }
        h1 { font-size: 2rem; margin-bottom: 1rem; }
        p { color: #aaa; margin-bottom: 2rem; }
        .btn { display: inline-block; padding: 12px 24px; background: #6750a4; color: white; text-decoration: none; border-radius: 24px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎨 UI_Lightweight_Tea</h1>
        <p>Material 3 Expressive UI Canvas - 在浏览器中绘制界面</p>
        <p style="font-size: 0.875rem; color: #666;">请确保已构建 Next.js 应用并将 out/ 目录内容部署到此位置</p>
    </div>
</body>
</html>
