<?php
declare(strict_types=1);

/**
 * Strip third-party marketing / tracking scripts from HTML before output.
 */
function cw_third_party_url(string $url): bool
{
    $u = strtolower($url);

    $parts = [
        'adobedtm.com', 'assets.adobedtm', 'launch-', '/launch-',
        'cookielaw.org', 'cdn.cookielaw', 'onetrust.com',
        'ot-sdk', 'otsdk', 'otbanner', 'ot-custom.js',
        'googletagmanager.com', 'google-analytics.com', 'googleadservices.com',
        'googlesyndication.com', 'doubleclick.net', 'demdex.net',
        'facebook.net', 'connect.facebook', 'fbevents.js',
        'static.ads-twitter.com', 'ads-twitter.com', 'analytics.twitter',
        'snap.licdn.com', 'linkedin.com/insight', 'px.ads.linkedin',
        'bat.bing.com', 'bing.com/bat.js',
        'bizible.com', 'cdn.bizible',
        'munchkin.marketo.net', 'marketo.net', 'marketo.com',
        '6sc.co', 'j.6sc.co',
        'evgnet.com', 'evergage',
        'hotjar.com', 'static.hotjar',
        'go-mpulse.net', 'mpulse', 'boomerang',
        'optimizely.com', 'cdn.optimizely',
        'hotjar.io',
        'smetrics.', 'omniture.com', '2o7.net',
        'qualtrics.com', 'siteintercept',
        'decibelinsight', 'contentsquare',
        'kampyle.com', 'medallia.com',
        'useinsider.com', 'api.useinsider',
        'info.nvidia.com/js/forms2', 'info.nvidia.com/rs/',
        'pardot.com', 'pi.pardot',
        'newrelic.com', 'nr-data.net',
        'clarity.ms',
        'segment.io', 'segment.com/analytics',
        'heap-analytics', 'heapanalytics',
        'fullstory.com',
        'mouseflow.com',
        'crazyegg.com',
        'taboola.com', 'outbrain.com',
        'yandex.ru/metrika',
        'quantserve.com', 'scorecardresearch',
        'datadoghq', 'datadog-rum',
        'pathfactory.com', 'cdn-app.pathfactory',
        'lookbookhq.com', 'cdn.lookbookhq', 'app.cdn.lookbookhq',
        'platform.twitter.com/widgets',
        'useinsider.com', 'api.useinsider',
        'pathfactory',
    ];

    foreach ($parts as $p) {
        if (str_contains($u, $p)) {
            return true;
        }
    }

    // Adobe DTM rule scripts (RC*.min.js, EX*.min.js under adobedtm)
    if (preg_match('~adobedtm[^"\']*(?:/RC|/EX|libraryCode|launch-)~i', $u)) {
        return true;
    }

    return false;
}

function cw_tracking_inline(string $body): bool
{
    $low = strtolower($body);

    // Keep JSON-LD and site config blocks
    if (str_contains($low, '"@context"') && str_contains($low, 'schema.org')) {
        return false;
    }
    if (str_contains($low, 'nvidiagdc') || str_contains($low, 'nvidia_gdc')) {
        return false;
    }
    if (str_contains($low, 'nvidiagdc.addproperty') || str_contains($low, 'var nvidialogdc')) {
        return false;
    }

    $markers = [
        '_satellite', 'dtm_track', 'dtm_layer', 'dtm_clone', 'dtm_debug',
        'optanonwrapper', 'onetrust', 'optanon',
        'fbq(', 'fbevents', 'gtag(', 'googletagmanager',
        'google_tag_manager', 'adobe.target', 'adobe.launch',
        'munchkin', 'bizible', 'evergage', 'interaction studio',
        'hotjar', 'hj(', '_hjsettings',
        '6si', 'sixsense',
        'uwt(', 'twq(', 'twitter pixel',
        'linkedin insight', '_linkedin_data_partner',
        'bat.bing', 'uetq', 'microsoft advertising',
        'appmeasurement', 'visitor.getinstance', 's_gi(', 's.tl(', 's.t();',
        'boomr.', 'go-mpulse', 'window.boomr',
        'decibelinsight', 'contentsquare',
        'marketo', 'mktoforms',
        'pardot', 'pitracker',
        'heap.push', 'analytics.track',
        'dataLayer.push', 'tagmanager',
        'recommendation_filter', 'adobe.target.getoffers',
    ];

    foreach ($markers as $m) {
        if (str_contains($low, $m)) {
            return true;
        }
    }

    return false;
}

