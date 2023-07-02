@extends('landing-page.layouts.app')
@section('title', 'Kosakata | Razen Blog')

@section('header')
    @php
        use App\Models\LandingPageKosakata;
        use App\Models\Konten;
        use App\Models\MasterKategoriKonten;
        use App\Models\PivotKontenTerkait;
        use App\Models\PivotSubJudulKonten;
        use App\Models\PivotProfilMediaSosial;
        use App\Models\MasterMediaSosial;

        $beranda = LandingPageKosakata::first();

        $section_1 = json_decode($beranda->section_1, true);
    @endphp
    <header id="top" data-w-id="f7a82cd5-7ab9-54ac-433f-6597aad7edab" class="hero-keyword">
        <div data-collapse="medium" data-animation="default" data-duration="200" data-easing="ease-in-out" data-easing2="ease-in-out" data-doc-height="1" role="banner" class="nav_component transparent w-nav">
            <div class="page-padding">
                <div class="nav_container_left">
                    @include('landing-page.layouts.nav-black')
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
        <div class="page-padding-keyword">
            <div class="container-large">
                <div class="padding-key-relative">
                    <div class="header-keyword-block">
                        <div class="title-block-key">
                            <div class="title-block-wrapper">
                                <h1 style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="program_header_heading margin-bottom_1">{{$section_1?$section_1['judul']:'' }}</h1>
                                <div style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="program-title_copy">{{$section_1?$section_1['deskripsi']:'' }}</div>
                            </div>
                            <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62af357852fa1be72dd6ea45_hero-icon-mobile.svg" loading="lazy" alt="" class="hero-icon-mobile hidden">
                        </div>
                        <div class="filter-key-block">
                            <div class="filter-form-key w-form">
                                <div>SEMUA TOPIK</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    @php
        $abjads = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm','n', 'o', 'p', 'q', 'r', 's', 't','u', 'v', 'w','x','y','z'];
    @endphp
    <div class="keyword-group-list">
        <div class="page-padding-key">
            <div class="container-key">
                <div class="collection-list-wrapper w-dyn-list">
                    <div role="list" class="collection-list-alpha w-dyn-items">
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>A</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>A</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#a" class="key-tab w--current"> A </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>B</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>B</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#b" class="key-tab"> B </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>C</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>C</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#c" class="key-tab"> C </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>D</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>D</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#d" class="key-tab"> D </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>E</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>E</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#e" class="key-tab"> E </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>F</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>F</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#f" class="key-tab"> F </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>G</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>G</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#g" class="key-tab"> G </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>H</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>H</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#h" class="key-tab"> H </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>I</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>I</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#i" class="key-tab"> I </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>J</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>J</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#j" class="key-tab"> J </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>K</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>K</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#k" class="key-tab"> K </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>L</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>L</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#l" class="key-tab"> L </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>M</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>M</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#m" class="key-tab"> M </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>N</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>N</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#n" class="key-tab"> N </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>O</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>O</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#o" class="key-tab"> O </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>P</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>P</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#p" class="key-tab"> P </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>Q</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>Q</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#q" class="key-tab"> Q </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>R</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>R</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#r" class="key-tab"> R </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>S</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>S</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#s" class="key-tab"> S </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>T</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>T</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#t" class="key-tab"> T </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>U</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>U</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#u" class="key-tab"> U </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>V</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>V</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#v" class="key-tab"> V </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>W</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>W</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#w" class="key-tab"> W </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>X</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>X</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#x" class="key-tab"> X </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block w-condition-invisible">
                                <div>Y</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>Y</div>
                            </a>
                            <div class="keyword-emb w-embed">
                                <div>
                                <a href="#y" class="key-tab"> Y </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                        <div role="listitem" class="collection-item-key w-dyn-item" id="">
                            <a href="#" class="key-tab empty w-inline-block">
                                <div>Z</div>
                            </a>
                            <a href="#" class="key-tab hidden w-inline-block">
                                <div>Z</div>
                            </a>
                            <div class="keyword-emb w-condition-invisible w-embed">
                                <div>
                                <a href="#z" class="key-tab"> Z </a>
                                </div>
                                <style>
                                .key-tab:hover {
                                    background-color: #FFDE3D;
                                }

                                .key-tab:current {
                                    background-color: #FFDE3D;
                                }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-w-id="2af38347-edb1-7d44-bd49-a3492ac26d38" class="mini-pop">
            <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b6cef938ce8f501eeba433_icon%20dropdown.svg" loading="lazy" alt="" class="icon-mini-pop">
        </div>
    </div>

    <section class="section-keyword">
        <div class="padding-wide">
            <div class="page-padding">
                <div class="container-large">
                    <div class="kosakata-list">
                        <div class="collection-list-wrapper w-dyn-list">
                            <div fs-cmsnest-element="list" role="list" class="collection-list-keyword w-dyn-items">
                                @foreach ($abjads as $abjad)
                                    <div role="listitem" class="collection-item-keyword w-dyn-item" id="{{$abjad}}">
                                        <div class="keyword-group">
                                            <h2 class="heading-alphabet margin-bottom">{{strtoupper($abjad)}}</h2>
                                            <a href="#" class="hidden-link w-inline-block"></a>
                                            <div class="collection-list-wrapper w-dyn-list" style="">
                                                <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                                    @php
                                                        $kontens = Konten::where('judul', 'LIKE', $abjad.'%')->get();
                                                    @endphp
                                                    @foreach ($kontens as $konten)
                                                        <div role="listitem" class="w-dyn-item" id="">
                                                            <a href="{{ route('kosakata-detail', ['id'=>$konten->id]) }}" class="keyword-item w-inline-block">
                                                                <h4 fs-cmsfilter-field="title" class="card-panduan-title">{{$konten->judul}}</h4>
                                                                <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">{{$konten->deskripsi_judul}} </p>
                                                                <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">{{$konten->kategori_konten->nama}}</p>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="idtext">{{$abjad}}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
