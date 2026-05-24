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
        '~<script\b[^>]*\bsrc=(["\'])(?://|https?:)?/?(?:assets/)?[^"\']*(?:adobedtm|cookielaw|6sc\.co|facebook\.net|ads-twitter|hotjar|marketo|bizible|evgnet|licdn\.com|bat\.bing|googletagmanager|google-analytics|doubleclick|demdex|go-mpulse|optimizely)[^"\']*\1[^>]*>\s*</script>~is',
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

    // Noscript tracking pixels
    $html = preg_replace(
        '~<noscript\b[^>]*>[\s\S]*?(?:facebook|google-analytics|googletagmanager|linkedin|twitter|doubleclick)[\s\S]*?</noscript>~i',
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

    $html = preg_replace('~\n{3,}~', "\n\n", $html) ?? $html;

    return $html;
}
