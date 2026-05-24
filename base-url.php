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
    if ($docRoot !== '') {
        $root = realpath($docRoot);
        $here = realpath(__DIR__);
        if ($root !== false && $here !== false && $root === $here) {
            $path = '';
            return $path;
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
        $headInsert .= '<script id="cw-fix-links">(function(){var b=' . json_encode($base) . ';function u(v){if(!v||typeof v!=="string")return v;var t=v.trim();if(t==="index.html"||t==="./index.html")return b+"/";if(t.slice(-11)==="/index.html")return b+t.slice(0,-10);var m=t.match(/^(?:https?:)?\\/\\/(?:www\\.)?nvidia\\.com\\/(?:en-us\\/)?([^?#]*)/i);if(m){var p="/"+m[1];if(p.slice(-11)==="/index.html")p=p.slice(0,-10);if(p!=="/"&&!p.endsWith("/")&&!/\\.[a-z0-9]{1,6}$/i.test(p))p+="/";return b+p;}return v;}function f(e){if(!e||!e.getAttribute)return;var a=["href","src","action"];for(var i=0;i<a.length;i++){var k=a[i];var v=e.getAttribute(k);if(!v)continue;var nv=u(v);if(nv!==v)e.setAttribute(k,nv);}}function s(){try{var n=document.querySelectorAll("[href],[src],[action]");for(var i=0;i<n.length;i++)f(n[i]);}catch(e){}}if(document.readyState==="loading"){document.addEventListener("DOMContentLoaded",s);}else{s();}setTimeout(s,500);setTimeout(s,1500);})();</script>';
    }
    if ($headInsert !== '') {
        $html = cw_inject_after_head_open($html, $headInsert);
    }

    // nvidia.com page links → local clean URLs
    $html = preg_replace_callback(
        '~\b(href|src|action)=(["\'])(?:https?:)?//(?:www\.)?nvidia\.com/(?:en-us/)?([^"\']*)\2~i',
        static function (array $m) use ($base): string {
            $rest = $m[3];
            if (preg_match('~\.(css|js|png|jpg|jpeg|gif|webp|svg|ico|woff2?|ttf|mp4|webm|pdf|json)$~i', $rest)) {
                return $m[0];
            }
            if (str_ends_with($rest, 'index.html')) {
                $rest = substr($rest, 0, -strlen('index.html'));
            } elseif (str_ends_with($rest, '/index.html')) {
                $rest = substr($rest, 0, -strlen('index.html'));
            }
            if ($rest !== '' && !str_ends_with($rest, '/') && !preg_match('~\.[a-z0-9]{1,6}$~i', $rest)) {
                $rest .= '/';
            }
            return $m[1] . '=' . $m[2] . $base . '/' . ltrim($rest, '/') . $m[2];
        },
        $html
    ) ?? $html;

    // blogs.nvidia.com → local blog paths
    $html = preg_replace(
        '~\b(href|src)=(["\'])(?:https?:)?//blogs\.nvidia\.com/blog/([^"\']*)\2~i',
        '$1=$2' . $base . '/blog/blog/$3$2',
        $html
    ) ?? $html;

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

    if (!str_contains($html, 'id="cw-hydrate-images"')) {
        $hydrate = '<script id="cw-hydrate-images">(function(){var b=' . json_encode($base) . ';function fix(u){if(!u||typeof u!=="string")return u;if(u.indexOf("data:image")===0)return u;if(/^https?:\\/\\//i.test(u))return u;if(u.indexOf("/content/dam/")===0)return b+"/assets/www.nvidia.com/content/dam/"+u.slice(13);if(u.indexOf("/content/nvidiaGDC/")===0)return b+"/assets/www.nvidia.com/content/nvidiaGDC/"+u.slice(18);if(u.indexOf("./assets/")===0)return b+u.slice(1);if(u.indexOf("../assets/")===0||u.indexOf("assets/")===0){var i=u.indexOf("assets/");if(i>=0)return b+"/"+u.slice(i);}return u;}function pickSrc(el){var a=el.getAttribute("data-asset");if(a&&a.indexOf("assets/")>=0)return fix(a);var c=el.getAttribute("data-cmp-src");if(c)return fix(c);return null;}function run(){try{document.querySelectorAll("[data-cmp-src],[data-cmp-desktopimage],[data-cmp-mobileimage],[data-src],img.cmp-image__image--is-loading").forEach(function(el){var attrs=["data-cmp-src","data-cmp-desktopimage","data-cmp-mobileimage","data-src","data-asset","src"];for(var i=0;i<attrs.length;i++){var a=attrs[i];var v=el.getAttribute(a);if(!v)continue;var nv=fix(v);if(nv!==v)el.setAttribute(a,nv);}var use=pickSrc(el);if(!use&&el.tagName==="IMG")use=fix(el.getAttribute("src"));if(use){var img=el.tagName==="IMG"?el:el.querySelector("img");if(img){var s=img.getAttribute("src")||"";if(!s||s.indexOf("data:image/gif")===0||/cmp-image__image--is-loading/.test(img.className)){img.setAttribute("src",use);img.classList.remove("cmp-image__image--is-loading");}}}});}catch(e){}}if(document.readyState==="loading"){document.addEventListener("DOMContentLoaded",run);}else{run();}setTimeout(run,400);setTimeout(run,1500);})();</script>';
        $html = preg_replace('~</head>~i', $hydrate . '</head>', $html, 1) ?? $html;
    }

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
