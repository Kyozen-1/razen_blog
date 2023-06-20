<!DOCTYPE html>
<html lang="en">
    <head>
        @include('landing-page.layouts.head')
        <style>
            .section-cta-panduan{
                background-color:#fede3e;
            }
        </style>
    </head>
    <body>
        <div class="global-styles w-embed">
            <style>
                /* Snippet gets rid of top margin on first element in any rich text*/
                .w-richtext>:first-child {
                margin-top: 0;
                }

                /* Snippet gets rid of bottom margin on last element in any rich text*/
                .w-richtext>:last-child,
                .w-richtext ol li:last-child,
                .w-richtext ul li:last-child {
                margin-bottom: 0;
                }

                /* Snippet prevents all click and hover interaction with an element */
                .clickable-off {
                pointer-events: none;
                }

                /* Snippet enables all click and hover interaction with an element */
                .clickable-on {
                pointer-events: auto;
                }

                /* Snippet enables you to add class of div-square which creates and maintains a 1:1 dimension of a div.*/
                .div-square::after {
                content: "";
                display: block;
                padding-bottom: 100%;
                }

                /*Hide focus outline for main content element*/
                main:focus-visible {
                outline: -webkit-focus-ring-color auto 0px;
                }

                /* Make sure containers never lose their center alignment*/
                .container-medium,
                .container-small,
                .container-large {
                margin-right: auto !important;
                margin-left: auto !important;
                }

                /*Reset buttons, and links styles*/
                a {
                color: inherit;
                text-decoration: inherit;
                font-size: inherit;
                }

                /*Apply "..." after 3 lines of text */
                .text-style-3lines {
                display: -webkit-box;
                overflow: hidden;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                }

                /*Apply "..." after 2 lines of text */
                .text-style-2lines {
                display: -webkit-box;
                overflow: hidden;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                }
            </style>
        </div>
        <div class="page-wrapper">
            <main class="page-wrapper">
                @yield('header')
                @yield('content')
                <div data-w-id="ebde887b-e528-2468-97e1-a81c815cbc2f" class="section-cta-panduan position-relative" id="section-cta-panduan">
                    <div class="padding-vertical padding-xxlarge">
                        <div class="page-padding">
                        <div class="container-large">
                            <div class="cta_component">
                            <div class="text-align-center align-center max-width">
                                <h2 class="cta_heading" style="opacity: 0; transform: translate3d(0px, 60px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Siap maksimalkan potensimu?</h2>
                                <div class="program_header-text margin-small" style="opacity: 0; transform: translate3d(0px, 60px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Gabung di RevoU untuk belajar <em>skills</em>, asah dengan mengerjakan studi kasus, dan tingkatkan pengetahuanmu. Naik level hanya dalam 5 hari belajar bareng instruktur berpengalaman, bebas biaya, dan dapat sertifikat! </div>
                                <a href="https://revou.co/important-links" class="button-tertiary-new is-cta-button no-transition w-button" style="opacity: 0; transform: translate3d(0px, 60px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Ikut Digital Course Gratis + Sertifikat</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('landing-page.layouts.footer')
        </div>
        @include('landing-page.layouts.js')
        <div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon971179982817">
            <img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon828726246342" width="0" height="0" alt="" src="https://bat.bing.com/action/0?ti=187024822&amp;tm=gtm002&amp;Ver=2&amp;mid=df85eff3-0de0-4441-93f8-a728c495e08b&amp;sid=ca7efa40066e11eeb22b8f3afe6d34f6&amp;vid=ca7f2880066e11ee998577ed70c2fa75&amp;vids=0&amp;msclkid=N&amp;gtm_tag_source=1&amp;uach=pv%3D15.0.0&amp;pi=918639831&amp;lg=id-ID&amp;sw=1536&amp;sh=864&amp;sc=24&amp;tl=RevoUpedia%20-%20Pengetahuan%20Karir%20%26%20Skill%20Teknis%20%7C%20RevoU&amp;p=https%3A%2F%2Frevou.co%2Frevoupedia&amp;r=&amp;lt=1375&amp;evt=pageLoad&amp;sv=1&amp;rn=600824">
        </div>
    </body>
    <iframe id="__JSBridgeIframe_1.0__" title="jsbridge___JSBridgeIframe_1.0__" style="display: none;"></iframe>
    <iframe id="__JSBridgeIframe_SetResult_1.0__" title="jsbridge___JSBridgeIframe_SetResult_1.0__" style="display: none;"></iframe>
    <iframe id="__JSBridgeIframe__" title="jsbridge___JSBridgeIframe__" style="display: none;"></iframe>
    <iframe id="__JSBridgeIframe_SetResult__" title="jsbridge___JSBridgeIframe_SetResult__" style="display: none;"></iframe>
</html>
