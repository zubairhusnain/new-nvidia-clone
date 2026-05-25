<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/cw-php-polyfill.php';
require_once __DIR__ . '/includes/cw-sanitize-html.php';

/**
 * URL path prefix for this install (e.g. "/nvidia-clone/nvidia_offline" locally, "" at domain docroot).
 */
function cw_install_base_path(): string
{
    static $path = null;
    if ($path !== null) {
        return $path;
    }

    $override = getenv('CW_BASE_PATH');
    if (is_string($override)) {
        if ($override === '' || $override === '/') {
            $path = '';
        } else {
            $path = str_starts_with($override, '/') ? $override : '/' . $override;
        }
        return $path;
    }

    $docRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
    $here = realpath(__DIR__);
    if ($docRoot !== '' && $here !== false) {
        $root = realpath($docRoot);
        if ($root !== false) {
            if ($root === $here) {
                $path = '';
                return $path;
            }
            $rootPrefix = $root . DIRECTORY_SEPARATOR;
            if (str_starts_with($here, $rootPrefix)) {
                $rel = substr($here, strlen($root));
                $path = str_replace('\\', '/', $rel);
                if ($path !== '' && !str_starts_with($path, '/')) {
                    $path = '/' . $path;
                }
                return $path;
            }
        }
    }

    $folder = basename(__DIR__);
    if (in_array($folder, ['public_html', 'www', 'httpdocs', 'htdocs', 'html', 'web'], true)) {
        $path = '';
        return $path;
    }

    $parent = basename(dirname(__DIR__));
    if ($parent !== '' && !in_array($parent, ['htdocs', 'www', 'public_html', 'httpdocs', 'html', 'web'], true)) {
        $path = '/' . $parent . '/' . $folder;
    } else {
        $path = '/' . $folder;
    }

    return $path;
}

/** Strip install prefix from a request path. */
function cw_normalize_request_path(string $path): string
{
    $base = cw_install_base_path();
    if ($base !== '') {
        if ($path === $base) {
            $path = '/';
        } elseif (str_starts_with($path, $base . '/')) {
            $path = substr($path, strlen($base));
        }
    }

    if ($path === '/public_html') {
        $path = '/';
    } elseif (str_starts_with($path, '/public_html/')) {
        $path = substr($path, strlen('/public_html'));
        if ($path === '') {
            $path = '/';
        }
    }

    return $path;
}

function cw_request_is_https(): bool
{
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
        return true;
    }
    if (($_SERVER['SERVER_PORT'] ?? '') === '443') {
        return true;
    }
    if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower((string)$_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https') {
        return true;
    }
    if (isset($_SERVER['HTTP_X_FORWARDED_SSL']) && strtolower((string)$_SERVER['HTTP_X_FORWARDED_SSL']) === 'on') {
        return true;
    }

    return false;
}

/** Resolve site base URL from CW_BASE_URL env or the current HTTP request. */
function cw_detect_base_url(): string
{
    $override = getenv('CW_BASE_URL');
    if (is_string($override) && $override !== '') {
        return rtrim($override, '/');
    }

    $path = cw_install_base_path();
    $host = '';

    if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] !== '') {
        $host = (string)$_SERVER['HTTP_HOST'];
    } elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] !== '') {
        $host = (string)$_SERVER['SERVER_NAME'];
        $port = (string)($_SERVER['SERVER_PORT'] ?? '');
        if ($port !== '' && $port !== '80' && $port !== '443' && !str_contains($host, ':')) {
            $host .= ':' . $port;
        }
    }

    if ($host !== '') {
        $scheme = cw_request_is_https() ? 'https' : 'http';

        return rtrim($scheme . '://' . $host . $path, '/');
    }

    return $path === '' ? '' : rtrim($path, '/');
}

if (!defined('CW_BASE_URL')) {
    define('CW_BASE_URL', cw_detect_base_url());
}

function cw_inject_after_head_open(string $html, string $insertion): string
{
    $pos = stripos($html, '<head');
    if ($pos === false) {
        return $html;
    }

    $gt = strpos($html, '>', $pos);
    if ($gt === false) {
        return $html;
    }

    return substr($html, 0, $gt + 1) . $insertion . substr($html, $gt + 1);
}

