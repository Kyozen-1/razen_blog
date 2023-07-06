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
        @php
            use App\Models\LandingPagePanduan;

            $beranda = LandingPagePanduan::first();

            $section_1 = json_decode($beranda->section_1, true);
        @endphp
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
                <div data-w-id="ebde887b-e528-2468-97e1-a81c815cbc2f" class="section-cta-panduan position-relative" id="section-cta-panduan" style="background: {{$section_1 ? $section_1['warna'] : ''}} !important;">
                    <div class="padding-vertical padding-xxlarge">
                        <div class="page-padding">
                        <div class="container-large">
                            <div class="cta_component">
                            <div class="text-align-center align-center max-width">
                                <h2 class="cta_heading" style="transform: translate3d(0px, 60px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">{{$section_1 ? $section_1['judul'] : ''}}</h2>
                                <div class="program_header-text margin-small" style="transform: translate3d(0px, 60px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">{{$section_1 ? $section_1['deskripsi'] : ''}}</div>
                                <a href="{{$section_1 ? $section_1['link'] : ''}}" class="button-tertiary-new is-cta-button no-transition w-button" style="transform: translate3d(0px, 60px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">{{$section_1 ? $section_1['judul_tombol'] : ''}}</a>
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
    </body>
</html>
