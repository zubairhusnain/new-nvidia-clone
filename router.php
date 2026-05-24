<?php
declare(strict_types=1);

@ini_set('memory_limit', '512M');
@ini_set('max_execution_time', '120');

require_once __DIR__ . '/includes/cw-php-polyfill.php';
require_once __DIR__ . '/base-url.php';

$uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($uri, PHP_URL_PATH);
if (!is_string($path) || $path === '') {
    $path = '/';
}

$path = cw_normalize_request_path($path);

if (cw_forms_disabled() && strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    http_response_code(403);
    header('Content-Type: text/html; charset=utf-8');
    echo '<!DOCTYPE html><html><head><title>Form disabled</title></head><body>'
        . '<p>Form submissions are disabled on this site.</p>'
        . '<p><a href="' . htmlspecialchars(CW_BASE_URL . '/', ENT_QUOTES, 'UTF-8') . '">Return home</a></p>'
        . '</body></html>';
    exit;
}

$query = parse_url($uri, PHP_URL_QUERY);
if (!is_string($query)) {
    $query = '';
}

$rootReal = realpath(__DIR__);

// Serve assets directly if rewrite missed them
if (str_starts_with($path, '/assets/')) {
    $localFs = __DIR__ . $path;
    if (is_file($localFs)) {
        $contentType = 'application/octet-stream';
        if (function_exists('mime_content_type')) {
            $mt = mime_content_type($localFs);
            if (is_string($mt) && $mt !== '') {
                $contentType = $mt;
            }
        }
        header('Content-Type: ' . $contentType);
        header('Cache-Control: public, max-age=31536000');
        readfile($localFs);
        exit;
    }
}

// Direct .php file access
if (str_ends_with($path, '.php')) {
    $candidate = realpath(__DIR__ . $path);
    if (is_string($rootReal) && is_string($candidate) && str_starts_with($candidate, $rootReal . DIRECTORY_SEPARATOR) && is_file($candidate)) {
        cw_start_asset_url_rewrite();
        include $candidate;
        exit;
    }
}

$route = trim($path, '/');

// Blog posts live under blog/blog/; /blog/ has no index in the mirror.
if ($route === 'blog') {
    header('Location: ' . CW_BASE_URL . '/blog/blog/ai-5-layer-cake/', true, 302);
    exit;
}

if ($route === '') {
    $target = __DIR__ . '/index.php';
} else {
    $target = __DIR__ . '/' . $route . '/index.php';
}

if (!is_file($target)) {
    if ($route !== 'no-page') {
        $from = $path;
        if ($from === '') {
            $from = '/';
        }
        header('Location: ' . CW_BASE_URL . '/no-page/?from=' . rawurlencode($from), true, 302);
        exit;
    }
    $target = __DIR__ . '/no-page/index.php';
}

cw_start_asset_url_rewrite();
include $target;
