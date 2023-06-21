@extends('landing-page.layouts.app')
@section('title', 'Beranda | Razen Blog')
@php
        use App\Models\Profil;
        use App\Models\LandingPageBeranda;

        $profil = Profil::first();

        $beranda = LandingPageBeranda::first();

        $section_1 = json_decode($beranda->section_1, true);
        $section_2 = json_decode($beranda->section_2, true);
        $section_3 = json_decode($beranda->section_3, true);
        $section_4 = json_decode($beranda->section_4, true);
    @endphp
@section('css')
    <style>
        @media (min-width: 992px) {
            .hero-bg-revoupedia{
                background-image:url({{ asset('images/landing-page/beranda/'.$section_1['gambar_background']) }})
            }
        }
    </style>
@endsection

@section('header')
    <header class="hero-bg-revoupedia">
        <div data-collapse="medium" data-animation="default" data-duration="200" data-easing="ease-in-out" data-easing2="ease-in-out" data-doc-height="1" role="banner" class="nav_component transparent w-nav">
            <div class="page-padding">
                <div class="nav_container_left">
                    @include('landing-page.layouts.nav')

                    <div class="menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
                        <div class="menu-icon w-embed">
                            <svg width="3rem" height="1.5rem" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 7H1C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9H19C19.5523 9 20 8.55228 20 8C20 7.44772 19.5523 7 19 7Z" fill="currentColor"></path>
                                <path d="M19 0H7C6.44772 0 6 0.447715 6 1C6 1.55228 6.44772 2 7 2H19C19.5523 2 20 1.55228 20 1C20 0.447715 19.5523 0 19 0Z" fill="currentColor"></path>
                                <path d="M19 14H11C10.4477 14 10 14.4477 10 15C10 15.5523 10.4477 16 11 16H19C19.5523 16 20 15.5523 20 15C20 14.4477 19.5523 14 19 14Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
        </div>
        <div class="page-padding-home" id="page-padding-home">
            <div class="container-large">
                <div class="padding-vertical padding-xhuge revoupedia">
                    <div class="w-layout-grid program-header_grid">
                        <div id="w-node-afe5d203-46ea-2c08-056b-90192d429ec2-1b121b0d" class="program-header_content-wrapper full-width">
                            <div class="program-header_content no-max">
                                <div data-w-id="afe5d203-46ea-2c08-056b-90192d429ec4" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="program-header_heading-wrapper full-width">
                                    <h1 class="header_revoupedia text-color-white">
                                        {{$section_1?$section_1['judul']:'' }}
                                    </h1>
                                </div>
                                <div data-w-id="afe5d203-46ea-2c08-056b-90192d429ed7" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="program-header_text-wrapper full-width">
                                    <div class="program_header-text text-weight-semibold">{!! $section_1?$section_1['deskripsi']:'' !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section id="section-panduan_karir" data-w-id="ef9b5c07-bbc4-8281-81d7-997305c63d40" class="section-panduan_karir is-relative">
        <div class="padding-vertical padding-medium">
            <div class="page-padding">
                <div class="container-large">
                    <div id="our-programs" class="margin-bottom margin-medium">
                        <div class="text-align-center">
                            <h2 data-w-id="ef9b5c07-bbc4-8281-81d7-997305c63d46" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="our-programs-heading large-text">
                                {{$section_2?$section_2['judul'] : ''}}
                            </h2>
                        </div>
                    </div>
                    <div class="padding-vertical padding-large">
                        <div data-w-id="ef9b5c07-bbc4-8281-81d7-997305c63d4b" style="opacity: 1;" class="our-programs_component">
                            <div class="collection-panduan w-dyn-list">
                                <div role="list" class="collection-list-panduan w-dyn-items">
                                    @if ($section_2)
                                        @if ($section_2['konten'] != '')
                                            @foreach ($section_2['konten'] as $item)
                                                <div role="listitem" class="collection-item-panduan w-dyn-item">
                                                    <a style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="{{$item['link']}}" class="card-panduan w-inline-block">
                                                        <div class="card-panduan-content">
                                                            <div class="card-panduan-text">
                                                                <img src="{{ asset('images/landing-page/beranda/'.$item['gambar']) }}" loading="lazy" alt="" sizes="(max-width: 479px) 90px, (max-width: 767px) 89vw, (max-width: 1439px) 25vw, 328px" class="card-panduan-image">
                                                                <h4 class="card-panduan-title small-mobile">{{$item['judul']}}</h4>
                                                            </div>
                                                            <p class="card-panduan-body padding-inner">
                                                                {{$item['deskripsi']}}
                                                            </p>
                                                        </div>
                                                        <div class="cta-button-wrapper">
                                                            <div class="button is-desktop-only">
                                                                <div>baca selengkapnya</div>
                                                            </div>
                                                            <div class="button-circle">
                                                                <div class="button-circle-text">Baca Selengkapnya</div>
                                                                <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/629dcf25013a12b6d4aacf17_icon-arrow-right_rounded.svg" loading="lazy" alt="" class="button-circle-image">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-wrapper">
                        <a data-w-id="00611145-4bca-9a59-0888-7f210e8f4c7c" href="{{ route('profesi') }}" class="link-more text-yellow w-inline-block">
                            <div class="link-more-text">Lihat Semua Profesi</div>
                            <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b1f58f41a2f60738410ba5_icon-more-yellow.svg" loading="lazy" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" alt="" class="link-more-icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-panduan_teknis" data-w-id="31b9f1f3-29bc-e241-6359-164181754dba" class="section-panduan_teknis">
        <div class="padding-vertical padding-medium">
            <div class="page-padding">
                <div class="container-large">
                    <div id="our-programs" class="margin-bottom margin-medium">
                        <div class="text-align-center">
                            <h2 data-w-id="31b9f1f3-29bc-e241-6359-164181754dc0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="our-programs-heading text-color-black large-text">
                                {{$section_3?$section_3['judul'] : ''}}
                            </h2>
                        </div>
                    </div>
                    <div class="padding-vertical padding-large">
                        <div data-w-id="31b9f1f3-29bc-e241-6359-164181754dc5" class="our-programs_component">
                            <div class="collection-list-panduan center grid-custom">
                                @if ($section_3)
                                    @if ($section_3['konten'] != '')
                                        @foreach ($section_3['konten'] as $item)
                                            <div id="w-node-_90774362-c06f-1a68-f1dc-ae8800eefd07-1b121b0d" class="collection-panduan manual w-dyn-list">
                                                <div role="list" class="collection-list-panduan grid-2 w-dyn-items">
                                                    <div role="listitem" class="collection-item-panduan w-dyn-item">
                                                        <a data-w-id="1eedb616-cb99-de42-35f0-edfd95e796b9" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="{{$item['link']}}" class="card-panduan w-inline-block">
                                                            <div class="card-panduan-content">
                                                                <div class="card-panduan-text">
                                                                <img src="{{ asset('images/landing-page/beranda/'.$item['gambar']) }}" loading="lazy" alt="" sizes="(max-width: 479px) 90px, (max-width: 767px) 89vw, (max-width: 1439px) 25vw, 328px" class="card-panduan-image">
                                                                <h4 class="card-panduan-title margin-mobile">{{$item['judul']}}</h4>
                                                                <div class="card-module desktop">
                                                                    <img src="{{ asset('images/landing-page/beranda/'.$item['gambar']) }}" loading="lazy" alt="" class="button-circle-image margin-right-12">
                                                                    <p class="card-panduan-body">10 Modules</p>
                                                                </div>
                                                                </div>
                                                                <p class="card-panduan-body padding-inner">
                                                                    {{$item['deskripsi']}}
                                                                </p>
                                                            </div>
                                                            <div class="cta-button-wrapper">
                                                                <div class="button-circle">
                                                                    <div class="button-circle-text">Baca Selengkapnya</div>
                                                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/629dcf25013a12b6d4aacf17_icon-arrow-right_rounded.svg" loading="lazy" alt="" class="button-circle-image">
                                                                </div>
                                                                <div class="button is-desktop-only">
                                                                    <div>baca selengkapnya</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="link-wrapper">
                        <a data-w-id="7cca9bae-a603-5291-8043-5b67b76a47a2" href="{{ route('teknis') }}" class="link-more">
                            <div class="link-more-text">Lihat Semua Teknis</div>
                            <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b1f58f3ff77c5c2e5cac03_icon-more-black.svg" loading="lazy" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" alt="" class="link-more-icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-kosakata" data-w-id="826d8ae9-aff4-35de-dcb8-b95a800821ff" class="section-kosakata">
        <div class="padding-vertical padding-xhuge">
            <div class="page-padding">
                <div class="container-large">
                    <div class="content-hz">
                        <img src="{{ asset('images/landing-page/beranda/'.$section_4['gambar']) }}" loading="lazy" alt="" class="section-image">
                        <div class="title-wrapper-hz">
                            <div id="our-programs" class="margin-bottom margin-medium">
                            <div class="text-align-center max-size">
                                <h2 data-w-id="826d8ae9-aff4-35de-dcb8-b95a80082205" class="our-programs-heading left-text">
                                    {{$section_4?$section_4['judul']:'' }}
                                </h2>
                            </div>
                            </div>
                            <div class="program_header-text mb">{!!$section_4?$section_4['deskripsi']:'' !!}</div>
                            <a data-w-id="826d8ae9-aff4-35de-dcb8-b95a80082220" href="{{ route('kosakata') }}" class="button hz w-inline-block">
                            <div class="link-more-text">Lihat kosakata</div>
                            <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b1f58f3ff77c5c2e5cac03_icon-more-black.svg" loading="lazy" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" alt="" class="link-more-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="key-embed w-embed w-script">
            <script>
            $(".card-tag").each(function() {
                console.log("masuk");
                if ($(this).text() == 'Product Management') {
                $(this).addClass("pm");
                } else if ($(this).text() == 'Digital Marketing') {
                $(this).addClass("dm");
                } else if ($(this).text() == 'Data Analytics') {
                $(this).addClass("da");
                }
            });
            </script>
        </div>
    </section>
@endsection
