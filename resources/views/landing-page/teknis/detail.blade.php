<!DOCTYPE html>
<html lang="en">
    <head>
        <style>.wf-force-outline-none[tabindex="-1"]:focus{outline:none;}</style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Razen Blog | Teknis | {{$konten->judul}}</title>
        <meta content="Kamu perlu membuat back end developer resume yang keren jika kamu tertarik meniti karir di bidang ini." name="description">
        <link href="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/css/revou.054f48d06.min.css" rel="stylesheet" type="text/css">
        <style>
            @media (max-width: 767px) and (min-width: 480px) {
                html.w-mod-js:not(.w-mod-ix)
                    [data-w-id="0a7d6aeb-80a1-4b6b-3cb3-16db43fe71e2"] {
                    display: none;
                    -webkit-transform: translate3d(80vw, 0, 0) scale3d(1, 1, 1) rotateX(0)
                    rotateY(0) rotateZ(0) skew(0, 0);
                    -moz-transform: translate3d(80vw, 0, 0) scale3d(1, 1, 1) rotateX(0)
                    rotateY(0) rotateZ(0) skew(0, 0);
                    -ms-transform: translate3d(80vw, 0, 0) scale3d(1, 1, 1) rotateX(0)
                    rotateY(0) rotateZ(0) skew(0, 0);
                    transform: translate3d(80vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                    rotateZ(0) skew(0, 0);
                    opacity: 0;
                }
            }
            @media (max-width: 479px) {
                html.w-mod-js:not(.w-mod-ix)
                    [data-w-id="0a7d6aeb-80a1-4b6b-3cb3-16db43fe71e2"] {
                    display: none;
                    -webkit-transform: translate3d(80vw, 0, 0) scale3d(1, 1, 1) rotateX(0)
                    rotateY(0) rotateZ(0) skew(0, 0);
                    -moz-transform: translate3d(80vw, 0, 0) scale3d(1, 1, 1) rotateX(0)
                    rotateY(0) rotateZ(0) skew(0, 0);
                    -ms-transform: translate3d(80vw, 0, 0) scale3d(1, 1, 1) rotateX(0)
                    rotateY(0) rotateZ(0) skew(0, 0);
                    transform: translate3d(80vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                    rotateZ(0) skew(0, 0);
                    opacity: 0;
                }
            }
        </style>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic%7CMontserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic%7CLato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic%7COswald:200,300,400,500,600,700%7CRed+Hat+Display:300,regular,500,600,700,800,900,300italic,italic,500italic,600italic,700italic,800italic,900italic" media="all">
        <script type="text/javascript">
            ! function(o, c) {
                var n = c.documentElement,
                    t = " w-mod-";
                n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
            }(window, document);
        </script>
        <link href="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/61af164800e38cd504c60bad_RevoU%20favicon.svg" rel="shortcut icon" type="image/x-icon">
        <link href="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c10e6c60bac_RevoU%20centered.svg" rel="apple-touch-icon">
        <style>
            * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            }
        </style>
        <script>
            function myFunction() {

                var parentofSelected = this.parentNode; // gives the parent DIV
                var anchorWrapper = parentofSelected.querySelector('.anchor-wrapper');
                var dropdownIcon = parentofSelected.querySelector('.menu-icon');

                    if(this.dataset.flag === "true"){
                        console.log(anchorWrapper);
                    anchorWrapper.style.display = 'block';
                    anchorWrapper.style.opacity = '1';
                    dropdownIcon.style.transform = "rotateZ(180deg)";
                        this.dataset.flag = "false";
                }else{
                        anchorWrapper.style.display = 'none';
                    anchorWrapper.style.opacity = '0';
                    dropdownIcon.style.transform = "rotateZ(0deg)";
                        this.dataset.flag = "true";
                }
            }
        </script>
        <style>@import url(https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap);</style>
        <link rel="stylesheet" href="{{ asset('landing-page\assets\css\profesi-detail.css') }}">
    </head>
    <body>
        @php
            use App\Models\Profil;
            use Carbon\Carbon;
            use App\Models\Konten;
            use App\Models\MasterKategoriKonten;
            use App\Models\PivotKontenTerkait;
            use App\Models\PivotSubJudulKonten;
            use App\Models\PivotProfilMediaSosial;
            use App\Models\MasterMediaSosial;

            $profil = Profil::first();

            $cek_pivot = PivotProfilMediaSosial::where('profil_id', $profil->id)->first();
            $pivot_profil_media_sosial = [];
            if($cek_pivot)
            {
                $pivot_profil_media_sosial = [
                    'status' => 'ada',
                    'pivot' => PivotProfilMediaSosial::where('profil_id', $profil->id)->get()
                ];
            } else {
                $pivot_profil_media_sosial = [
                    'status' => 'tidak ada',
                    'pivot' => ''
                ];
            }
        @endphp
        <div class="page-wrapper ov-visible">
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
            <main class="main-wrapper relative">
                <header data-w-id="abb5c8d9-0153-2ee1-b216-28a7d3e04325" class="hero-revoupedia">
                    <div data-collapse="medium" data-animation="default" data-duration="200" data-easing="ease-in-out" data-easing2="ease-in-out" data-doc-height="1" role="banner" class="nav_component transparent w-nav">
                        <div class="page-padding">
                            <div class="nav_container_left">
                                <a href="/" class="nav_logo-link w-nav-brand" aria-label="home">
                                    <img src="{{ asset('images/razen-blog/logo/'.$profil->logo) }}" loading="lazy" alt="" class="nav_logo new">
                                </a>
                                <nav role="navigation" class="nav_menu_left w-nav-menu">
                                    <a href="{{ route('beranda') }}" aria-current="page" class="nav-link-text text-black">Beranda</a>
                                    <a href="{{ route('berita') }}" aria-current="page" class="nav-link-text text-black">Berita</a>
                                    <a href="{{ route('profesi') }}" class="nav-link-text text-black">Profesi</a>
                                    <a href="{{ route('teknis') }}" class="nav-link-text text-black">Teknis</a>
                                    <a href="{{ route('kosakata') }}" class="nav-link-text hidden text-black">Kosakata</a>
                                </nav>
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
                    <div class="page-padding relative">
                        <div class="container-large-content">
                            <div class="padding-vertical-content">
                                <div class="hero-article_title">
                                    <div id="w-node-abb5c8d9-0153-2ee1-b216-28a7d3e04338-1b1218be" class="hero-details_wrapper">
                                        <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="breadcrumb">
                                            <a href="{{ route('beranda') }}" class="breadcrumb-link">Razen Blog</a>
                                            <a href="#" class="breadcrumb-link_div">/</a>
                                            <a href="{{ route('teknis') }}" class="breadcrumb-link">Teknis</a>
                                            <a href="#" class="breadcrumb-link_div">/</a>
                                            <a href="{{ route('teknis-detail', ['id'=>$konten->id]) }}" aria-current="page" class="breadcrumb-link w--current">{{$konten->judul}}</a>
                                        </div>
                                        <h1 style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="heading-content">{{$konten->judul}}</h1>
                                        <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="program-title_body margin-bottom">{{$konten->deskripsi_judul}}</div>
                                        <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="hero-details_summary">
                                            <img src="{{asset('images/razen-blog/foto/'.$konten->penulis->foto)}}" loading="lazy" alt="" class="card-author_image inline">
                                            <div class="details-wrapper">
                                                <a href="#" class="card-author_block inline w-inline-block">
                                                    <div class="card-author_title text-yellow">{{$konten->penulis->nama}}</div>
                                                </a>
                                                <div class="div-dots desktop-only"></div>
                                                <div class="date-wrapper">
                                                    <div class="card-author_title text-yellow">{{Carbon::parse($konten->tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y')}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="background-color:#8a5ba6" class="hero-overlay-bg"></div>
                                    </div>
                                    {{-- <div id="w-node-abb5c8d9-0153-2ee1-b216-28a7d3e04359-1b1218be" class="hero-block-empty card-cta">
                                        <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="hero-article_card">
                                        <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/63994f52302d2430b4887b3f_ICON%20FSSW-REVOUPEDIA.svg" loading="lazy" alt="" class="card-thumbnail_image bg">
                                        <div class="cta-heading-wrapper">
                                            <h4 class="card-panduan-title margin-bottom-2 inline">Mau Belajar</h4>
                                            <div>
                                            <h4 class="card-panduan-title margin-bottom-2 inline">Software Engineering</h4>
                                            <h4 class="card-panduan-title margin-bottom-2 inline">?</h4>
                                            </div>
                                        </div>
                                        <div class="program-title_body text-black">Di RevoU, tidak hanya teori, penerapan, serta career coaching. Kamu juga mendapatkan akses ke Community Hub dengan 6000+ member. Di sini, kamu akan selalu terupdate informasi seputar job openings, industry news, dan upskilling events!</div>
                                        <a href="https://revou.co/software-engineering/?lptype=karirfs&amp;lang=bedresume" class="button is-full-width w-button">DAFTAR FULL PROGRAM</a>
                                        <a href="https://revou.co/fundamental-course-software-engineering/?lptype=karirmc&amp;lang=bedresume" class="button-secondary is-full-width w-button">COBA DULU GRATIS</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-color:#8a5ba6" class="hero-element"></div>
                    <div class="hero-element-small">
                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62af735c91fe2c15d4953a5f_Line%20Dash.svg" loading="lazy" alt="">
                    </div>
                </header>
                <div class="section-article">
                    <div class="page-padding">
                        <div class="container-large overflow">
                        <div class="scroll-article_block">
                            <div class="scroll-article_progress" style="will-change: width, height; width: 0%;"></div>
                        </div>
                        <div class="padding-vertical relative">
                            <div class="article-wrapper">
                                <div id="w-node-_0a7d6aeb-80a1-4b6b-3cb3-16db43fe71e2-1b1218be" data-w-id="0a7d6aeb-80a1-4b6b-3cb3-16db43fe71e2" class="article-menu_wrapper">
                                    <div class="menu-list">
                                    <div class="collection-wrapper w-dyn-list">
                                        <div fs-cmsnest-element="list" role="list" class="collection-auto w-dyn-items">
                                        <div role="listitem" class="collection-item-menu w-dyn-item">
                                            <div class="menu-block">
                                            <div data-flag="false" class="menu-l2" id="parent-id-{{$konten->id}}">
                                                <h4 class="menu-title">Daftar</h4>
                                                <div class="menu-non_active_state w-condition-invisible"></div>
                                                <div class="menu-active_state"></div>
                                                <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b6cef938ce8f501eeba433_icon%20dropdown.svg" loading="lazy" alt="" class="menu-icon" style="transform: rotateZ(180deg);">
                                                <div class="hidden w-embed w-script">
                                                    <div id="child-id-{{$konten->id}}"></div>
                                                    <script>
                                                        var scrDiv = document.getElementById("child-id-{{$konten->id}}").parentElement;
                                                        var menuL2 = scrDiv.parentElement;
                                                        menuL2.id = "parent-id-{{$konten->id}}";
                                                        var parentId = "parent-id-{{$konten->id}}";
                                                        document.getElementById("" + parentId).addEventListener("click", myFunction);
                                                        //console.log(menuL2);
                                                        var currentTopic = document.getElementsByClassName('menu-active_state');
                                                        var i;
                                                        for (i = 0; i < currentTopic.length; i++) {
                                                        if (currentTopic[i].classList.contains('w-condition-invisible')) {
                                                            var menuL2 = currentTopic[i].parentElement;
                                                            menuL2.dataset.flag = "true";
                                                        }
                                                        //console.log(menuL2);
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="anchor-wrapper">
                                                <div fs-cmsnest-collection="articles" class="content-list"></div>
                                            </div>
                                            <a href="{{route('teknis-detail', ['id' => $konten->id])}}" class="hidden">Text Link</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <a data-w-id="0a7d6aeb-80a1-4b6b-3cb3-16db43fe71e3" href="#" class="close-menu w-inline-block">
                                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62af3bf7cd95df46be24dd29_icon_close.svg" loading="lazy" alt="">
                                    </a>
                                    <div class="w-dyn-list">
                                        <div fs-cmsnest-collection="articles" role="list" class="w-dyn-items">
                                            <div role="listitem" class="collecton-item-link w-dyn-item">
                                                <a href="{{ route('teknis-detail', ['id'=>$konten->id]) }}" aria-current="page" class="menu-sub_outline w-inline-block w--current">
                                                    <div class="menu-sub_non_active w-condition-invisible"></div>
                                                    <div class="menu-sub_active"></div>
                                                    <div class="menu-sub_text">{{$konten->judul}}</div>
                                                </a>
                                                <div id="error-1" class="outline-embed w-embed">
                                                    <div id="konten-sub-judul-{{$konten->id}}" class="konten-sub-judul-{{$konten->id}}">
                                                        {{-- @foreach ($konten->pivot_sub_judul_konten as $sub_judul)
                                                            <a class="anchor-link toc-h2 @if($loop->first) active @endif" href="#sub-judul-{{$sub_judul->id}}">{{$sub_judul->judul}}</a>
                                                        @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach ($konten->child_pivot_konten_terkait as $konten_terkait)
                                                <div role="listitem" class="collecton-item-link w-dyn-item">
                                                    <a href="{{ route('teknis-detail', ['id'=>$konten_terkait->child_id]) }}" class="menu-sub_outline w-inline-block">
                                                        <div class="menu-sub_non_active"></div>
                                                        <div class="menu-sub_active w-condition-invisible"></div>
                                                        <div class="menu-sub_text">{{$konten_terkait->child->judul}}</div>
                                                    </a>
                                                    <div id="error-1" class="outline-embed w-embed">
                                                        <div id="konten-sub-judul-{{$konten_terkait->child_id}}" class="konten-sub-judul-{{$konten_terkait->child_id}}"></div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="article-content_wrapper">
                                    <div class="content-overview">
                                        <h2 class="heading-overview">Overview</h2>
                                    </div>
                                    <div id="content" fs-toc-element="content" fs-richtext-element="rich-text" class="text-rich-text-career w-richtext">
                                    {!! $konten->deskripsi_overview !!}
                                    @foreach ($konten->pivot_sub_judul_konten as $sub_judul)
                                        <div id="sub-judul-{{$sub_judul->id}}">
                                            <h2>{{$sub_judul->judul}}</h2>
                                            {!! $sub_judul->deskripsi !!}
                                        </div>
                                    @endforeach

                                    {{-- Batas --}}
                                    <a href="#" class="author-mini-card w-inline-block">
                                        <img src="{{ asset('images/razen-blog/foto/'.$konten->penulis->foto) }}" loading="lazy" alt="" class="author-card-image">
                                        <div class="cta-text-wrapper">
                                            <div class="card-author_title text-dark underlined">{{$konten->penulis->nama}}</div>
                                            {{-- <div class="program-title_body text-dark">Meet Maria, a content writer and digital marketer with a keen interest in education and technology! She is passionate about creating impactful content and developing successful marketing campaigns for businesses and organizations. When she's not writing or working on marketing campaigns, she loves to play the piano and watch movies.</div> --}}
                                        </div>
                                    </a>
                                    <h2 class="heading-overview">Artikel Lainnya</h2>
                                    <div class="articles-suggestions">
                                        @php
                                            $next_konten = $konten->child_pivot_konten_terkait->random();
                                        @endphp
                                        <a href="{{ route('teknis-detail', ['id'=>$next_konten->child_id]) }}" class="articles-suggestion w-inline-block">
                                            <div class="article-link-wrapper margin-bottom">
                                                <div>Next </div>
                                                <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b22d583188664a8a92b940_icon-arrow-grey.svg" loading="lazy" alt="" class="icon-link-article next-article">
                                            </div>
                                            <div class="article-suggestion-details">
                                                <img src="{{ asset('images/razen-blog/konten/'.$next_konten->child->gambar_mini) }}" class="article-thumbnail">
                                                <div class="author-details-wrapper">
                                                    <div class="card-author_title text-dark no-margin">{{$next_konten->child->judul}} </div>
                                                    <div class="program-title_body text-dark is_desktop">{{$next_konten->child->deskripsi_judul}}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cta-middle-block">
                                    <div class="cta-block-hid"></div>
                                    </div>
                                </div>
                                <a data-w-id="0a7d6aeb-80a1-4b6b-3cb3-16db43fe722c" href="#" class="content-menu-wrapper w-inline-block" style="will-change: opacity; opacity: 0;">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b055cd3263c712c0a095c3_icon-menu.svg" loading="lazy" alt="" class="icon-menu">
                                    <div>Menu</div>
                                </a>
                                <div id="error-here" class="sidebar-embed w-node-fcdfe379-6ce2-0b84-7c7d-773af5413e4d-1b1218be w-embed w-script">
                                    <script>
                                    var currentTopic = document.getElementsByClassName('menu-active_state');
                                    var i;
                                    for (i = 0; i < currentTopic.length; i++) {
                                        if (currentTopic[i].classList.contains('w-condition-invisible')) {
                                        var menuL2 = currentTopic[i].parentElement;
                                        var menuL1 = menuL2.parentElement;
                                        var box = menuL1.querySelector('.anchor-wrapper');
                                        box.style.display = 'none';
                                        box.style.opacity = '0';
                                        } else {
                                        var menuL2active = currentTopic[i].parentElement;
                                        var dropdownIconActive = menuL2active.querySelector('.menu-icon');
                                        dropdownIconActive.style.transform = "rotateZ(180deg)";
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div data-w-id="5f8b3506-aedd-13b2-a163-b62cbf9a2754" class="section-cta-panduan hide-padding">
                    <div class="padding-vertical padding-xxlarge">
                        <div class="page-padding">
                            <div class="container-large">
                                <div class="cta_component_grid">
                                    <img src="{{ asset('images/razen-blog/konten/'.$konten->gambar_mini) }}" loading="lazy" style="transform: translate3d(-60px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 100; transform-style: preserve-3d;" alt="" sizes="(max-width: 767px) 200px, 300px" class="cta-main-image">
                                    <div class="text-align-center align-left">
                                        <div style="transform: translate3d(60px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 100; transform-style: preserve-3d;" class="cta-heading-wrapper">
                                            <h2 class="cta_heading--title margin-right">
                                                <strong>Mulai karirmu dalam</strong>
                                            </h2>
                                            <h2 class="cta_heading--title center">Software Engineering</h2>
                                        </div>
                                        <div style="transform: translate3d(60px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 100; transform-style: preserve-3d;" class="program_header-text margin-small-left">Di RevoU, tidak hanya teori, penerapan, serta career coaching. Kamu juga mendapatkan akses ke Community Hub dengan 6000+ member. Di sini, kamu akan selalu terupdate informasi seputar job openings, industry news, dan upskilling events!</div>
                                        <div class="cta-block-hz">
                                            <a href="https://revou.co/software-engineering/?lptype=karirfs&amp;lang=bedresume" class="button-tertiary-new mr w-button" style="transform: translate3d(60px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 100; margin-right: 5rem;">DAFTAR FULL PROGRAM</a>
                                            <a href="https://revou.co/fundamental-course-software-engineering/?lptype=karirmc&amp;lang=bedresume" class="button-secondary w-button">COBA DULU GRATIS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="anchor-link hidden">Text Link</a>
                <a href="#" class="toc-link hidden">Text Link</a>
            </main>
            <div class="footer">
                <div class="page-padding">
                    <div class="container-large">
                        <div class="padding-vertical padding-large is-custom-padding-bottom">
                            <div class="footer_component">
                                <div class="margin-bottom margin-large new">
                                    <div class="footer2_content">
                                        <div class="footer2_content-left">
                                            <a href="/" class="footer_logo-link-block w-inline-block">
                                                <img src="{{ asset('images/razen-blog/logo/'.$profil->logo) }}" loading="lazy" alt="" class="foote_logo">
                                            </a>
                                        </div>
                                        <div id="w-node-_5ec2433e-88a4-d583-414b-4737dfaf425f-d15d6b96" class="footer-content-block">
                                            <div class="footer2_content-right _5-column mb">
                                                <div class="footer2_links-col">
                                                    <div class="text-weight-bold text-style-allcaps">Halaman</div>
                                                    <div class="footer2_links-list">
                                                        <a id="apply13" href="{{ route('beranda') }}" class="footer2_link-2">Beranda</a>
                                                        <a id="apply14" href="{{ route('berita') }}" class="footer2_link-2">Berita</a>
                                                        <a id="apply15" href="{{ route('profesi') }}" class="footer2_link-2">Profesi</a>
                                                        <a id="apply16" href="{{ route('teknis') }}" class="footer2_link-2">Teknis</a>
                                                        <a id="apply16" href="{{ route('kosakata') }}" class="footer2_link-2">Kosakata</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_bottom-row">
                                    <div class="footer_bottom-left-column">
                                        <div class="footer_copyright">© {{Carbon::now()->year}} {{$profil->pt}}. <br>All Rights Reserved </div>
                                    </div>
                                    <div class="footer_bottom-center-column">
                                        <div class="footer_email text-align-center mobile-text-right">More Questions? Email us at <br>
                                            <a href="mailto:{{$profil->email}}">
                                                <span class="footer_email-span">{{$profil->email}}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer_bottom-right-column">
                                        @if ($pivot_profil_media_sosial['status'] == 'ada')
                                            @foreach ($pivot_profil_media_sosial['pivot'] as $item)
                                                <a href="{{$item->tautan}}" target="_blank" class="footer_social-link-block w-inline-block">
                                                    <img src="{{ asset('images/razen-blog/ikon/'.$item->media_sosial->kode_ikon) }}" height="30rem" loading="lazy" alt="" class="footer_logo-instagram">
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" id="">
            (function() {
                var b = "undefined",
                a = "input[name\x3d'fields[niche_vertical_program]']";
                if (a = document.querySelector(a)) a.value = b
            })();
        </script>
        <script type="text/javascript" id="">
            (function() {
                var b = "undefined",
                a = "input[name\x3d'fields[source]']";
                if (a = document.querySelector(a)) a.value = b
            })();
        </script>
        <script type="text/javascript" id="">
            (function() {
                var b = "undefined",
                a = "input[name\x3d'fields[campaign_category]']";
                if (a = document.querySelector(a)) a.value = b
            })();
        </script>
        <script type="text/javascript" id="">
            (function() {
                var b = "undefined",
                a = "input[name\x3d'fields[referee]']";
                if (a = document.querySelector(a)) a.value = b
            })();
        </script>
        <script type="text/javascript" id="">
            (function() {
                var b = "undefined",
                a = "input[name\x3d'fields[targeting]']";
                if (a = document.querySelector(a)) a.value = b
            })();
        </script>
        <script type="text/javascript" id="">
            (function() {
                var b = "undefined",
                a = "input[name\x3d'fields[lang]']";
                if (a = document.querySelector(a)) a.value = b
            })();
        </script>
        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=61af164800e38c4f53c60b4e" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/js/revou.101c6d1c5.js" type="text/javascript"></script>
        <!-- [Attributes by Finsweet] Powerful Rich Text -->
        <script defer="" src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-richtext@1/richtext.js"></script>
        <script async="" src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsnest@1/cmsnest.js"></script>
        <script src="https://tools.refokus.io/rich-text-enhancer/bundle.v1.0.0.js"></script>
        <script>
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                const id = entry.target.getAttribute("id");
                if (entry.isIntersecting) {
                    document.querySelectorAll(".active").forEach((z) => {
                    z.classList.remove("active")
                    });
                    document.querySelector(`a[href="#${id}"]`).classList.add("active");
                }
                });
            }, {
                rootMargin: '0px 0px -75% 0px'
            });
        </script>
        <script>
            document.getElementById("content").querySelectorAll("h2").forEach(function(heading, i) { // runs a function for all headings inside your rich text element
                observer.observe(heading);
                let str = heading.innerHTML; // adds section titles to slugs
                str = str.replace(/\s+/g, '-').replace(/[°&\/\\#,+()$~%.'":;*?<>{}]/g, "").toLowerCase(); // replaces spaces with hyphens, removes special characters and extra spaces from the headings, and applies lowercase in slugs
                heading.setAttribute("id", str); // gives each heading a unique id
                const item = document.createElement("a"); // creates an anchor element called "item" for each heading
                item.innerHTML = heading.innerHTML; // gives each item the text of the corresponding heading
                ("h2").split(",").forEach(function(x) { // runs a function for each item in your headings list
                    if (heading.tagName.toLowerCase() == x) {
                        item.classList.add("anchor-link", "toc-" + x); // gives each item the correct class
                    }
                });
                item.setAttribute("href", "#" + str); // gives each item the correct anchor link
                document.querySelector("#konten-sub-judul-{{$konten->id}}").appendChild(item); // places each item inside the Table of Contents div
            });
        </script>
    </body>
    <iframe id="__JSBridgeIframe_1.0__" title="jsbridge___JSBridgeIframe_1.0__" style="display: none;"></iframe>
    <iframe id="__JSBridgeIframe_SetResult_1.0__" title="jsbridge___JSBridgeIframe_SetResult_1.0__" style="display: none;"></iframe>
    <iframe id="__JSBridgeIframe__" title="jsbridge___JSBridgeIframe__" style="display: none;"></iframe>
    <iframe id="__JSBridgeIframe_SetResult__" title="jsbridge___JSBridgeIframe_SetResult__" style="display: none;"></iframe>
</html>
