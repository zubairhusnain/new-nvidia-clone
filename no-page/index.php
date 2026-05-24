<?php
require_once __DIR__ . '/../base-url.php';
cw_start_asset_url_rewrite();
?><!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Page Not Found | NVIDIA</title>
<style>
body{font-family:Arial,sans-serif;background:#000;color:#fff;display:flex;align-items:center;justify-content:center;min-height:100vh;margin:0}
.box{text-align:center;max-width:480px;padding:2rem}
h1{font-size:2rem;margin-bottom:0.5rem}
a{color:#76b900;text-decoration:none}
a:hover{text-decoration:underline}
</style>
</head>
<body>
<div class="box">
<h1>Page Not Found</h1>
<p>Sorry, this page is not available in the offline mirror.</p>
<p><a href="<?php echo CW_BASE_URL; ?>/">Return to homepage</a></p>
<?php if (!empty($_GET['from'])): ?>
<p style="opacity:0.6;font-size:0.85rem">Requested: <?php echo htmlspecialchars((string)$_GET['from'], ENT_QUOTES, 'UTF-8'); ?></p>
<?php endif; ?>
</div>
</body>
</html>