function cw_sanitize_html(string $html): string
{
    if (getenv('CW_SKIP_SANITIZE') === '1') {
        return $html;
    }

    // OneTrust / cookie consent UI injected into saved HTML
    $html = preg_replace('~<div id="onetrust-consent-sdk"[\s\S]*?(?=</body>)~i', '', $html) ?? $html;

    // OneTrust styles embedded mid-page
    $html = preg_replace('~<style[^>]*>\s*#onetrust[\s\S]*?</style>~i', '', $html) ?? $html;
    $html = preg_replace('~<style[^>]*>\s*\.ot-floating-button[\s\S]*?</style>~i', '', $html) ?? $html;

    // External script tags by URL
    $html = preg_replace(
        '~<script\b[^>]*\bsrc=(["\'])(?://|https?:)?/?(?:assets/)?[^"\']*(?:adobedtm|cookielaw|6sc\.co|facebook\.net|ads-twitter|hotjar|marketo|bizible|evgnet|licdn\.com|bat\.bing|googletagmanager|google-analytics|doubleclick|demdex|go-mpulse|optimizely|datadog|pathfactory|lookbookhq|useinsider|platform\.twitter\.com/widgets)[^"\']*\1[^>]*>\s*</script>~is',
        '',
        $html
    ) ?? $html;

    // Broken / split pathfactory script stubs saved in mirrored HTML
    $html = preg_replace(
        '~<script\b[^>]*\bsrc=(["\'])[^"\']*pathfactory[^"\']*\1[^>]*>\s*</script>~is',
        '',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~<script\b[^>]*\bsrc=(["\'])\s*assets=""[^>]*pathfactory[^>]*>\s*</script>~is',
        '',
        $html
    ) ?? $html;

    $repl = static function (array $m): string {
        $tag = $m[0];
        if (preg_match('~\bsrc=(["\'])(.*?)\1~is', $tag, $src) && cw_third_party_url($src[2])) {
            return '';
        }
        if (preg_match('~<script\b[^>]*>(.*?)</script>~is', $tag, $inner) && cw_tracking_inline($inner[1])) {
            return '';
        }
        return $tag;
    };

    $prev = null;
    $passes = 0;
    while ($prev !== $html && $passes < 8) {
        $prev = $html;
        $html = preg_replace_callback('~<script\b[^>]*>.*?</script>~is', $repl, $html) ?? $html;
        $passes++;
    }

    // Adobe DTM _satellite inline blocks (can be huge, multiline)
    $html = preg_replace('~<script\b[^>]*>\s*_satellite\[["\']_runScript[\s\S]*?</script>~i', '', $html) ?? $html;

    // Commented-out noscript stubs must not participate in tracking cleanup below
    $html = preg_replace('~<!--\s*<noscript[\s\S]*?</noscript>\s*-->~i', '', $html) ?? $html;

    // Noscript tracking pixels (keyword must appear inside the same noscript block)
    $html = preg_replace(
        '~<noscript\b[^>]*>(?:(?!</noscript>).)*(?:facebook|google-analytics|googletagmanager|linkedin|twitter|doubleclick)(?:(?!</noscript>).)*</noscript>~is',
        '',
        $html
    ) ?? $html;

    // Hide cookie banner remnants via CSS (runtime safety)
    if (!str_contains($html, 'id="cw-hide-marketing"')) {
        $hide = '<style id="cw-hide-marketing">'
            . '#onetrust-consent-sdk,#onetrust-banner-sdk,#onetrust-pc-sdk,.onetrust-pc-dark-filter,'
            . '.ot-sdk-container,.ot-floating-button,#ot-sdk-btn,.ot-sdk-row{display:none!important;visibility:hidden!important;}'
            . '</style>';
        if (preg_match('~</head>~i', $html)) {
            $html = preg_replace('~</head>~i', $hide . '</head>', $html, 1) ?? $html;
        }
    }

    // Stub globals referenced by remaining site JS
    if (!str_contains($html, 'id="cw-marketing-stubs"')) {
        $stub = '<script id="cw-marketing-stubs">(function(){try{'
            . 'window._satellite=window._satellite||{};'
            . 'var _rs=function(cb){try{if(typeof cb==="function")cb({},{},window.Promise||{resolve:function(){}});}catch(e){}};'
            . 'for(var i=1;i<=30;i++){(function(n){window._satellite["_runScript"+n]=_rs;})(i);}'
            . 'window._satellite.track=window._satellite.track||function(){};'
            . 'window._satellite.getVar=window._satellite.getVar||function(){return "";};'
            . 'window._satellite.setVar=window._satellite.setVar||function(){};'
            . 'window._satellite.pageBottom=window._satellite.pageBottom||function(){};'
            . 'window._satellite.pageTop=window._satellite.pageTop||function(){};'
            . 'if(window._satellite.cookie){window._satellite.cookie.get=window._satellite.cookie.get||function(){return "";};}'
            . 'window.fbq=window.fbq||function(){};window.fbq.queue=window.fbq.queue||[];window.fbq.loaded=true;'
            . 'window.gtag=window.gtag||function(){};window.dataLayer=window.dataLayer||[];'
            . 'window.uetq=window.uetq||[];window.twq=window.twq||function(){};'
            . 'window._linkedin_data_partner_ids=window._linkedin_data_partner_ids||[];'
            . 'window.Munchkin=window.Munchkin||{init:function(){},create:function(){}};'
            . 'window._bizo=window._bizo||[];window._bizo.push=window._bizo.push||function(){};'
            . 'window.hj=window.hj||function(){};'
            . 'window.OptanonWrapper=window.OptanonWrapper||function(){};'
            . 'window.dtm_track=window.dtm_track||function(){return true;};'
            . 'window.dtm_layer=window.dtm_layer||{};'
            . '}catch(e){}})();</script>';
        if (preg_match('~</head>~i', $html)) {
            $html = preg_replace('~</head>~i', $stub . '</head>', $html, 1) ?? $html;
        }
    }

    // Inline loaders that pull third-party marketing scripts from mirrored assets
    $html = preg_replace(
        '~<script\b[^>]*>[\s\S]*?(?:pathfactory|lookbookhq|lbhq|datadoghq|datadog\.init|DD_RUM)[\s\S]*?</script>~i',
        '',
        $html
    ) ?? $html;

    // Third-party tracking / marketing iframes
    $html = preg_replace(
        '~<iframe\b[^>]*\bsrc=(["\'])[^"\']*(?:platform\.twitter\.com|facebook\.com/plugins|doubleclick|googletagmanager|marketo|pardot|info\.nvidia\.com)[^"\']*\1[^>]*>\s*</iframe>~is',
        '',
        $html
    ) ?? $html;

    $html = preg_replace('~\n{3,}~', "\n\n", $html) ?? $html;

    $html = cw_disable_forms_in_html($html);

    return $html;
}

/** True unless CW_ENABLE_FORMS=1 is set in the environment. */
function cw_forms_disabled(): bool
{
    return getenv('CW_ENABLE_FORMS') !== '1';
}

/**
 * Disable every HTML form in output (AEM lead-gen, blog search, contact, etc.).
 */
function cw_disable_forms_in_html(string $html): string
{
    if (!cw_forms_disabled()) {
        return $html;
    }

    if (!str_contains($html, 'id="cw-disable-forms"')) {
        $block = '<style id="cw-disable-forms">'
            . 'form[data-cw-form-disabled],form[data-cw-form-disabled] input,'
            . 'form[data-cw-form-disabled] select,form[data-cw-form-disabled] textarea,'
            . 'form[data-cw-form-disabled] button{pointer-events:none!important;cursor:not-allowed!important;}'
            . 'form[data-cw-form-disabled]{opacity:.72;}'
            . '.guideformcontainer,.aemformcontainer iframe{display:none!important;}'
            . '</style>'
            . '<script id="cw-disable-forms">(function(){'
            . 'function lock(f){if(!f||f.getAttribute("data-cw-form-disabled"))return;'
            . 'f.setAttribute("data-cw-form-disabled","1");f.setAttribute("action","#");'
            . 'f.setAttribute("method","get");f.setAttribute("novalidate","novalidate");'
            . 'f.querySelectorAll("input,select,textarea,button").forEach(function(el){el.disabled=true;});}'
            . 'function run(){try{document.querySelectorAll("form").forEach(lock);}catch(e){}}'
            . 'document.addEventListener("submit",function(e){if(e.target&&e.target.tagName==="FORM"){e.preventDefault();e.stopPropagation();}},true);'
            . 'if(document.readyState==="loading"){document.addEventListener("DOMContentLoaded",run);}else{run();}'
            . 'setTimeout(run,500);setTimeout(run,1500);'
            . '})();</script>';
        if (preg_match('~</head>~i', $html)) {
            $html = preg_replace('~</head>~i', $block . '</head>', $html, 1) ?? $html;
        }
    }

    $html = preg_replace_callback(
        '~<form\b([^>]*)>~i',
        static function (array $m): string {
            $attrs = $m[1];
            $attrs = preg_replace('~\saction=(["\'])[^"\']*\1~i', '', $attrs) ?? $attrs;
            $attrs = preg_replace('~\smethod=(["\'])[^"\']*\1~i', '', $attrs) ?? $attrs;
            if (!str_contains($attrs, 'data-cw-form-disabled')) {
                $attrs .= ' data-cw-form-disabled="1" action="#" method="get" novalidate onsubmit="return false;"';
            }
            return '<form' . $attrs . '>';
        },
        $html
    ) ?? $html;

    // AEM form iframes and embedded form containers
    $html = preg_replace(
        '~<iframe\b[^>]*(?:data-form-page-path|guideContainer|forms/af/|marketo|pardot)[^>]*>[\s\S]*?</iframe>~i',
        '',
        $html
    ) ?? $html;

    return $html;
}

/**
 * Fix offline-only runtime errors: CSRF JSON parse, starfleet chunks, LIBRARIAN search.
 */
function cw_inject_offline_runtime_fixes(string $html): string
{
    $base = CW_BASE_URL;
    $libSrc = $base . '/assets/www.nvidia.com/content/dam/en-zz/Solutions/librarian/bundle-search-prod-pub-v3.1.js';

    // Corrupted librarian script tags from HTML→PHP conversion
    $html = preg_replace(
        '~<script defer="[^>]*bundle-search-prod-pub-v3\.1\.js[^>]*></script>~i',
        '<script defer src="' . htmlspecialchars($libSrc, ENT_QUOTES) . '"></script>',
        $html
    ) ?? $html;

    // Avoid ReferenceError when the search bundle did not load
    $html = preg_replace(
        '~LIBRARIAN\.Home\.mount\(\{~',
        '(typeof LIBRARIAN!==\'undefined\'&&LIBRARIAN.Home?LIBRARIAN.Home.mount:Function.prototype)({',
        $html
    ) ?? $html;

    if (!str_contains($html, 'id="cw-offline-runtime"')) {
        $runtime = '<script id="cw-offline-runtime">(function(){'
            . 'var b=window.__CW_ASSET_ROOT||' . json_encode($base) . ';'
            . 'window.__webpack_public_path__=b+"/assets/www.nvidia.com/assets/account-wrapper/";'
            . 'var g=window.Granite=window.Granite||{};'
            . 'g.HTTP=g.HTTP||{};'
            . 'g.csrf={initialised:true,initialized:true,token:"offline",_isFresh:true,'
            . '_refreshToken:function(){return Promise.resolve("offline");},'
            . 'getToken:function(){return Promise.resolve("offline")},'
            . 'refreshToken:function(){return Promise.resolve("offline")}};'
            . 'var oOpen=XMLHttpRequest.prototype.open,oSend=XMLHttpRequest.prototype.send;'
            . 'XMLHttpRequest.prototype.open=function(m,u){this._cwUrl=u;return oOpen.apply(this,arguments);};'
            . 'XMLHttpRequest.prototype.send=function(){'
            . 'var u=String(this._cwUrl||"");'
            . 'if(u.indexOf("csrf")>=0||u.indexOf("/libs/granite/")>=0){'
            . 'var s=this;setTimeout(function(){'
            . 'try{s.readyState=4;s.status=200;s.responseText=\'{"token":"offline"}\';}catch(e){}'
            . 'if(typeof s.onreadystatechange==="function")s.onreadystatechange();'
            . 'if(typeof s.onload==="function")s.onload();},0);return;}'
            . 'return oSend.apply(this,arguments);};'
            . 'if(window.fetch){var oF=window.fetch;window.fetch=function(u,opts){'
            . 'var url=typeof u==="string"?u:(u&&u.url)||"";'
            . 'if(url.indexOf("csrf")>=0||url.indexOf("/libs/granite/")>=0){'
            . 'return Promise.resolve(new Response(\'{"token":"offline"}\',{status:200,headers:{"Content-Type":"application/json"}}));}'
            . 'return oF.apply(this,arguments);};}'
            . '})();</script>';

        if (preg_match('~</head>~i', $html)) {
            $html = preg_replace('~</head>~i', $runtime . '</head>', $html, 1) ?? $html;
        }
    }

    if (str_contains($html, 'id="starfleet-script"') && !str_contains($html, 'id="cw-webpack-account-wrapper"')) {
        $webpack = '<script id="cw-webpack-account-wrapper">window.__webpack_public_path__=(window.__CW_ASSET_ROOT||'
            . json_encode($base) . ')+"/assets/www.nvidia.com/assets/account-wrapper/";</script>';
        $html = preg_replace(
            '~(<script id="starfleet-script")~i',
            $webpack . '$1',
            $html,
            1
        ) ?? $html;
    }

    return $html;
}