/** Convert index.html or nvidia.com URL to a clean local path (leading slash, trailing slash for pages). */
function cw_to_clean_path(string $url): ?string
{
    $url = trim($url);
    if ($url === '' || $url === '#' || str_starts_with($url, 'javascript:') || str_starts_with($url, 'mailto:') || str_starts_with($url, 'tel:')) {
        return null;
    }

    if (preg_match('~^(?:https?:)?//(?:www\.)?nvidia\.com/(?:en-us/)?([^?\#]*)~i', $url, $m)) {
        $url = '/' . ltrim($m[1], '/');
    } elseif (preg_match('~^(?:https?:)?//(?:www\.)?nvidia\.com/(?:en-[a-z]{2}/)([^?\#]*)~i', $url, $m)) {
        $url = '/' . ltrim($m[1], '/');
    } elseif (preg_match('~^(?:https?:)?//(?:www\.)?nvidia\.cn/([^?\#]*)~i', $url, $m)) {
        $url = '/' . ltrim($m[1], '/');
    } elseif (preg_match('~^(?:https?:)?//blogs\.nvidia\.com/blog/([^?\#]*?)~i', $url, $m)) {
        $url = '/blog/blog/' . ltrim($m[1], '/');
    }

    if (str_ends_with($url, '/index.html')) {
        $url = substr($url, 0, -strlen('index.html'));
    } elseif (str_ends_with($url, 'index.html')) {
        $dir = dirname($url);
        $url = ($dir === '.' || $dir === '\\') ? '/' : str_replace('\\', '/', $dir) . '/';
    }

    if ($url === 'index.html' || $url === './index.html' || $url === '../index.html') {
        return null;
    }

  // Resolve relative paths with ../ segments — caller should pass absolute when possible
    if (!str_starts_with($url, '/') && !preg_match('~^https?://~i', $url)) {
        return null;
    }

    if ($url === '/' || $url === '') {
        return '/';
    }

    if (!str_contains($url, '.') && !str_ends_with($url, '/')) {
        $url .= '/';
    }

    return $url;
}

/** Map nvidia.com / blogs.nvidia.com page URL to full local base URL. */
function cw_nvidia_page_url_to_base(string $url, string $base): ?string
{
    $clean = cw_to_clean_path($url);
    if ($clean === null) {
        return null;
    }

    return $clean === '/' ? $base . '/' : $base . $clean;
}

/** Hostnames with a mirrored tree under assets/{host}/ */
function cw_mirrored_asset_hosts(): array
{
    static $hosts = null;
    if ($hosts !== null) {
        return $hosts;
    }

    $hosts = [];
    $dir = __DIR__ . '/assets';
    if (is_dir($dir)) {
        foreach (scandir($dir) as $entry) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }
            if (is_dir($dir . '/' . $entry)) {
                $hosts[strtolower($entry)] = true;
            }
        }
    }

    return $hosts;
}

function cw_is_asset_file_path(string $path): bool
{
    return (bool)preg_match('~\.(css|js|mjs|png|jpe?g|gif|webp|svg|ico|woff2?|ttf|otf|eot|mp4|webm|pdf|json|map|xml|txt)(\?|$)~i', $path);
}

/** Hosts for YouTube/Vimeo player pages that are not stored in the offline mirror. */
function cw_is_streaming_video_host(string $host): bool
{
    $host = strtolower($host);

    return in_array($host, [
        'www.youtube.com',
        'youtube.com',
        'm.youtube.com',
        'www.youtube-nocookie.com',
        'youtube-nocookie.com',
        'youtu.be',
        'www.youtu.be',
        'vimeo.com',
        'www.vimeo.com',
        'player.vimeo.com',
    ], true);
}

/** Paths that must stay external (embed/watch), not rewritten to assets/{host}/. */
function cw_is_non_mirrored_streaming_path(string $host, string $path): bool
{
    if (preg_match('~^/(?:embed|watch|playlist|shorts|v|live|clip)/~i', $path)) {
        return true;
    }

    if (in_array(strtolower($host), ['youtu.be', 'www.youtu.be'], true) && $path !== '/' && $path !== '') {
        return true;
    }

    if (str_contains(strtolower($host), 'vimeo') && preg_match('~^/(?:video|embed)/~i', $path)) {
        return true;
    }

    return false;
}

