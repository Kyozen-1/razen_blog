@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<style>
    .wf-force-outline-none[tabindex="-1"]:focus {
        outline: none;
    }
</style>
<meta charset="utf-8">
<title>@yield('title', 'RevoUpedia - Pengetahuan Karir &amp; Skill Teknis | RevoU')</title>
<meta content="{{$profil->deskripsi}}" name="description">
<meta content="@yield('title', 'RevoUpedia - Pengetahuan Karir &amp; Skill Teknis | RevoU')" property="og:title">
<meta content="{{$profil->deskripsi}}" property="og:description">
<meta content="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b49d739cc1e8c0e7aff555_open%20graph%20(1).png" property="og:image">
<meta content="@yield('title', 'RevoUpedia - Pengetahuan Karir &amp; Skill Teknis | RevoU')" property="twitter:title">
<meta content="{{$profil->deskripsi}}" property="twitter:description">
<meta content="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b49d739cc1e8c0e7aff555_open%20graph%20(1).png" property="twitter:image">
<meta property="og:type" content="website">
{{-- <meta content="summary_large_image" name="twitter:card"> --}}
<meta content="width=device-width, initial-scale=1" name="viewport">
{{-- <meta content="euFNMilTOMQzNT5XajbJXN4d-Y2vY82jFZwaea1x8tI" name="google-site-verification"> --}}
<link href="{{ asset('landing-page/assets/css/assets-global.website-files.com_61af164800e38c4f53c60b4e_css_revou.68f56a50a.min.css') }}" rel="stylesheet" type="text/css">
{{-- <link href="https://fonts.googleapis.com" rel="preconnect"> --}}
{{-- <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"> --}}
<script async="" src="{{ asset('landing-page/assets/js/clarity.ms_s_0.7.8_clarity.js') }}"></script>
<script async="" src="{{ asset('landing-page/assets/js/clarity.ms_tag_uet_187024822') }}"></script>
{{-- <script type="text/javascript" async="" src="{{ asset('landing-page/assets/js/analytics.tiktok.com_i18n_pixel_static_main.MTY0NTk0YzcxMQ.js') }}" data-id="C7U9HV8FLK2NRAIT00BG"></script> --}}
{{-- <script type="text/javascript" async="" src="{{ asset('landing-page/assets/js/googletagmanager.com_gtag_js_id=G-213XHLWDSP&amp;l=dataLayer&amp;cx=c') }}"></script> --}}
{{-- <script type="text/javascript" async="" src="{{ asset('landing-page/assets/js/analytics.tiktok.com_i18n_pixel_events.js_sdkid=C7U9HV8FLK2NRAIT00BG&amp;lib=ttq') }}"></script> --}}
{{-- <script src="{{ asset('landing-page/assets/js/connect.facebook.net_signals_config_393920814533839_v=2.9.106&amp;r=stable') }}" async=""></script> --}}
{{-- <script async="" src="{{ asset('landing-page/assets/js/connect.facebook.net_en_US_fbevents.js') }}"></script> --}}
{{-- <script type="text/javascript" async="" src="{{ asset('landing-page/assets/js/bat.bing.com_bat.js') }}"></script> --}}
{{-- <script type="text/javascript" async="" src="{{ asset('landing-page/assets/js/google-analytics.com_analytics.js') }}"></script> --}}
{{-- <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-M3W4WQB"></script> --}}
{{-- <script type="text/javascript" async="" src="{{ asset('landing-page/assets/js/gstatic.com_recaptcha_releases_Xh5Zjh8Od10-SgxpI_tcSnHR_recaptcha__id.js') }}" crossorigin="anonymous" integrity="sha384-olinW8rd0MN5wesWMLQ9XhmZ6KHOYkt8Gsbmr3wxjFkNS8mlL8UgkRItHtgN7ZZ9"></script> --}}
{{-- <script src="{{ asset('landing-page/assets/js/ajax.googleapis.com_ajax_libs_webfont_1.6.26_webfont.js') }}" type="text/javascript"></script> --}}
{{-- <link rel="stylesheet" href="{{ asset('landing-page/assets/css/fonts.googleapis.com_css_family=PT+Sans_400,400italic,700,700italic%7CMontserrat_100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,9.css') }}" media="all"> --}}
{{-- <script type="text/javascript">
    WebFont.load({
        google: {
        families: ["PT Sans:400,400italic,700,700italic", "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Oswald:200,300,400,500,600,700", "Red Hat Display:300,regular,500,600,700,800,900,300italic,italic,500italic,600italic,700italic,800italic,900italic"]
        }
    });
</script> --}}
{{-- <script type="text/javascript">
    ! function(o, c) {
        var n = c.documentElement,
        t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
</script> --}}
<link href="{{ asset('images/razen-blog/logo/'.$profil->logo_kecil) }}" rel="shortcut icon" type="image/x-icon">
<link href="{{ asset('images/razen-blog/logo/'.$profil->logo_kecil) }}" rel="apple-touch-icon">
{{-- <script src="{{ asset('landing-page/assets/js/google.com_recaptcha_api.js') }}" type="text/javascript"></script> --}}
<!-- Google Tag Manager -->
{{-- <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M3W4WQB');
</script> --}}
<!-- End Google Tag Manager -->
<!-- Please keep this css code to improve the font quality-->
<style>
  * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
{{-- <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"> --}}
{{-- <script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/708347562/?random=1686291759166&amp;cv=11&amp;fst=1686291759166&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45He3671&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Frevou.co%2Frevoupedia&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=RevoUpedia%20-%20Pengetahuan%20Karir%20%26%20Skill%20Teknis%20%7C%20RevoU&amp;auid=727028452.1686278340&amp;uaa=x86&amp;uab=64&amp;uafvl=Not.A%252FBrand%3B8.0.0.0%7CChromium%3B114.0.5735.110%7CGoogle%2520Chrome%3B114.0.5735.110&amp;uamb=0&amp;uap=Windows&amp;uapv=15.0.0&amp;uaw=0&amp;rfmt=3&amp;fmt=4"></script> --}}
{{-- <script src="https://bat.bing.com/p/action/187024822.js" type="text/javascript" async="" data-ueto="ueto_47ac04145a"></script> --}}
{{-- <script charset="utf-8" src="https://analytics.tiktok.com/i18n/pixel/static/identify_738b3.js"></script> --}}
@yield('css')