/** Build a privacy-friendly YouTube embed URL from a mirrored or relative embed path. */
function cw_youtube_nocookie_embed_from_path(string $embedPath): ?string
{
    if (preg_match('~(?:^|/)embed/([A-Za-z0-9_-]{11})(?:[?&#]|$)~', $embedPath, $m)) {
        return 'https://www.youtube-nocookie.com/embed/' . $m[1];
    }

    return null;
}

/**
 * Replace broken local YouTube iframe targets (router 404 → no-page) with live embed URLs.
 */
function cw_fix_youtube_embeds_in_html(string $html, string $base): string
{
    $baseQ = preg_quote(rtrim($base, '/'), '~');

    $html = preg_replace_callback(
        '~(<iframe\b[^>]*\bsrc=)(["\'])(?:https?://[^/"\']+)?(?:' . $baseQ . ')?/assets/www\.youtube\.com/embed/([A-Za-z0-9_-]{11})([^"\']*)\2~i',
        static function (array $m): string {
            $url = cw_youtube_nocookie_embed_from_path('/embed/' . $m[3]);

            return $url !== null ? $m[1] . $m[2] . $url . $m[4] . $m[2] : $m[0];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~(<iframe\b[^>]*\bsrc=)(["\'])\./assets/www\.youtube\.com/embed/([A-Za-z0-9_-]{11})([^"\']*)\2~i',
        static function (array $m): string {
            $url = cw_youtube_nocookie_embed_from_path('/embed/' . $m[3]);

            return $url !== null ? $m[1] . $m[2] . $url . $m[4] . $m[2] : $m[0];
        },
        $html
    ) ?? $html;

    if (
        !str_contains($html, 'id="cw-youtube-embed"')
        && (str_contains($html, 'youtube-nocookie.com/embed') || str_contains($html, 'youtube.com/embed'))
    ) {
        $css = '<style id="cw-youtube-embed">'
            . '.full-width-layout__content iframe[src*="youtube"],'
            . '.wp-block-embed iframe{max-width:100%;width:100%;aspect-ratio:16/9;height:auto;min-height:12rem;border:0}'
            . '</style>';
        $html = preg_replace('~</head>~i', $css . '</head>', $html, 1) ?? $html;
    }

    return $html;
}

/** Rewrite any absolute external URL to a local base URL or mirrored asset path. */
function cw_rewrite_external_url(string $url, string $base): string
{
    $url = trim($url);
    if ($url === '' || $url === '#') {
        return $url;
    }
    if (str_starts_with($url, 'javascript:') || str_starts_with($url, 'mailto:') || str_starts_with($url, 'tel:') || str_starts_with($url, 'data:')) {
        return $url;
    }

    if (str_starts_with($url, '//')) {
        $url = 'https:' . $url;
    }

    if (!preg_match('~^https?://~i', $url)) {
        return $url;
    }

    $baseHost = parse_url($base, PHP_URL_HOST);
    $parsed = parse_url($url);
    if (!is_array($parsed) || empty($parsed['host'])) {
        return $base . '/';
    }

    $host = strtolower($parsed['host']);
    $path = $parsed['path'] ?? '/';
    $query = isset($parsed['query']) ? '?' . $parsed['query'] : '';
    $fragment = isset($parsed['fragment']) ? '#' . $parsed['fragment'] : '';

    if (in_array($host, ['schema.org', 'www.w3.org', 'purl.org'], true) || str_ends_with($host, '.w3.org')) {
        return $url;
    }

    $cdnHosts = [
        'code.jquery.com',
        'cdnjs.cloudflare.com',
        'fonts.googleapis.com',
        'fonts.gstatic.com',
        'ajax.googleapis.com',
    ];
    if (in_array($host, $cdnHosts, true)) {
        $scheme = $parsed['scheme'] ?? 'https';

        return $scheme . '://' . ($parsed['host'] ?? $host) . $path . $query . $fragment;
    }

    if (is_string($baseHost) && $baseHost !== '' && $host === strtolower($baseHost)) {
        $basePath = parse_url($base, PHP_URL_PATH) ?? '';
        if ($basePath === '' || $basePath === '/' || str_starts_with($path, $basePath)) {
            return $url;
        }
    }

    if (preg_match('/^(?:www\.)?nvidia\.com$/i', $host) || preg_match('/^www\.nvidia\.[a-z]{2,3}$/i', $host)) {
        if (preg_match('~^/content/(dam|nvidiaGDC)/~i', $path)) {
            return $base . '/assets/www.nvidia.com' . $path . $query . $fragment;
        }
        if (cw_is_asset_file_path($path)) {
            return $base . '/assets/www.nvidia.com' . $path . $query . $fragment;
        }
        $local = cw_nvidia_page_url_to_base($url, $base);

        return $local ?? $base . '/';
    }

    if ($host === 'blogs.nvidia.com') {
        if (str_starts_with($path, '/blog/')) {
            return $base . '/blog/blog' . substr($path, 4) . $query . $fragment;
        }

        return $base . '/blog/blog/' . ltrim($path, '/') . $query . $fragment;
    }

    if (cw_is_streaming_video_host($host) && cw_is_non_mirrored_streaming_path($host, $path)) {
        $scheme = $parsed['scheme'] ?? 'https';

        return $scheme . '://' . ($parsed['host'] ?? $host) . $path . $query . $fragment;
    }

    $mirrored = cw_mirrored_asset_hosts();
    if (isset($mirrored[$host])) {
        return $base . '/assets/' . $host . $path . $query . $fragment;
    }

    $pagePath = cw_to_clean_path($url);
    if ($pagePath !== null && !cw_is_asset_file_path($pagePath)) {
        return $pagePath === '/' ? $base . '/' : $base . $pagePath;
    }

    return $base . '/';
}

function cw_rewrite_external_urls_in_html(string $html, string $base): string
{
    $linkAttrs = 'href|src|action|cite|poster|formaction|data-href|data-url|data-link|data-cta-url|data-video-url|data-embed-url|data-desktop-url|data-mobile-url';

    $html = preg_replace_callback(
        '~\b(' . $linkAttrs . ')=(["\'])(https?:[^"\']+)\2~i',
        static function (array $m) use ($base): string {
            return $m[1] . '=' . $m[2] . cw_rewrite_external_url($m[3], $base) . $m[2];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~\b(' . $linkAttrs . ')=(["\'])//([^"\']+)\2~i',
        static function (array $m) use ($base): string {
            return $m[1] . '=' . $m[2] . cw_rewrite_external_url('https://' . $m[3], $base) . $m[2];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~\bsrcset=(["\'])([^"\']+)\1~i',
        static function (array $m) use ($base): string {
            $parts = preg_split('/\s*,\s*/', $m[2]) ?: [];
            $out = [];
            foreach ($parts as $part) {
                $bits = preg_split('/\s+/', trim($part), 2);
                if ($bits === false || $bits === []) {
                    continue;
                }
                $u = cw_rewrite_external_url($bits[0], $base);
                $out[] = isset($bits[1]) ? $u . ' ' . $bits[1] : $u;
            }

            return 'srcset=' . $m[1] . implode(', ', $out) . $m[1];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~"((?:@id|url|item|mainEntityOfPage|contentUrl))"\s*:\s*"(https?:[^"]+)"~i',
        static function (array $m) use ($base): string {
            return '"' . $m[1] . '":"' . cw_rewrite_external_url($m[2], $base) . '"';
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~\b([a-z0-9_-]*url)=(["\'])(https?:[^"\']+)\2~i',
        static function (array $m) use ($base): string {
            return $m[1] . '=' . $m[2] . cw_rewrite_external_url($m[3], $base) . $m[2];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~\b(destination|apiUrl|endpoint|LoginPage|LoginGatePage|accountsJarvisSrvcBase)\s*[:=]\s*(["\'])(https?:[^"\']+)\3~i',
        static function (array $m) use ($base): string {
            return $m[1] . ': ' . $m[2] . cw_rewrite_external_url($m[3], $base) . $m[2];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~addProperty\s*\(\s*([^,]+)\s*,\s*([^,]+)\s*,\s*(["\'])(https?:[^"\']+)\3~i',
        static function (array $m) use ($base): string {
            return 'addProperty(' . $m[1] . ', ' . $m[2] . ', ' . $m[3] . cw_rewrite_external_url($m[4], $base) . $m[3];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~(["\'])(https?:\/\/[^"\']+)\1~i',
        static function (array $m) use ($base): string {
            if (preg_match('~w3\.org|schema\.org~i', $m[2])) {
                return $m[0];
            }
            $next = cw_rewrite_external_url($m[2], $base);
            return $next !== $m[2] ? $m[1] . $next . $m[1] : $m[0];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~https%3A%2F%2F(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z]{2,}(?:%2F[^&"\']*)?~i',
        static function (array $m) use ($base): string {
            $decoded = rawurldecode($m[0]);
            $next = cw_rewrite_external_url($decoded, $base);
            return $next !== $decoded ? rawurlencode($next) : $m[0];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~https?://(?!(?:www\.)?w3\.org|schema\.org)(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z]{2,}(?::\d+)?(?:/[^\s"\'<>)\]]*)?~i',
        static function (array $m) use ($base): string {
            return cw_rewrite_external_url($m[0], $base);
        },
        $html
    ) ?? $html;

    return $html;
}

function cw_inject_contact_nav_link(string $html): string
{
    if (str_contains($html, 'data-cw-contact-nav')) {
        return $html;
    }

    $contactDesktop = '<li class="nv-menu-item cw-contact-nav-item" role="none" data-cw-contact-nav="1"><a class="menu-button-link menu-level-1" href="/contact/" role="menuitem" target="_self">Contact</a>
</li>';

    $supportDesktop = '<li class="nv-menu-item" role="none"><a class="menu-button-link menu-level-1" href="/support/" role="menuitem" target="_self">Support</a>
</li>';

    if (str_contains($html, $supportDesktop)) {
        $html = str_replace($supportDesktop, $supportDesktop . "\n" . $contactDesktop, $html);
    }

    $supportMobile = '<li class="menu-level-1" role="none">
<a class="mm-btn-link" href="/support/" role="menuitem" target="_self">Support</a>
</li>';

    $contactMobile = '<li class="menu-level-1 cw-contact-nav-item" role="none" data-cw-contact-nav="1">
<a class="mm-btn-link" href="/contact/" role="menuitem" target="_self">Contact</a>
</li>';

    if (str_contains($html, $supportMobile)) {
        $html = str_replace($supportMobile, $supportMobile . "\n" . $contactMobile, $html);
    }

    return $html;
}

function cw_rewrite_asset_urls_in_html(string $html): string
{
    $base = CW_BASE_URL;
    $requestPath = $_SERVER['REQUEST_URI'] ?? '/';
    $path = parse_url($requestPath, PHP_URL_PATH);
    if (!is_string($path) || $path === '') {
        $path = '/';
    }
    $path = cw_normalize_request_path($path);

    // Trailing slash after file extension breaks asset loading (foo.css/ → foo.css).
    // Do not strip slashes before AEM rendition timestamps (foo.png/1775571455080/bar.png).
    $html = preg_replace(
        '~(\.(css|js|mjs|png|jpe?g|gif|webp|svg|ico|woff2?|ttf|otf|eot|mp4|webm|pdf|json|map))/(?=["\'\s>]|$)~i',
        '$1',
        $html
    ) ?? $html;

    // Fix corrupted meta image paths (legacy bad rewrite)
    $html = str_replace('https://www.nvidia.com./assets/', $base . '/assets/', $html);

    $headInsert = '';
    if (!str_contains($html, 'id="cw-asset-root"')) {
        $headInsert .= '<script id="cw-asset-root">window.__CW_ASSET_ROOT=' . json_encode($base) . ';</script>';
    }
    if (!str_contains($html, 'id="cw-fix-links"')) {
        $headInsert .= '<script id="cw-fix-links">(function(){var b=' . json_encode($base) . ';function isAsset(p){return/\\.(css|js|mjs|png|jpe?g|gif|webp|svg|ico|woff2?|ttf|mp4|webm|pdf|json|map)(\\?|$)/i.test(p);}function u(v){if(!v||typeof v!=="string")return v;var t=v.trim();if(/^https?:\\/\\//i.test(t)||t.indexOf("//")===0){if(t.indexOf("//")===0)t="https:"+t;var m=t.match(/^https?:\\/\\/([^\\/]+)(\\/[^?#]*)?/i);if(!m)return b+"/";var h=m[1].toLowerCase(),p=m[2]||"/",q=t.indexOf("?")>=0?t.slice(t.indexOf("?")):"";if(/^(?:www\\.)?nvidia\\.com$/i.test(h)||/^www\\.nvidia\\.[a-z]{2,3}$/i.test(h)){if(/^\\/content\\/(dam|nvidiaGDC)\\//i.test(p)||isAsset(p))return b+"/assets/www.nvidia.com"+p+q;var r=t.match(/^https?:\\/\\/(?:www\\.)?nvidia\\.com\\/(?:en-us\\/|en-[a-z]{2}\\/)?([^?#]*)/i);if(r){var x="/"+r[1];if(x.slice(-11)==="/index.html")x=x.slice(0,-10);if(x!=="/"&&!x.endsWith("/")&&!isAsset(x))x+="/";return b+x+q;}return b+"/"+q;}if(h==="blogs.nvidia.com"){return b+(p.indexOf("/blog/")===0?"/blog/blog"+p.slice(5):"/blog/blog"+p)+q;}if(/^(?:www\\.)?youtube(?:-nocookie)?\\.com$/i.test(h)||/^youtu\\.be$/i.test(h)||/^(?:player\\.)?vimeo\\.com$/i.test(h)){if(/^\\/(?:embed|watch|playlist|shorts|v|video)\\//i.test(p)||h==="youtu.be")return t;}if(/^(?:code\\.)?jquery\\.com$/i.test(h)||/^cdnjs\\.cloudflare\\.com$/i.test(h)||/^fonts\\.(?:googleapis|gstatic)\\.com$/i.test(h)||/^ajax\\.googleapis\\.com$/i.test(h))return t;if(t.indexOf(b)===0)return t;return b+"/"+q;}if(/\\/assets\\/www\\.youtube\\.com\\/embed\\/([A-Za-z0-9_-]{11})/i.test(t)){var yt=t.match(/\\/embed\\/([A-Za-z0-9_-]{11})/);if(yt)return"https://www.youtube-nocookie.com/embed/"+yt[1];}if(t==="index.html"||t==="./index.html")return b+"/";if(t.slice(-11)==="/index.html")return b+t.slice(0,-10);if(t.charAt(0)==="/"&&t.indexOf("/assets/")!==0)return b+t;return v;}function f(e){if(!e||!e.getAttribute)return;var a=["href","src","action","data-href","data-url","data-link","cite","poster","formaction"];for(var i=0;i<a.length;i++){var k=a[i],v=e.getAttribute(k);if(!v)continue;var nv=u(v);if(nv!==v)e.setAttribute(k,nv);}}function s(){try{document.querySelectorAll("[href],[src],[action],[data-href],[data-url],[data-link]").forEach(f);}catch(e){}}if(document.readyState==="loading"){document.addEventListener("DOMContentLoaded",s);}else{s();}setTimeout(s,500);setTimeout(s,1500);})();</script>';
    }
    if ($headInsert !== '') {
        $html = cw_inject_after_head_open($html, $headInsert);
    }

    $html = cw_inject_contact_nav_link($html);

    // Head meta tags: og:url, twitter:url, etc. → local base URL
    $html = preg_replace_callback(
        '~(<meta\b[^>]*\bcontent=(["\']))((?:https?:)?//(?:www\.)?nvidia\.com/(?:en-us/)?[^"\']*)\2~i',
        static function (array $m) use ($base): string {
            $url = $m[3];
            if (preg_match('~^https?://(?:www\.)?nvidia\.com/content/(dam|nvidiaGDC)/~i', $url)) {
                $path = preg_replace('~^https?://(?:www\.)?nvidia\.com/~i', '', $url);
                return $m[1] . $base . '/assets/www.nvidia.com/' . ltrim($path, '/') . $m[2];
            }
            if (preg_match('~\.(css|js|png|jpe?g|gif|webp|svg|ico|woff2?|ttf|mp4|webm|pdf|json)(\?|$)~i', $url)) {
                return $m[0];
            }
            $local = cw_nvidia_page_url_to_base($url, $base);
            return $local !== null ? $m[1] . $local . $m[2] : $m[0];
        },
        $html
    ) ?? $html;
    $html = preg_replace(
        '~(<meta\b[^>]*\bcontent=(["\']))(?:https?:)?//blogs\.nvidia\.com/blog/([^"\']*)\2~i',
        '$1' . $base . '/blog/blog/$3$2',
        $html
    ) ?? $html;
    $html = preg_replace_callback(
        '~(<meta\b[^>]*\bcontent=(["\']))(/(?!/|assets/|content/|etc\.clientlibs/)[^"\']*)\2~i',
        static function (array $m) use ($base): string {
            if (str_starts_with($m[3], $base)) {
                return $m[0];
            }
            return $m[1] . $base . $m[3] . $m[2];
        },
        $html
    ) ?? $html;

    // Canonical link with nvidia.com href → local base URL
    $html = preg_replace_callback(
        '~(<link\b[^>]*\brel=(["\'])canonical\2[^>]*\bhref=(["\']))(?:https?:)?//(?:www\.)?nvidia\.com/(?:en-us/)?([^"\']*)\3~i',
        static function (array $m) use ($base): string {
            $url = 'https://www.nvidia.com/' . ltrim($m[4], '/');
            $local = cw_nvidia_page_url_to_base($url, $base);
            return $local !== null ? $m[1] . $local . $m[3] : $m[0];
        },
        $html
    ) ?? $html;
    $html = preg_replace_callback(
        '~(<link\b[^>]*\bhref=(["\']))(?:https?:)?//(?:www\.)?nvidia\.com/(?:en-us/)?([^"\']*)\2[^>]*\brel=(["\'])canonical\4~i',
        static function (array $m) use ($base): string {
            $url = 'https://www.nvidia.com/' . ltrim($m[3], '/');
            $local = cw_nvidia_page_url_to_base($url, $base);
            return $local !== null ? $m[1] . $local . $m[2] : $m[0];
        },
        $html
    ) ?? $html;

    // index.html in internal links → clean paths
    $html = preg_replace_callback(
        '~\b(href|action)=(["\'])(?!https?://|//|#|mailto:|tel:|javascript:)([^"\']*?)index\.html([^"\']*)\2~i',
        static function (array $m) use ($base): string {
            $prefix = $m[3];
            $suffix = $m[4];
            if ($suffix !== '' && $suffix !== '?' && !str_starts_with($suffix, '?') && !str_starts_with($suffix, '#')) {
                return $m[0];
            }
            if ($prefix === '' || $prefix === './') {
                return $m[1] . '=' . $m[2] . $base . '/' . ltrim($suffix, '/') . $m[2];
            }
            if (str_starts_with($prefix, '/')) {
                $clean = rtrim($prefix, '/') . '/';
                return $m[1] . '=' . $m[2] . $base . $clean . ltrim($suffix, '/') . $m[2];
            }
            return $m[0];
        },
        $html
    ) ?? $html;

    // Root-relative internal paths (not assets) → prefix with base
    $html = preg_replace(
        '~\b(href|action)=(["\'])/(?!/|assets/|content/|etc\.clientlibs/)([^"\']*)\2~i',
        '$1=$2' . $base . '/$3$2',
        $html
    ) ?? $html;

    // AEM root paths saved offline → local assets tree
    $assetAttrs = 'href|src|srcset|content|poster|data-cmp-src|data-cmp-srcset|data-cmp-desktopimage|data-cmp-mobileimage|data-cmp-tabletimage|data-cmp-laptopimage|data-cmp-desktopretinaimage|data-cmp-mobileretinaimage|data-cmp-tabletretinaimage|data-cmp-laptopretinaimage|data-asset|data-src|data-srcset|data-background|data-srcset-desktop|data-srcset-laptop|data-srcset-tablet|data-srcset-mobile';
    $html = preg_replace(
        '~\b(' . $assetAttrs . ')=(["\'])/content/dam/~i',
        '$1=$2' . $base . '/assets/www.nvidia.com/content/dam/',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b(' . $assetAttrs . ')=(["\'])/content/nvidiaGDC/~i',
        '$1=$2' . $base . '/assets/www.nvidia.com/content/nvidiaGDC/',
        $html
    ) ?? $html;
    $html = preg_replace(
        "~url\\(([\"']?)/content/dam/~i",
        'url($1' . $base . '/assets/www.nvidia.com/content/dam/',
        $html
    ) ?? $html;
    $html = preg_replace(
        "~url\\(([\"']?)/content/nvidiaGDC/~i",
        'url($1' . $base . '/assets/www.nvidia.com/content/nvidiaGDC/',
        $html
    ) ?? $html;

    // Missing slash before AEM rendition timestamps in coreimg / svg paths
    $html = preg_replace(
        '~\.(jpe?g|png|webp|gif|svg)(\d{10,})/~',
        '.$1/$2/',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\.coreimg\.svg\.svg(\d{10,})/~',
        '.coreimg.svg.svg/$1/',
        $html
    ) ?? $html;

    // Relative asset paths → absolute (./assets, ../assets, and bare assets/ prefix)
    $html = preg_replace(
        '~\b(' . $assetAttrs . ')=(["\'])(?:\.\./)+assets/~i',
        '$1=$2' . $base . '/assets/',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b(' . $assetAttrs . ')=(["\'])\./assets/~i',
        '$1=$2' . $base . '/assets/',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b(' . $assetAttrs . ')=(["\'])/assets/~i',
        '$1=$2' . $base . '/assets/',
        $html
    ) ?? $html;

    // css background-image asset paths
    $html = preg_replace(
        "~url\\(([\"']?)(?:\\.\\./)+assets/~i",
        'url($1' . $base . '/assets/',
        $html
    ) ?? $html;
    $html = preg_replace(
        "~url\\(([\"']?)\\.\\/assets/~i",
        'url($1' . $base . '/assets/',
        $html
    ) ?? $html;

    // All remaining absolute external URLs in link attributes, srcset, JSON-LD
    $html = cw_rewrite_external_urls_in_html($html, $base);

    $html = preg_replace_callback(
        '~(<meta\b[^>]*\bcontent=(["\']))(https?:[^"\']+)\2~i',
        static function (array $m) use ($base): string {
            return $m[1] . cw_rewrite_external_url($m[3], $base) . $m[2];
        },
        $html
    ) ?? $html;

    if (!str_contains($html, 'id="cw-hydrate-images"')) {
        $hydrate = '<script id="cw-hydrate-images">(function(){var b=' . json_encode($base) . ';function fix(u){if(!u||typeof u!=="string")return u;if(u.indexOf("data:image")===0)return u;if(/^https?:\\/\\//i.test(u))return u;if(u.indexOf("/content/dam/")===0)return b+"/assets/www.nvidia.com/content/dam/"+u.slice(13);if(u.indexOf("/content/nvidiaGDC/")===0)return b+"/assets/www.nvidia.com/content/nvidiaGDC/"+u.slice(18);if(u.indexOf("./assets/")===0)return b+u.slice(1);if(u.indexOf("../assets/")===0||u.indexOf("assets/")===0){var i=u.indexOf("assets/");if(i>=0)return b+"/"+u.slice(i);}return u;}function pickSrc(el){var a=el.getAttribute("data-asset");if(a&&a.indexOf("assets/")>=0)return fix(a);var c=el.getAttribute("data-cmp-src");if(c)return fix(c);return null;}function run(){try{document.querySelectorAll("[data-cmp-src],[data-cmp-desktopimage],[data-cmp-mobileimage],[data-src],img.cmp-image__image--is-loading").forEach(function(el){var attrs=["data-cmp-src","data-cmp-desktopimage","data-cmp-mobileimage","data-src","data-asset","src"];for(var i=0;i<attrs.length;i++){var a=attrs[i];var v=el.getAttribute(a);if(!v)continue;var nv=fix(v);if(nv!==v)el.setAttribute(a,nv);}var use=pickSrc(el);if(!use&&el.tagName==="IMG")use=fix(el.getAttribute("src"));if(use){var img=el.tagName==="IMG"?el:el.querySelector("img");if(img){var s=img.getAttribute("src")||"";if(!s||s.indexOf("data:image/gif")===0||/cmp-image__image--is-loading/.test(img.className)){img.setAttribute("src",use);img.classList.remove("cmp-image__image--is-loading");}}}});}catch(e){}}if(document.readyState==="loading"){document.addEventListener("DOMContentLoaded",run);}else{run();}setTimeout(run,400);setTimeout(run,1500);})();</script>';
        $html = preg_replace('~</head>~i', $hydrate . '</head>', $html, 1) ?? $html;
    }

    $html = cw_fix_youtube_embeds_in_html($html, $base);

    $html = cw_inject_offline_runtime_fixes($html);
    $html = cw_sanitize_html($html);

    return $html;
}

function cw_start_asset_url_rewrite(): void
{
    static $started = false;
    if ($started) {
        return;
    }
    $started = true;

    ob_start('cw_rewrite_asset_urls_in_html');
    register_shutdown_function(static function (): void {
        if (ob_get_level() > 0) {
            ob_end_flush();
        }
    });
}
