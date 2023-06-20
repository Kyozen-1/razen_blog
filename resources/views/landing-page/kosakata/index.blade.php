@extends('landing-page.layouts.app')
@section('title', 'Kosakata | Razen Blog')

@section('header')
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
                        <h1 style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="program_header_heading margin-bottom_1">Kosakata</h1>
                        <div style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="program-title_copy">Kuasai definisi dan contoh dari istilah-istilah digital marketing, data analytics, product management, dan software engineering di sini!</div>
                    </div>
                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62af357852fa1be72dd6ea45_hero-icon-mobile.svg" loading="lazy" alt="" class="hero-icon-mobile hidden">
                    </div>
                    <div class="filter-key-block">
                    <div class="filter-form-key w-form">
                        <form id="wf-form-select-topik" name="wf-form-select-topik" data-name="select-topik" method="get" fs-cmsfilter-element="filters" class="form-key" aria-label="select-topik">
                        <div data-hover="false" data-delay="0" fs-selectcustom-element="dropdown" class="drop-mb w-dropdown">
                            <div class="dropdown-toggle w-dropdown-toggle" id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="listbox" aria-expanded="false" role="button" tabindex="0">
                            <div class="w-icon-dropdown-toggle" aria-hidden="true"></div>
                            <div>SEMUA TOPIK</div>
                            </div>
                            <nav class="dropdown-list w-dropdown-list" id="w-dropdown-list-0" aria-labelledby="w-dropdown-toggle-0" role="listbox" aria-multiselectable="false">
                            <select id="TOPIK" name="TOPIK" data-name="TOPIK" filter-by="*" class="select-field w-select">
                                <option value="*">SEMUA TOPIK</option>
                                <option value="PRODUCT MANAGEMENT">PRODUCT MANAGEMENT</option>
                                <option value="DATA ANALYTICS">DATA ANALYTICS</option>
                                <option value="DIGITAL MARKETING">DIGITAL MARKETING</option>
                                <option value="SOFTWARE ENGINEERING">SOFTWARE ENGINEERING</option>
                            </select>
                            <a href="#" class="dropdown-filter w-dropdown-link w--current" tabindex="0" role="option" aria-selected="true">SEMUA TOPIK</a>
                            <a href="#" class="dropdown-filter w-dropdown-link" tabindex="-1" role="option" aria-selected="false">PRODUCT MANAGEMENT</a>
                            <a href="#" class="dropdown-filter w-dropdown-link" tabindex="-1" role="option" aria-selected="false">DATA ANALYTICS</a>
                            <a href="#" class="dropdown-filter w-dropdown-link" tabindex="-1" role="option" aria-selected="false">DIGITAL MARKETING</a>
                            <a href="#" class="dropdown-filter w-dropdown-link" tabindex="-1" role="option" aria-selected="false">SOFTWARE ENGINEERING</a>
                            </nav>
                        </div>
                        <div class="form-input-key">
                            <input type="text" class="form-input-key-search w-input" maxlength="256" name="Input-Search" filter-by="*" data-name="Input Search" placeholder="Cari kata baru di sini" id="Input-Search-3">
                            <img loading="lazy" src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a607d5ff170835c2c1819e_icon-search.svg" alt="" class="form-search-right">
                        </div>
                        </form>
                        <div class="w-form-done" tabindex="-1" role="region" aria-label="select-topik success">
                        <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail" tabindex="-1" role="region" aria-label="select-topik failure">
                        <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    </div>
                    <div class="empty-message">
                    <div>Kosakata tidak ditemukan.</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
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
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="a">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">A</h2>
                                    <a href="/kosakata-group/a" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/a-b-testing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">A/B Testing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">A/B testing adalah strategi marketing yang membandingkan dua versi konten berbeda, yaitu konten A dan konten B. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/api" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">API</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Application programming interface atau API adalah mekanisme yang membuat dua program software bisa terhubung dan berinteraksi satu sama lain menggunakan sekumpulan protokol/aturan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/activity-diagram" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Activity Diagram</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Activity diagram adalah diagram yang menunjukkan aliran dari satu aktivitas ke aktivitas lainnya dalam suatu sistem atau proses.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/adsense" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">AdSense</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">AdSense adalah bagian dari program Google Ads yang membayar pemilik situs website untuk setiap click dari iklan Google yang ada di sana. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/advertising" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Advertising</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Advertising adalah teknik marketing yang bertujuan untuk mempromosikan atau menjual suatu produk, layanan, atau ide kepada audiens.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/advertorial" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Advertorial</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Advertorial adalah iklan berbayar yang ditulis agar informasinya terlihat dan dibaca seperti karya jurnalistik atau konten editorial independen.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/affiliate-marketing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Affiliate Marketing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Affiliate marketing adalah model advertising di mana perusahaan membayar pihak ketiga untuk menghasilkan traffic dan membawa audiens ke produk perusahaan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/agency" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Agency</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Agency adalah suatu bisnis, organisasi, atau firma yang menyediakan jasa tertentu.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/agile-for-software-development" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Agile</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Agile software development adalah jenis metodologi pengembangan software yang membantu tim bekerja lebih cepat dengan cara membagi proyek menjadi bagian-bagian kecil dan bisa berjalan secara paralel.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#319cff;color:#319cff" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/algoritma" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Algoritma</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Algoritma adalah urutan langkah logis yang disusun secara sistematis dan digunakan untuk memecahkan masalah.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/algoritma-apriori" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Algoritma Apriori</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Algoritma apriori adalah algoritma yang digunakan untuk mengetahui hubungan atau asosiasi antara satu objek/item dengan objek lain dalam suatu dataset.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/algoritma-naive-bayes" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Algoritma Naive Bayes</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Algoritma Naive Bayes adalah kumpulan algoritma pembeda berdasarkan teorema Bayes dengan prinsip probabilitas bersyarat.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/analisis-deskriptif" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Analisis Deskriptif</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Analisis deskriptif adalah jenis analisis data yang digunakan untuk menggambarkan, menampilkan, dan meringkas sekumpulan data.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/analisis-inferensial" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Analisis Inferensial</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Statistik inferensial atau analisis inferensial adalah metode yang digunakan untuk membuat kesimpulan berdasarkan sampel yang merepresentasikan populasi.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag">Data Analysis</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/analisis-multivariat" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Analisis Multivariat</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Analisis multivariat merupakan metode menganalisis hubungan antara lebih dari dua variabel dalam kelompok data yang diuji. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/analisis-swot" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Analisis SWOT</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Analisis SWOT adalah teknik atau kerangka kerja untuk mengidentifikasi kekuatan, kelemahan, potensi, dan risiko guna mengembangkan rencana strategis suatu bisnis.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/arduino" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Arduino</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Arduino adalah sebuah alat yang digunakan untuk mengontrol perangkat elektronik</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/artificial-intelligence" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Artificial Intelligence</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Kecerdasan buatan atau artificial intelligence adalah sistem dalam mesin yang meniru cara manusia berpikir dan bertindak (kecerdasan manusia).</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/augmented-reality" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Augmented Reality</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Augmented Reality (AR) adalah teknologi 3D interaktif yang menggabungkan tampilan dunia nyata dengan elemen digital yang dihasilkan komputer.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">a</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="b">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">B</h2>
                                    <a href="/kosakata-group/b" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/b2b-marketing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">B2B Marketing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">B2B marketing adalah bentuk pemasaran yang digunakan suatu perusahaan dalam menjual produk atau layanannya ke perusahaan atau organisasi lain.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/backend" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Backend</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Backend adalah sistem yang menjadi bagian dari server sehingga tidak terlihat dan tidak dapat diakses oleh pengguna seperti halnya front end.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/backlink" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Backlink</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Backlink adalah link pada suatu website yang mengarah ke website lain.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/bahasa-c" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bahasa C</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bahasa C adalah bahasa pemrograman general-purpose yang digunakan developer untuk membuat dan memelihara sistem aplikasi.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/bandwidth" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bandwidth</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bandwidth adalah kecepatan maksimum data yang bisa ditransfer dalam waktu tertentu melalui koneksi jaringan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/big-data" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Big Data</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Big data adalah kumpulan data yang jumlahnya besar dan kompleks. Data-data ini tumbuh dengan kecepatan yang terus meningkat.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/bitly" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bitly</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bitly adalah platform untuk memendekkan URL dan manajemen link.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/black-box-testing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Black Box Testing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Black box testing adalah proses menguji fungsi perangkat lunak (software) atau aplikasi dari sudut pandang pengguna, tanpa mengetahui struktur internal atau desain struktur tersebut. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/black-hat-seo" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Black Hat SEO</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Black Hat SEO adalah salah satu strategi SEO yang melanggar pedoman search engine sehingga berisiko membuat website dihapus dari halaman pencarian.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/blogging" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Blogging</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Blogging adalah proses membuat konten yang nantinya akan dipublikasikan secara berkala di blog.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/bootstrap" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bootstrap</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bootstrap adalah kerangka atau framework untuk membuat ukuran dan orientasi tampilan situs sesuai dengan perangkat yang digunakan user, misalnya laptop atau smartphone.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/bot" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bot</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bot adalah program software yang dirancang untuk melakukan tugas tertentu dengan mensimulasikan aktivitas manusia.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/brand-activation" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Activation</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand activation adalah salah satu strategi marketing yang memberikan pengalaman unik dan berkesan kepada pelanggan dalam bentuk campaign, event, maupun interaksi lain.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/brand-ambassador" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Ambassador</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand ambassador adalah orang yang ditunjuk oleh perusahaan untuk mewakili suatu produk atau layanan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/brand-awareness" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Awareness</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand awareness adalah istilah marketing yang menggambarkan sejauh mana konsumen mengenali suatu produk atau merek.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/brand-equity" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Equity</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand equity adalah nilai dari suatu brand yang dibangun berdasarkan persepsi pelanggan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/brand-extension" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Extension</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand extension adalah strategi marketing di mana perusahaan menggunakan nama merek yang sudah terkenal untuk merilis dan memperkenalkan produk baru.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/branding" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Branding</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Branding adalah proses menciptakan identitas suatu perusahaan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/breadcrumbs" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Breadcrumbs</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Breadcrumbs adalah salah satu alat navigasi pada website untuk membantu pengunjung mengetahui kategori halaman apa yang sedang mereka kunjungi.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/broken-link" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Broken Link</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Broken link adalah hyperlink ke suatu halaman website atau sumber yang tidak lagi valid, dan biasanya akan muncul pesan yang menandakan error ketika di-klik.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/browser" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Browser</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Browser adalah program software yang memungkinkan komputer untuk mencari dan menemukan informasi di internet.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/bug" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bug</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bug adalah kesalahan atau penulisan kode program yang tidak tepat sehingga menyebabkan program tak bisa berfungsi dengan baik.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/buyer-persona" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Buyer Persona</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Buyer persona adalah representasi semi-fiksi dari pelanggan ideal yang diciptakan berdasarkan market research dan data riil terkait pelanggan yang sudah ada.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">b</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="c">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">C</h2>
                                    <a href="/kosakata-group/c" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/ci-cd" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">CI/CD</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Continuous Integration dan Continuous Delivery/Deployment atau disingkat CI/CD adalah metode dalam software engineering untuk mengotomatiskan pembuatan, pengujian, dan penerapan software.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cms" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">CMS</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Content Management System (CMS) adalah software yang membantu membuat dan mengelola website</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cmyk" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">CMYK</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">CMYK (Cyan Magenta Yellow Black) adalah sistem warna yang terdiri dari cyan, magenta, kuning, dan hitam.&nbsp;Sistem ini penting karena dapat menciptakan warna yang akurat dan konsisten pada berbagai media cetak.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cpa" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">CPA</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom"> CPA adalah metrik perhitungan biaya yang dikeluarkan untuk setiap acquisition atau akuisisi.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cpc" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">CPC (Cost Per Click)</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">CPC adalah singkatan dari cost per click dan merupakan metrik penghitungan biaya yang dikenakan pemilik website kepada pengiklan untuk setiap click.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cpm" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">CPM</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">CPM adalah metrik penghitungan biaya untuk setiap 1.000 impressions yang didapatkan iklan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/crm-adalah" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">CRM</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">CRM adalah singkatan dari Customer Relationship Management, merupakan kombinasi sistem, teknologi, dan strategi yang digunakan perusahaan untuk mengatur dan menganalisis data pelanggan sepanjang customer lifecycle.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/css" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">CSS</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom"> CSS adalah singkatan Cascading Style Sheets dan merupakan aturan penyajian dokumen HTML atau XML. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cta-call-to-action" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">CTA (Call to Action)</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Call to action atau biasa disingkat CTA adalah istilah marketing untuk mengajak target audiens mengambil tindakan yang diinginkan bisnis.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cache" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cache</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cache adalah ruang penyimpanan sementara di dalam computing environment yang membantu website loading lebih cepat.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/campaign" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Campaign</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Campaign adalah segala upaya terorganisir untuk mencapai tujuan bisnis secara spesifik, misal meningkatkan brand awareness suatu produk atau mengumpulkan feedback dari konsumen.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/canvassing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Canvassing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Canvassing adalah aktivitas menghubungi calon pelanggan yang sebelumnya tidak memiliki interaksi atau hubungan apapun dengan suatu brand atau perusahaan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/carousel" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Carousel</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Carousel adalah fitur di media sosial yang memungkinkan pengguna mengunggah beberapa foto atau video dalam satu postingan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cashback" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cashback</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cashback adalah reward yang diberikan kepada pelanggan saat melakukan pembelian dengan menggunakan metode pembayaran tertentu.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/chat-gpt" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Chat GPT</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Chat GPT adalah chatbot AI yang dikembangkan oleh OpenAI. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/chatbot" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Chatbot</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Chatbot adalah software AI yang dapat berinteraksi dengan manusia melalui teks atau suara layaknya manusia sungguhan.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/churn-rate" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Churn Rate</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Churn rate adalah metrik yang mengukur persentase kehilangan pelanggan, seperti berhentinya pelanggan membeli atau berlangganan produk.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/class-diagram" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Class Diagram</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Class diagram adalah salah satu diagram UML yang memperlihatkan struktur sistem seperti kelas, atribut, metode, dan hubungan antar kelas.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/clickbait" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Clickbait</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Clickbait adalah judul sensasional yang mendorong audiens untuk mengeklik tautan ke artikel, gambar, maupun video.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/client-server" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Client Server</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Client server adalah sebuah sistem di mana sebuah komputer atau perangkat yang bertindak sebagai server menyediakan layanan ke perangkat lain yang bertindak sebagai client.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag">Data Analysis</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cloud-computing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cloud Computing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cloud computing adalah pengiriman layanan komputasi melalui internet – termasuk jaringan, server, database, software, intelligence, dan analytics. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/coding" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Coding</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Coding adalah kegiatan mengubah ide, solusi, dan instruksi ke dalam bahasa yang bisa dipahami komputer.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cohort-analysis" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cohort Analysis</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cohort analysis adalah teknik yang digunakan untuk menganalisis dan memahami perilaku sekelompok individu dari waktu ke waktu.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/competitive-advantage" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Competitive Advantage</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Competitive advantage adalah atribut yang membedakan suatu brand dengan yang lainnya untuk membuat brand tersebut terlihat lebih unggul di tengah market.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/computational-thinking" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Computational Thinking</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Computational thinking adalah metode pemecahan masalah yang mereplikasi proses seorang programmer dalam membuat program dan algoritma komputer.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/construct-3" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Construct 3</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Construct 3 adalah sebuah program pembuatan game 2D gratis tanpa memerlukan kemampuan coding.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/content-marketing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Content Marketing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Content marketing adalah strategi pemasaran melalui pembuatan konten berkualitas supaya dapat menarik dan mempertahankan audiens.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/content-pillar" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Content Pillar</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Content pillar adalah pondasi agar konten perusahaan memiliki identitas yang mudah dikenali dan menjadi keseluruhan strategi konten media sosial bisnis.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/conversion" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Conversion</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Conversion adalah istilah untuk mendeskripsikan tindakan mengubah pengunjung website menjadi pelanggan yang membayar.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cookie" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cookie</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cookie adalah file kecil berisi informasi user saat mengunjungi suatu website. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/copyright" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Copyright</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Copyright adalah hak legal yang diberikan kepada pemilik kekayaan intelektual.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#319cff;color:#319cff" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/customer-acquisition" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Customer Acquisition</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Customer acquisition adalah proses dalam mendapatkan pelanggan potensial yang akan membeli produk/layanan. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/customer-journey" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Customer Journey</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Customer journey adalah seluruh pengalaman yang dialami customer saat berinteraksi dengan perusahaan/brand dan membantu perusahaan dalam memahami customer lebih baik.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/customer-retention" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Customer Retention</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Customer retention adalah upaya untuk membuat pelanggan melakukan pembelian berulang, puas dengan layanan perusahaan, dan tidak beralih ke kompetitor.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/customer-segmentation" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Customer Segmentation</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Customer segmentation adalah pembagian basis konsumen menjadi kelompok dengan kesamaan tertentu, seperti usia, jenis kelamin, ketertarikan, dan kebiasaan belanja.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/cpanel" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">cPanel</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">cPanel adalah panel kontrol untuk membangun dan memelihara website dengan mudah tanpa perlu memahami pengetahuan teknikal mengenai web development.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">c</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="d">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">D</h2>
                                    <a href="/kosakata-group/d" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/dns" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">DNS</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">DNS adalah sistem yang menerjemahkan nama domain yang dapat dibaca manusia menjadi alamat IP yang dapat dibaca komputer.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/dom" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">DOM</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">DOM adalah interface pemrograman untuk dokumen HTML dan XML.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/dart" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Dart</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Dart adalah bahasa pemrograman open-source berorientasi objek yang dikembangkan oleh Google.&nbsp;Dart umumnya digabungkan dengan Flutter untuk pengembangan mobile app.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/data-diskrit" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Data Diskrit</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Data diskrit adalah data yang berisi bulangan bulat, dan tak bisa dipecah menjadi angka pecahan atau desimal. </p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/data-sekunder" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Data Sekunder</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Data sekunder adalah informasi yang diperoleh secara tidak langsung.&nbsp;Data sekunder berperan penting untuk mendapatkan pemahaman yang lebih dalam tentang suatu topik.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/debugging" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Debugging</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Debugging adalah proses menemukan dan memperbaiki error atau bug dalam kode sistem perangkat lunak.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/devops" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">DevOps</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">DevOps adalah prinsip untuk mengotomatiskan serta mengintegrasikan proses antara pengembangan software (Dev) dan kegiatan operasional (Ops). Prinsip ini lahir dari tiga kombinasi, yaitu praktik, tools, dan culture.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/diagram-batang" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Diagram Batang</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Diagram batang adalah teknik visualisasi data yang menggunakan batang berbentuk persegi panjang.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/diagram-garis" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Diagram Garis</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Diagram garis adalah teknik visualisasi data yang digunakan untuk menampilkan informasi melalui rangkaian titik data yang terhubung oleh garis lurus.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/diagram-pareto" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Diagram Pareto</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Diagram Pareto adalah gabungan diagram batang dan diagram garis yang menunjukkan urutan banyaknya suatu kejadian.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/digital-native" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Digital Native</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Digital native adalah generasi yang lahir di era digital, dan sejak kecilnya terpapar dengan informasi digital secara terus menerus.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/domain" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Domain</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Domain adalah bagian dari alamat web (URL) yang dipakai untuk mencari lokasi suatu website atau halaman dari website.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/domain-authority" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Domain Authority</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">DA atau domain authority adalah metrik untuk memprediksi seberapa besar kemungkinan suatu website mendapatkan ranking di search engine result page (SERP) atau halaman hasil penelusuran.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">d</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="e">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">E</h2>
                                    <a href="/kosakata-group/e" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/e-commerce" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">E-Commerce</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pengertian dari e-commerce adalah seluruh bisnis yang menjual barang dan jasa lewat internet.</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/erd" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">ERD</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Entity-relationship diagram (ERD) adalah diagram yang menunjukkan hubungan antar entitas seperti orang, objek, dan konsep dalam suatu sistem.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/etl" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">ETL</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Extract, transform, load atau biasa disingkat ETL adalah proses integrasi data yang menggabungkan data dari berbagai sumber lalu dipindahkan ke satu penyimpanan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/efisien" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Efisien</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Efisien adalah ketika suatu pekerjaan bisa menghasilkan output maksimal dengan input atau usaha seminimal mungkin. Karena itu, efisiensi memerlukan adanya pengurangan sumber daya yang tidak perlu, termasuk waktu dan SDM.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/elevator-pitch" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Elevator Pitch</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Elevator pitch adalah ringkasan perkenalan yang berisi gambaran besar mengenai produk, layanan, atau project. Selain dalam bisnis, elevator pitch juga digunakan dalam interview kerja untuk menarik perhatian perekrut (recruiter).</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/email-marketing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Email Marketing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Email marketing adalah salah satu strategi yang memanfaatkan media email untuk mempromosikan produk dan efektif digunakan dalam menarik pelanggan. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/emulator" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Emulator</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Emulator adalah sebuah alat agar perangkat yang digunakan pengguna bisa meniru fungsi dari perangkat lain. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/end-user" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">End User</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">End user adalah orang yang menjadi pertimbangan tim development ketika merancang dan mendesain produk. Mereka bertindak sebagai konsumen akhir yang menggunakan produk.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/endorse" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Endorse</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Endorse adalah bentuk strategi marketing yang melibatkan publik figur dan orang-orang terkenal seperti content creator serta influencer dengan basis pengikut yang masif.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/engagement" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Engagement</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Dalam konteks digital marketing, engagement adalah istilah untuk menyebut interaksi antara merek dengan konsumen.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/engagement-rate" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Engagement Rate</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Engagement rate adalah sebuah metrik yang dapat mengukur interaksi audiens terhadap konten yang dibuat, terutama pada media sosial.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/enkripsi" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Enkripsi</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Enkripsi adalah metode mengamankan data dengan cara mengubah data yang tadinya mudah dibaca menjadi kumpulan tulisan yang tidak bisa dipahami atau disebut dengan chipertext message. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">e</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="f">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">F</h2>
                                    <a href="/kosakata-group/f" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/ftp" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">FTP</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">File Transfer Protocol atau disingkat FTP adalah protokol internet yang digunakan untuk mentransfer file antar komputer melalui suatu jaringan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Data Analysis</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/fyp" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">FYP</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Kepanjangan FYP adalah For You Page dan merujuk ke halaman di TikTok yang menampilkan rekomendasi video untuk tiap akun.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/facebook-pixel" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Facebook Pixel</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Facebook Pixel atau saat ini dikenal dengan Meta Pixel adalah kode yang dipasang di website untuk mengumpulkan data tentang pengunjung. Data ini digunakan untuk mengukur, mengoptimalkan iklan, serta menargetkan audiens.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/firebase" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Firebase</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Firebase adalah platform Backend-as-a-Service (BaaS) yang memudahkan developer dalam mengembangkan web dan mobile app.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/firmware" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Firmware</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Firmware adalah program yang ditanamkan dalam memori hardware agar perangkat bisa beroperasi dengan baik. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/flash-sale" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Flash Sale</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Flash Sale adalah strategi penjualan dengan diskon besar-besaran namun berbatas waktu.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/flowchart" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Flowchart</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Flowchart adalah diagram yang menggambarkan proses, sistem, atau algoritma komputer. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/framework" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Framework</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Framework adalah fondasi yang digunakan oleh developer maupun programmer untuk membuat aplikasi dan website. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">f</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="g">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">G</h2>
                                    <a href="/kosakata-group/g" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/gerbang-logika" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Gerbang Logika</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Gerbang logika adalah komponen elektronik yang berfungsi untuk menghantarkan sinyal ketika kondisi tertentu terpenuhi.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/github" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">GitHub</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">GitHub adalah platform pengembangan software online berbasis cloud yang digunakan untuk menyimpan, melacak, dan sebagai tempat kolaborasi antar developer dalam suatu proyek perangkat lunak.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/giveaway" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Giveaway</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Giveaway adalah pemberian hadiah dari satu pihak (brand) ke pihak lain (audiens) yang disertai syarat dan ketentuan. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/golang" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Golang</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Golang adalah bahasa pemrograman open-source yang dikembangkan oleh Google. Berguna untuk mengembangkan web, layanan cloud dan jaringan, serta jenis perangkat lunak lainnya</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/google-ads" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Google Ads</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Google Ads adalah layanan online advertising yang ada di Google untuk menargetkan audiens, mengarahkan traffic ke website, dan meningkatkan kunjungan in-store.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/google-analytics" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Google Analytics</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Google Analytics adalah alat analisis milik Google untuk membantu melacak dan menganalisis traffic atau kunjungan ke suatu website serta perilaku pengunjungnya.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/google-data-studio" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Google Data Studio</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Google Data Studio, sekarang disebut Looker Studio, adalah alat visualisasi dan pelaporan data milik Google.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">g</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="h">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">H</h2>
                                    <a href="/kosakata-group/h" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/html" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">HTML</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">HTML adalah kepanjangan dari HyperText Markup Language (HTML), berfungsi memberitahu browser cara menampilkan kata dan gambar di halaman website.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/http" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">HTTP</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">HTTP adalah protokol yang digunakan untuk mentransfer teks, gambar, suara, video, dan file multimedia lainnya melalui halaman website.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/https" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">HTTPS</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">HTTPS adalah protokol keamanan website dengan keamanan tingkat tinggi yang menjamin data pengunjung website terlindungi.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/hipotesis" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Hipotesis</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Hipotesis adalah dugaan awal/sementara, atau penjelasan yang mungkin untuk suatu peristiwa.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/hosting" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Hosting</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Hosting adalah layanan yang menyimpan seluruh data website di internet. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">h</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="i">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">I</h2>
                                    <a href="/kosakata-group/i" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/ip-address" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">IP Address</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">IP Address adalah alamat berisi kumpulan nomor atau karakter untuk membedakan antar device yang terhubung ke internet.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/isp" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">ISP</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Internet Service Provider atau ISP adalah perusahaan yang menyediakan akses ke internet untuk pelanggan pribadi maupun organisasi. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/impression" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Impression</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Impression adalah jumlah setiap kali konten ditampilkan di layar audiens.Perolehan impression bisa berasal dari beragam konten di platform mana saja.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/impulsive-buying" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Impulsive Buying</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Impulsive buying adalah dorongan yang kuat untuk berbelanja suatu produk secara tiba-tiba tanpa merencanakannya. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/incognito" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Incognito</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Mode incognito adalah tempat di mana user bisa menjelajahi web tanpa ada catatan riwayat yang disimpan di perangkat.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/indexing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Indexing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Indexing adalah proses menyusun data atau informasi supaya dapat diakses sehingga seseorang dapat dengan mudah menemukan informasi sesuai pencariannya. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/infografis" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Infografis</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Infografis adalah representasi visual yang memberikan garis besar suatu informasi atau data agar lebih mudah dipahami dalam waktu singkat.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Data Analysis</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/instastory" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Instastory</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Instastory adalah fitur Instagram yang memungkinkan pengguna untuk berbagi foto dan video yang akan hilang setelah 24 jam.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/intranet" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Intranet</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Intranet adalah jaringan pribadi yang digunakan dalam suatu organisasi.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/iot-internet-of-things" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">IoT (Internet of Things)</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">IoT (Internet of Things) adalah teknologi yang menghubungkan berbagai perangkat lewat jaringan internet.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">i</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="j">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">J</h2>
                                    <a href="/kosakata-group/j" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/json" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">JSON</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">JavaScript Object Notation atau JSON adalah suatu format yang digunakan untuk menyimpan dan mengirimkan data.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/javascript" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">JavaScript</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">JavaScript adalah bahasa pemrograman yang digunakan developer untuk membuat halaman web interaktif sehingga meningkatkan user experience di website.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/jira" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Jira</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Jira adalah tools project management yang dirancang untuk mengatur sekaligus melacak proyek dan dibangun berdasarkan metodologi Agile.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">j</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="k">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">K</h2>
                                    <a href="/kosakata-group/k" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/k-means-clustering" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">K Means Clustering</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">K Means clustering adalah algoritma unsupervised machine learning yang digunakan untuk pengelompokan data dan pengenalan pola.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/kol" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">KOL</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Key Opinion Leader atau KOL adalah seseorang yang dianggap ahli di bidang tertentu dan pendapatnya dihormati publik.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/kpi" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">KPI</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">KPI adalah serangkaian metrik pengukuran kuantitatif yang digunakan untuk mengukur kinerja di suatu perusahaan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/keyword" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Keyword</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Keyword adalah kata kunci yang paling mewakili isi suatu artikel atau konten.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/korelasi" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Korelasi</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Korelasi adalah ukuran statistik untuk mengetahui sejauh mana hubungan antara dua variabel atau lebih.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/kotlin" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Kotlin</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Kotlin adalah bahasa pemrograman bersifat open-source yang kompatibel dengan Java, dan dapat dikompilasi menjadi JavaScript. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/kubernetes" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Kubernetes</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Kubernetes adalah platform open-source yang dikembangkan oleh Google untuk mengelola banyak kontainer secara otomatis.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">k</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="l">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">L</h2>
                                    <a href="/kosakata-group/l" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/lms" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">LMS</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">LMS (Learning Management System) adalah software yang dirancang untuk mengelola materi dan aktivitas pembelajaran online.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/landing-page" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Landing Page</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Landing page adalah salah satu laman web yang ditargetkan untuk menarik audiens agar melakukan tindakan tertentu.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/laravel" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Laravel</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Laravel adalah framework PHP open-source yang menyediakan berbagai fitur untuk membuat website berbasis PHP modern.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/lead-generation" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Lead Generation</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Lead generation adalah serangkaian proses yang dilakukan untuk mengubah leads, atau orang yang tertarik dengan suatu bisnis, menjadi pembeli</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/leads" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Leads</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Leads adalah orang-orang yang menunjukkan ketertarikan terhadap suatu produk atau jasa yang ditawarkan, salah satunya melalui pengumpulan form di landing page.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/linux" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Linux</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Linux adalah sistem operasi open source yang banyak digunakan baik oleh perusahaan maupun perorangan.&nbsp;Salah satu platform yang paling populer, Android, menggunakan Linux sebagai dasarnya.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">l</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="m">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">M</h2>
                                    <a href="/kosakata-group/m" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/mvc" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">MVC</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">MVC adalah pola arsitektur atau desain yang membagi kode pada aplikasi menjadi tiga komponen, yaitu model, view, dan controller, di mana ketiganya memiliki fungsi berbeda.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/mvp" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">MVP</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Minimum viable product (MVP) adalah versi produk terbaru yang hanya berisikan fitur inti sesuai dengan permintaan dan kebutuhan pelanggan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/mvvm" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">MVVM</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">MVVM adalah pola desain yang membagi fungsi kode aplikasi menjadi tiga lapisan, yaitu Model, View, dan ViewModel.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/machine-learning" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Machine Learning</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Salah satu bagian dari artificial intelligence yang memungkinkan mesin belajar dari data atau pengalaman masa lalu (data historis) sehingga tidak perlu diprogram secara manual untuk melakukan seluruh pekerjaan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/mailchimp" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Mailchimp</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Mailchimp adalah platform marketing yang membantu perusahaan dalam mengelola serta berinteraksi dengan pelanggan dan klien. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/mailerlite" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">MailerLite</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">MailerLite adalah sebuah platform pemasaran dan otomasi e-mail.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/margin" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Margin</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Margin adalah selisih antara harga jual dan biaya yang dikeluarkan untuk memproduksi atau mendapatkan suatu produk atau layanan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/market-share" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Market Share</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pangsa pasar atau market share adalah metrik yang menunjukkan persentase penjualan suatu perusahaan dari total penjualan di pasar selama periode waktu tertentu.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/marketing-mix" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Marketing Mix</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Marketing mix adalah beberapa fokus area yang dapat digabungkan dalam membuat strategi pemasaran perusahaan. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/meta-title" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Meta Title</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Meta title adalah judul konten yang muncul atau terlihat di halaman mesin pencarian atau SERP (Search Engine Results Page).&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/metadata" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Metadata</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Metadata adalah informasi yang mendeskripsikan suatu data.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/metaverse" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Metaverse</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Metaverse adalah dunia virtual yang mereplikasi tampilan dunia nyata dan segala aspek di dalamnya, termasuk interaksi sosial, perdagangan, dan kepemilikan properti. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/microsoft-excel" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Microsoft Excel</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Microsoft Excel adalah program pengolahan dan penghitungan data yang dikeluarkan oleh Microsoft.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/mind-mapping" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Mind Mapping</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Mind mapping adalah teknik untuk mengatur dan mengembangkan pikiran, ide, serta informasi secara visual.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/mockup" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Mockup</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Mockup adalah visualisasi atau gambaran akhir dari sebuah produk yang akan diproduksi, termasuk produk fisik atau digital seperti website dan aplikasi.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/monetisasi" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Monetisasi</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Monetisasi adalah proses mendapatkan penghasilan atau uang melalui konten yang telah dibuat.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/mysql" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">MySQL</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">MySQL adalah open-source relational database management system (RDBMS) yang digunakan untuk mengelola database suatu website</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">m</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="n">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">N</h2>
                                    <a href="/kosakata-group/n" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/nps" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">NPS</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">NPS (Net Promoter Score) adalah metrik yang mengukur loyalitas dan kepuasan pelanggan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/native-advertising" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Native Advertising</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Native advertising adalah bentuk iklan berbayar yang tampilan, nuansa, fungsi, kualitas, dan format medianya sama dengan platform di mana iklan tersebut muncul.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/natural-language-processing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Natural Language Processing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Salah satu cabang artificial intelligence yang membantu komputer memahami bahasa manusia baik secara lisan maupun tertulis</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/neural-network" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Neural Network</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Neural network adalah sekumpulan algoritma machine learning yang dirancang untuk mengenali pola data dengan meniru cara kerja sel saraf manusia (neuron).</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/niche-market" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Niche Market</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Niche market adalah sekelompok orang yang ingin melakukan pembelian produk atau jasa yang spesifik.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/node-js" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Node.js</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Node.js adalah runtime environment (RTE) atau lingkungan eksekusi untuk JavaScript yang bersifat lintas platform dan open-source sehingga memungkinkan JavaScript dapat dijalankan di luar browser.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">n</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="o">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">O</h2>
                                    <a href="/kosakata-group/o" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/okr" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">OKR</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">OKR adalah seperangkat cara untuk menentukan, mengkomunikasikan, dan memantau tujuan yang ditetapkan perusahaan. OKR dipakai oleh perusahaan seperti Google. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/oop" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">OOP</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Object-Oriented Programming (OOP) adalah metode programming yang berorientasi kepada objek.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/orm" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">ORM</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">ORM adalah cara agar kueri database bisa dilakukan dengan selain bahasa SQL, seperti JavaScript atau Python.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/onedrive" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">OneDrive</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">OneDrive adalah penyimpanan cloud yang disediakan oleh Microsoft. Fungsinya sebagai platform virtual tempat menyimpan semua dokumen dan file di internet untuk user yang memiliki akun Microsoft.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Data Analysis</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/open-source" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Open Source</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Open source adalah sebuah program yang kode dasarnya dapat dengan bebas digunakan dan dimodifikasi oleh siapapun.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">o</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="p">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">P</h2>
                                    <a href="/kosakata-group/p" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/p-value" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">P Value</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">P Value atau nilai p adalah nilai yang digunakan untuk mengetahui seberapa besar kemungkinan hipotesis yang diajukan sesuai dengan hasil penelitian.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/pwa" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">PWA</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Progressive Web App atau disingkat PWA adalah aplikasi yang dibuat dengan mengombinasikan aplikasi web dan aplikasi seluler. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/pain-point" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pain Point</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pain point adalah masalah dari calon pelanggan bisnis yang membuat mereka tidak nyaman dan membutuhkan solusi.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/parameter" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Parameter</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Parameter adalah nilai numerik yang menggambarkan karakteristik seluruh anggota populasi.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/pay-per-click" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pay Per Click</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pay per click adalah model digital advertising berbayar yang mengharuskan pengiklan membayar sejumlah fee setiap kali iklannya mendapat click.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/pengolahan-data" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pengolahan Data</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pengolahan data adalah proses mengubah data mentah menjadi informasi yang bermakna dan berguna.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/personal-branding" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Personal Branding</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Personal branding adalah proses menciptakan citra atau image diri seorang individu.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/phising" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Phising</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Phising adalah bentuk penipuan lewat media komunikasi online (seperti e-mail, telepon, pesan teks) di mana penyerang menyamar sebagai individu atau organisasi yang memiliki reputasi baik.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/pivot-table" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pivot Table</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Salah satu fungsi di Excel untuk meringkas informasi yang ada di tabel database atau baris data. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/platform" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Platform</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Platform adalah hardware atau software yang menggerakkan suatu aplikasi atau layanan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/polymorphism" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Polymorphism</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Polymorphism adalah entitas seperti variabel, function, atau objek lain yang ketika ditampilkan memiliki bentuk yang berbeda-beda.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/press-release" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Press Release</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Siaran pers atau press release adalah pengumuman resmi yang dibuat oleh perusahaan/bisnis menggunakan format tertentu untuk memberitahukan informasi penting kepada publik.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/probabilitas" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Probabilitas</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Probabilitas adalah angka yang menyatakan kemungkinan terjadinya suatu peristiwa, dan salah satu tujuannya adalah untuk mengambil keputusan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/product-backlog" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Product Backlog</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Product backlog adalah teknik memecah tugas menjadi beberapa bagian yang dirangkum dalam sebuah daftar prioritas untuk memastikan produk tetap kompetitif di kemudian hari.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/product-life-cycle" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Product Life Cycle</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Product life cycle adalah tahapan yang dilalui suatu produk mulai dari pengenalan ke pasar hingga akhirnya menghilang dari pasar.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/product-requirement-document" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Product Requirement Document (PRD)</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">PRD atau product requirement document adalah dokumen panduan pengembangan produk untuk mendefinisikan tujuan, fitur, dan apa saja yang harus disertakan dalam suatu produk.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/prototype" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Prototype</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Prototype adalah replika atau model kerja sederhana dari produk software yang sesungguhnya untuk tujuan demonstrasi dan sebagai bagian dari proses pengembangan perangkat lunak (software development).</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/pseudocode" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pseudocode</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pseudocode adalah cara penulisan kode dan algoritma menggunakan bahasa umum yang digunakan sehari-hari sehingga lebih mudah dipahami, terutama bagi orang tanpa latar belakang programming.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">p</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="q">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">Q</h2>
                                    <a href="/kosakata-group/q" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/qr-code" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">QR Code</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">QR code adalah singkatan dari quick response code, salah satu jenis barcode yang dapat dibaca dengan mudah oleh perangkat digital.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/query" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Query</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Query adalah perintah untuk meminta informasi dalam sebuah database yang dapat dibuat menggunakan bahasa SQL untuk membuat laporan atau analisis data.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">q</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="r">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">R</h2>
                                    <a href="/kosakata-group/r" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/r" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">R</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">R adalah bahasa pemrograman yang digunakan untuk keperluan statistik, khususnya untuk orang yang bertugas menangani dan bekerja dengan data.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/rad" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">RAD</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">RAD adalah metodologi pengembangan software dengan menggunakan prototype dan feedback yang berulang-ulang. Tujuannya adalah untuk menghasilkan software berkualitas tinggi dalam waktu singkat.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/roi" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">ROI</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">ROI adalah ukuran kinerja yang digunakan untuk menghitung efisiensi atau profitabilitas suatu investasi bisnis.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/rate-card" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Rate Card</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Rate card adalah dokumen untuk menyatakan harga semua layanan yang disediakan pihak penyedia jasa atau layanan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/react" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">React</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">React adalah library JavaScript open-source yang digunakan untuk membangun user interface. React diperkenalkan pada tahun 2013 oleh Facebook dan saat ini dikelola oleh Facebook dan komunitas developer.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/react-native" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">React Native</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">React Native adalah framework untuk membuat aplikasi seluler yang bisa diakses pada berbagai platform, dan dibuat berdasarkan library JavaScript yang disebut React.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/rebranding" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Rebranding</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Rebranding adalah menciptakan tampilan dan nuansa baru dari suatu brand dengan melakukan perubahan pada logo, simbol, bahkan visi dan misi brand terkait.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/reduksi-data" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Reduksi Data</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Reduksi data adalah proses pengurangan volume data asli dan merepresentasikannya dalam volume yang jauh lebih kecil dengan tetap menjaga integritas data asli.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/reels" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Reels</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Reels adalah fitur short video di Instagram yang bisa diedit sedemikian rupa agar lebih menarik.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/referral" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Referral</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Referral adalah tindakan yang dilakukan pelanggan untuk merekomendasikan layanan atau produk yang ditawarkan suatu bisnis. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/regresi" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Regresi</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Regresi adalah teknik dalam statistika yang digunakan untuk memprediksi hubungan antar variabel, yaitu variabel dependen dan independen.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/relational-database" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Relational Database</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Relational database adalah kumpulan item data yang hubungannya sudah ditentukan. Data disimpan dalam baris dan kolom yang secara kolektif membentuk satu atau lebih tabel yang memiliki relasi satu sama lain.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/repeater" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Repeater</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Repeater adalah hardware yang digunakan untuk memperkuat dan memperluas area jangkauan network. Alat ini bekerja dengan meregenerasi sinyal masuk sebelum mentransmisikannya kembali.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/retargeting" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Retargeting</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Retargeting adalah salah satu metode periklanan online untuk menjangkau orang-orang yang pernah mengunjungi suatu website. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/retur" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Retur</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Retur adalah pengembalian barang oleh customer ke merchant karena alasan tertentu, misalnya barang rusak atau tak sesuai deskripsi. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/robotika" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Robotika</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Robotika adalah teknik yang melibatkan pengkonsepan, pembuatan, dan pengoperasian robot.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/routing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Routing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Routing adalah proses pemilihan jalur transfer data untuk komunikasi antar jaringan yang efisien. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">r</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="s">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">S</h2>
                                    <a href="/kosakata-group/s" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/sdlc" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">SDLC</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Software Development Life Cycle atau SDLC adalah metodologi untuk membuat software berkualitas tinggi.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/sem" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">SEM</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">SEM adalah singkatan dari Search Engine Marketing, salah satu channel marketing berbayar yang juga menggunakan platform search engine seperti SEO. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/seo-off-page" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">SEO Off Page</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">SEO off-page adalah seluruh aktivitas untuk meningkatkan ranking melalui jalur eksternal.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/seo-on-page" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">SEO On page</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">SEO on-page adalah upaya pengoptimalan bagian halaman website untuk meningkatkan traffic dan meraih peringkat teratas di mesin pencari.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/sla-adalah" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">SLA</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Service-level Agreement atau SLA adalah kontrak yang dibuat dalam bentuk dokumen dan disetujui antara pemilik bisnis atau penyedia layanan dengan customer.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/ssd" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">SSD</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">SSD adalah salah satu perangkat memori berbasis chip untuk menyimpan, mengubah, dan menampilkan data pada perangkat yang dipasangkan. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/saas" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">SaaS</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Software as a Service atau disingkat SaaS adalah salah satu jenis model layanan cloud computing di mana software sudah siap digunakan tanpa harus melakukan konfigurasi atau instalasi apa pun.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/sales-funnel" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sales Funnel</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sales funnel adalah representasi perjalanan pelanggan dari awareness hingga pembelian.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/scrum" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Scrum</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Scrum adalah metode Agile yang membagi rencana jangka panjang menjadi beberapa periode kerja jangka pendek yang disebut sprint.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/segmentasi-pasar" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Segmentasi Pasar</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Segmentasi pasar adalah proses membagi pangsa pasar berdasarkan karakteristik tertentu supaya perusahaan dapat menawarkan produk atau layanan yang sesuai.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/sequence-diagram" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sequence Diagram</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sequence diagram adalah contoh diagram UML yang menunjukkan interaksi antar objek atau komponen dalam suatu sistem atau proses secara visual.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/server" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Server</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Server adalah perangkat komputer khusus yang menyediakan informasi dan data untuk komputer komputer klien.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/sitemap" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sitemap</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sitemap adalah sebuah file atau halaman yang berisi daftar URL dari seluruh halaman penting suatu website.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/six-sigma" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Six Sigma</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Six Sigma adalah metode dalam project management untuk membantu perusahaan mengurangi cacat (defect) produk dan meningkatkan proses bisnis.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/skala-ordinal" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Skala Ordinal</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Skala ordinal adalah salah satu jenis skala pengukuran dan ada di urutan kedua. Skala ini mewakili urutan atau order.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/skala-pengukuran" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Skala Pengukuran</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Skala pengukuran adalah skala untuk mengukur, mengklasifikasikan, dan menggambarkan hubungan antara nilai-nilai yang dikumpulkan dalam variabel.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/soft-selling" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Soft Selling</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Soft selling adalah salah satu taktik penjualan yang membuat customer nyaman dan mengetahui informasi produk sebelum memutuskan untuk membeli.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/spam" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Spam</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Spam adalah pesan tidak diharapkan yang dikirim melalui media komunikasi elektronik.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/sprout-social" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sprout Social</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sprout Social adalah tool manajemen media sosial yang memungkinkan pengguna untuk membangun hubungan lebih kuat dengan audiens di media sosial.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/standar-deviasi" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Standar Deviasi</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Standar deviasi adalah nilai yang mengukur penyebaran data terhadap nilai rata-rata (mean) data tersebut. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/statistika-deskriptif" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Statistika Deskriptif</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Statistika deskriptif adalah metode dalam statistika untuk mengumpulkan, mengklasifikasikan, meringkas, menginterpretasikan, dan menyajikan data secara deskriptif atau eksplanasi.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/stitch" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Stitch</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Stitch adalah fitur di TikTok yang memungkinkan pengguna mencuplik bagian dari video orang lain dan menambahkannya ke video mereka sendiri.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/struktur-data" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Struktur Data</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Struktur data adalah cara menyimpan, mengambil, dan menyusun data. Struktur data memungkinkan data yang ada di komputer lebih mudah diakses dan diperbarui.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/subnet-mask" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Subnet Mask</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Subnet mask adalah nomor alamat dari internal IP address yang membedakan antara IP address pada perangkat satu dan lainnya.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/sunk-cost" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sunk Cost</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sunk cost adalah pengeluaran yang tidak dapat diperoleh kembali.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/supervised-learning" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Supervised Learning</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Supervised learning adalah pendekatan dalam machine learning dan artificial intelligence yang menggunakan kumpulan data berlabel. Data tersebut berfungsi melatih algoritma dalam mengklasifikasikan data atau memprediksi hasil secara akurat.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/switch" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Switch</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Switch adalah alat yang digunakan untuk menghubungkan perangkat dan meneruskan paket data dari dan untuk perangkat tersebut.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">s</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="t">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">T</h2>
                                    <a href="/kosakata-group/t" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/tdd" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">TDD</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">TDD adalah pengembangan software di mana pengujiannya langsung dilakukan setelah setiap unit fungsi dibuat, alih-alih setelah keseluruhan software selesai. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/tagline" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Tagline</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Tagline adalah deskripsi singkat berisi value, pesan, dan aspek penting dari suatu brand. Tagline digunakan untuk tujuan branding.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/tailwind" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Tailwind</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Tailwind CSS adalah utility-first framework CSS yang didesain untuk mempermudah dan mempercepat pembuatan aplikasi menggunakan desain custom.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/tensorflow" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">TensorFlow</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">TensorFlow adalah framework open-source milik Google untuk mengembangkan dan melatih berbagai model yang ada di machine learning, deep learning, serta pekerjaan yang berkaitan dengan analisis statistik lainnya.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/testimoni" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Testimoni</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Testimoni adalah pernyataan dari orang-orang yang telah menggunakan produk/layanan bisnis dan merasa puas dengan produk tersebut.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/tipe-data" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Tipe Data</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Tipe data adalah klasifikasi value suatu variabel yang membantu operasi komputer untuk mengenali nilai data tanpa menghasilkan output error.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/tipografi" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Tipografi</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Tipografi adalah seni mengatur tulisan agar ketika ditampilkan bisa menarik secara visual. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/topologi-star" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Topologi Star</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Topologi Star adalah konfigurasi jaringan yang seluruh perangkatnya terhubung ke node pusat.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/trademark" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Trademark</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Trademark adalah simbol, kata, frase, dan desain yang dapat mencerminkan produk atau jasa dari suatu perusahaan dan membedakannya dari produk atau jasa kompetitor.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/traffic" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Traffic</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Traffic atau website traffic adalah segala informasi tentang setiap pengunjung (visitor) suatu website, dari jumlah pengunjung, durasi kunjungan, dan segala aktivitas di dalam situs. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/triangulasi-data" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Triangulasi Data</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Triangulasi data adalah metodologi yang digunakan untuk meningkatkan validitas dan reliabilitas suatu penelitian dengan menggabungkan data dari berbagai sumber, metode, atau teori.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">t</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="u">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">U</h2>
                                    <a href="/kosakata-group/u" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/uml" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">UML</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">UML (Unified Modeling Language) adalah bahasa visual yang digunakan untuk membuat diagram dan model yang mewakili sistem software. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/url" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">URL</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">URL adalah singkatan dari Uniform Resource Locator dan merupakan halaman website yang menjadi lokasi situs atau dokumen di internet. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/usp" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">USP</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">USP (Unique Selling Point/Unique Selling Preposition) adalah hal yang membedakan suatu produk dengan produk pesaingnya.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/ubersuggest" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Ubersuggest</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Ubersuggest adalah tool SEO yang digunakan untuk menghasilkan ide keyword dan konten baru. Tool ini merupakan alat SEO all-in-one yang juga bisa dimanfaatkan untuk melacak ranking website, melakukan analisis kompetitor, mengaudit situs, dan banyak lainnya.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/ubuntu" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Ubuntu</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Ubuntu adalah sistem operasi berbasis Linux dan open-source yang dikembangkan oleh perusahaan Canonical Ltd. Sistem operasi ini dirancang untuk meningkatkan pengembangan di smartphone, komputer, dan network server.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/uji-homogenitas" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Uji Homogenitas</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Uji homogenitas adalah salah satu metode uji asumsi non-parametrik untuk mengetahui apakah dua atau lebih sampel dari populasi yang berbeda memiliki distribusi nilai yang sama.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/up-selling" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Up Selling</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Up Selling adalah strategi marketing yang membuat customer membeli produk yang lebih mahal atau lebih banyak dari produk yang mereka ingin beli.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/use-case-diagram" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Use Case Diagram</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Use case diagram adalah sebuah diagram yang menggambarkan perilaku sebuah sistem serta interaksi antara sistem dengan pengguna (disebut dengan istilah aktor).</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/user-experience" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">User Experience (UX)</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">User experience adalah keseluruhan perjalanan yang dilalui pengguna saat mereka menggunakan suatu produk. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/user-generated-content" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">User Generated Content</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">User Generated Content (UGC) adalah semua jenis konten mengenai suatu produk atau layanan yang dibuat oleh pengguna di platform online.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/user-interface" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">User Interface</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">User Interface adalah elemen visual yang berguna untuk menghubungkan pengguna (user) dengan sistem teknologi.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">u</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="v">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">V</h2>
                                    <a href="/kosakata-group/v" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/vpn" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">VPN</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Virtual Private Network atau VPN adalah layanan online yang dapat melindungi privasi dan koneksi internet.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/vps" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">VPS</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">VPS (Virtual Private Server) adalah layanan hosting web yang server fisiknya dibagi menjadi beberapa server virtual dengan sumber daya dan sistem operasinya sendiri.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/viral-marketing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Viral Marketing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Viral marketing adalah teknik pemasaran yang melibatkan penyebaran informasi dari mulut ke mulut melalui internet</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/virtual-reality" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Virtual Reality</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">VR atau Virtual Reality adalah teknologi komputer untuk menciptakan lingkungan 3D semirip mungkin dengan dunia nyata dan membuat pengguna bisa berinteraksi di dalamnya.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">v</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="w">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">W</h2>
                                    <a href="/kosakata-group/w" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/web-dinamis" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web Dinamis</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web dinamis adalah jenis website yang kontennya dapat berubah sesuai dengan permintaan user atau input yang diterima.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/web-proxy" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web Proxy</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web proxy adalah server yang bertindak sebagai perantara perangkat pengguna dan internet.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/web-server" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web Server</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web server adalah salah satu jenis server yang khusus ditujukan untuk menyediakan layanan permintaan data di web.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/web-service" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web Service</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web service adalah penghubung antara dua perangkat, sistem, atau aplikasi dengan bahasa yang berbeda untuk saling bertukar data.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/web3" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web3</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web3 adalah generasi internet terbaru yang sedang dikembangkan menggunakan teknologi blockchain.&nbsp;</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/white-box-testing" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">White Box Testing</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">White Box Testing adalah teknik pengujian software yang berfokus pada struktur internal atau desain sistem. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/wireframe" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Wireframe</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Wireframe adalah kerangka dasar sebuah website atau app yang menggambarkan isi dan fungsionalitasnya.&nbsp;Wireframe biasanya digunakan di tahap awal web development.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/word-of-mouth" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Word of Mouth</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Word of Mouth adalah teknik membagikan informasi mengenai suatu produk atau layanan ke orang lain, biasanya melalui komunikasi lisan.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">w</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="x">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">X</h2>
                                    <a href="/kosakata-group/x" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/xml" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">XML</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">XML (eXtensible Markup Language) adalah bahasa markup yang digunakan untuk mendeskripsikan data dalam format yang dapat dibaca baik oleh manusia maupun mesin.</p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">x</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="y">
                                <div class="keyword-group">
                                    <h2 class="heading-alphabet margin-bottom">Y</h2>
                                    <a href="/kosakata-group/y" class="hidden-link w-inline-block"></a>
                                    <div class="collection-list-wrapper w-dyn-list" style="">
                                    <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/yandex" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">Yandex</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Yandex adalah browser asal Rusia yang berfungsi sebagai search engine, serta menyediakan layanan lain seperti online advertising, e-mail, dan voice assistant. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item" id="">
                                        <a href="/kosakata/youtube-shorts" class="keyword-item w-inline-block">
                                            <h4 fs-cmsfilter-field="title" class="card-panduan-title">YouTube Shorts</h4>
                                            <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">YouTube Shorts adalah video pendek dari YouTube berdurasi maksimal 60 detik yang dapat dimonetisasi. </p>
                                            <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="idtext">y</div>
                                </div>
                                <div role="listitem" class="collection-item-keyword w-dyn-item" id="z">
                                <div class="keyword-group w-condition-invisible">
                                    <h2 class="heading-alphabet margin-bottom">Z</h2>
                                    <a href="/kosakata-group/z" class="hidden-link w-inline-block"></a>
                                    <div fs-cmsnest-collection="content" class="keyword-block"></div>
                                </div>
                                <div class="idtext">z</div>
                                </div>
                            </div>
                        </div>
                        <div class="collection-list-wrapper w-dyn-list" style="display: none;">
                            <div fs-cmscombine-element="list" fs-cmsnest-collection="content" role="list" class="collection-list-keycard w-dyn-items">
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/a-b-testing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">A/B Testing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">A/B testing adalah strategi marketing yang membandingkan dua versi konten berbeda, yaitu konten A dan konten B. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/api" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">API</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Application programming interface atau API adalah mekanisme yang membuat dua program software bisa terhubung dan berinteraksi satu sama lain menggunakan sekumpulan protokol/aturan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/activity-diagram" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Activity Diagram</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Activity diagram adalah diagram yang menunjukkan aliran dari satu aktivitas ke aktivitas lainnya dalam suatu sistem atau proses.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/adsense" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">AdSense</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">AdSense adalah bagian dari program Google Ads yang membayar pemilik situs website untuk setiap click dari iklan Google yang ada di sana. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/advertising" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Advertising</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Advertising adalah teknik marketing yang bertujuan untuk mempromosikan atau menjual suatu produk, layanan, atau ide kepada audiens.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/advertorial" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Advertorial</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Advertorial adalah iklan berbayar yang ditulis agar informasinya terlihat dan dibaca seperti karya jurnalistik atau konten editorial independen.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/affiliate-marketing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Affiliate Marketing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Affiliate marketing adalah model advertising di mana perusahaan membayar pihak ketiga untuk menghasilkan traffic dan membawa audiens ke produk perusahaan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/agency" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Agency</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Agency adalah suatu bisnis, organisasi, atau firma yang menyediakan jasa tertentu.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/agile-for-software-development" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Agile</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Agile software development adalah jenis metodologi pengembangan software yang membantu tim bekerja lebih cepat dengan cara membagi proyek menjadi bagian-bagian kecil dan bisa berjalan secara paralel.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#319cff;color:#319cff" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/algoritma" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Algoritma</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Algoritma adalah urutan langkah logis yang disusun secara sistematis dan digunakan untuk memecahkan masalah.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/algoritma-apriori" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Algoritma Apriori</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Algoritma apriori adalah algoritma yang digunakan untuk mengetahui hubungan atau asosiasi antara satu objek/item dengan objek lain dalam suatu dataset.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/algoritma-naive-bayes" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Algoritma Naive Bayes</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Algoritma Naive Bayes adalah kumpulan algoritma pembeda berdasarkan teorema Bayes dengan prinsip probabilitas bersyarat.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/analisis-deskriptif" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Analisis Deskriptif</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Analisis deskriptif adalah jenis analisis data yang digunakan untuk menggambarkan, menampilkan, dan meringkas sekumpulan data.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/analisis-inferensial" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Analisis Inferensial</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Statistik inferensial atau analisis inferensial adalah metode yang digunakan untuk membuat kesimpulan berdasarkan sampel yang merepresentasikan populasi.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag">Data Analysis</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/analisis-multivariat" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Analisis Multivariat</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Analisis multivariat merupakan metode menganalisis hubungan antara lebih dari dua variabel dalam kelompok data yang diuji. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/analisis-swot" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Analisis SWOT</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Analisis SWOT adalah teknik atau kerangka kerja untuk mengidentifikasi kekuatan, kelemahan, potensi, dan risiko guna mengembangkan rencana strategis suatu bisnis.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/arduino" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Arduino</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Arduino adalah sebuah alat yang digunakan untuk mengontrol perangkat elektronik</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/artificial-intelligence" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Artificial Intelligence</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Kecerdasan buatan atau artificial intelligence adalah sistem dalam mesin yang meniru cara manusia berpikir dan bertindak (kecerdasan manusia).</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/augmented-reality" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Augmented Reality</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Augmented Reality (AR) adalah teknologi 3D interaktif yang menggabungkan tampilan dunia nyata dengan elemen digital yang dihasilkan komputer.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/b2b-marketing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">B2B Marketing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">B2B marketing adalah bentuk pemasaran yang digunakan suatu perusahaan dalam menjual produk atau layanannya ke perusahaan atau organisasi lain.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/backend" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Backend</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Backend adalah sistem yang menjadi bagian dari server sehingga tidak terlihat dan tidak dapat diakses oleh pengguna seperti halnya front end.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/backlink" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Backlink</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Backlink adalah link pada suatu website yang mengarah ke website lain.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/bahasa-c" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bahasa C</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bahasa C adalah bahasa pemrograman general-purpose yang digunakan developer untuk membuat dan memelihara sistem aplikasi.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/bandwidth" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bandwidth</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bandwidth adalah kecepatan maksimum data yang bisa ditransfer dalam waktu tertentu melalui koneksi jaringan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/big-data" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Big Data</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Big data adalah kumpulan data yang jumlahnya besar dan kompleks. Data-data ini tumbuh dengan kecepatan yang terus meningkat.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/bitly" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bitly</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bitly adalah platform untuk memendekkan URL dan manajemen link.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/black-box-testing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Black Box Testing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Black box testing adalah proses menguji fungsi perangkat lunak (software) atau aplikasi dari sudut pandang pengguna, tanpa mengetahui struktur internal atau desain struktur tersebut. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/black-hat-seo" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Black Hat SEO</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Black Hat SEO adalah salah satu strategi SEO yang melanggar pedoman search engine sehingga berisiko membuat website dihapus dari halaman pencarian.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/blogging" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Blogging</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Blogging adalah proses membuat konten yang nantinya akan dipublikasikan secara berkala di blog.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/bootstrap" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bootstrap</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bootstrap adalah kerangka atau framework untuk membuat ukuran dan orientasi tampilan situs sesuai dengan perangkat yang digunakan user, misalnya laptop atau smartphone.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/bot" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bot</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bot adalah program software yang dirancang untuk melakukan tugas tertentu dengan mensimulasikan aktivitas manusia.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/brand-activation" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Activation</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand activation adalah salah satu strategi marketing yang memberikan pengalaman unik dan berkesan kepada pelanggan dalam bentuk campaign, event, maupun interaksi lain.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/brand-ambassador" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Ambassador</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand ambassador adalah orang yang ditunjuk oleh perusahaan untuk mewakili suatu produk atau layanan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/brand-awareness" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Awareness</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand awareness adalah istilah marketing yang menggambarkan sejauh mana konsumen mengenali suatu produk atau merek.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/brand-equity" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Equity</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand equity adalah nilai dari suatu brand yang dibangun berdasarkan persepsi pelanggan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/brand-extension" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Brand Extension</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Brand extension adalah strategi marketing di mana perusahaan menggunakan nama merek yang sudah terkenal untuk merilis dan memperkenalkan produk baru.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/branding" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Branding</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Branding adalah proses menciptakan identitas suatu perusahaan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/breadcrumbs" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Breadcrumbs</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Breadcrumbs adalah salah satu alat navigasi pada website untuk membantu pengunjung mengetahui kategori halaman apa yang sedang mereka kunjungi.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/broken-link" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Broken Link</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Broken link adalah hyperlink ke suatu halaman website atau sumber yang tidak lagi valid, dan biasanya akan muncul pesan yang menandakan error ketika di-klik.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/browser" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Browser</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Browser adalah program software yang memungkinkan komputer untuk mencari dan menemukan informasi di internet.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/bug" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Bug</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Bug adalah kesalahan atau penulisan kode program yang tidak tepat sehingga menyebabkan program tak bisa berfungsi dengan baik.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/buyer-persona" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Buyer Persona</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Buyer persona adalah representasi semi-fiksi dari pelanggan ideal yang diciptakan berdasarkan market research dan data riil terkait pelanggan yang sudah ada.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/ci-cd" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">CI/CD</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Continuous Integration dan Continuous Delivery/Deployment atau disingkat CI/CD adalah metode dalam software engineering untuk mengotomatiskan pembuatan, pengujian, dan penerapan software.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cms" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">CMS</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Content Management System (CMS) adalah software yang membantu membuat dan mengelola website</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cmyk" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">CMYK</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">CMYK (Cyan Magenta Yellow Black) adalah sistem warna yang terdiri dari cyan, magenta, kuning, dan hitam.&nbsp;Sistem ini penting karena dapat menciptakan warna yang akurat dan konsisten pada berbagai media cetak.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cpa" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">CPA</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom"> CPA adalah metrik perhitungan biaya yang dikeluarkan untuk setiap acquisition atau akuisisi.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cpc" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">CPC (Cost Per Click)</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">CPC adalah singkatan dari cost per click dan merupakan metrik penghitungan biaya yang dikenakan pemilik website kepada pengiklan untuk setiap click.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cpm" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">CPM</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">CPM adalah metrik penghitungan biaya untuk setiap 1.000 impressions yang didapatkan iklan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/crm-adalah" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">CRM</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">CRM adalah singkatan dari Customer Relationship Management, merupakan kombinasi sistem, teknologi, dan strategi yang digunakan perusahaan untuk mengatur dan menganalisis data pelanggan sepanjang customer lifecycle.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/css" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">CSS</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom"> CSS adalah singkatan Cascading Style Sheets dan merupakan aturan penyajian dokumen HTML atau XML. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cta-call-to-action" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">CTA (Call to Action)</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Call to action atau biasa disingkat CTA adalah istilah marketing untuk mengajak target audiens mengambil tindakan yang diinginkan bisnis.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cache" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cache</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cache adalah ruang penyimpanan sementara di dalam computing environment yang membantu website loading lebih cepat.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/campaign" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Campaign</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Campaign adalah segala upaya terorganisir untuk mencapai tujuan bisnis secara spesifik, misal meningkatkan brand awareness suatu produk atau mengumpulkan feedback dari konsumen.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/canvassing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Canvassing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Canvassing adalah aktivitas menghubungi calon pelanggan yang sebelumnya tidak memiliki interaksi atau hubungan apapun dengan suatu brand atau perusahaan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/carousel" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Carousel</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Carousel adalah fitur di media sosial yang memungkinkan pengguna mengunggah beberapa foto atau video dalam satu postingan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cashback" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cashback</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cashback adalah reward yang diberikan kepada pelanggan saat melakukan pembelian dengan menggunakan metode pembayaran tertentu.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/chat-gpt" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Chat GPT</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Chat GPT adalah chatbot AI yang dikembangkan oleh OpenAI. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/chatbot" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Chatbot</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Chatbot adalah software AI yang dapat berinteraksi dengan manusia melalui teks atau suara layaknya manusia sungguhan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/churn-rate" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Churn Rate</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Churn rate adalah metrik yang mengukur persentase kehilangan pelanggan, seperti berhentinya pelanggan membeli atau berlangganan produk.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/class-diagram" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Class Diagram</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Class diagram adalah salah satu diagram UML yang memperlihatkan struktur sistem seperti kelas, atribut, metode, dan hubungan antar kelas.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/clickbait" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Clickbait</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Clickbait adalah judul sensasional yang mendorong audiens untuk mengeklik tautan ke artikel, gambar, maupun video.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/client-server" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Client Server</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Client server adalah sebuah sistem di mana sebuah komputer atau perangkat yang bertindak sebagai server menyediakan layanan ke perangkat lain yang bertindak sebagai client.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag">Data Analysis</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cloud-computing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cloud Computing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cloud computing adalah pengiriman layanan komputasi melalui internet – termasuk jaringan, server, database, software, intelligence, dan analytics. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/coding" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Coding</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Coding adalah kegiatan mengubah ide, solusi, dan instruksi ke dalam bahasa yang bisa dipahami komputer.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cohort-analysis" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cohort Analysis</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cohort analysis adalah teknik yang digunakan untuk menganalisis dan memahami perilaku sekelompok individu dari waktu ke waktu.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/competitive-advantage" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Competitive Advantage</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Competitive advantage adalah atribut yang membedakan suatu brand dengan yang lainnya untuk membuat brand tersebut terlihat lebih unggul di tengah market.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/computational-thinking" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Computational Thinking</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Computational thinking adalah metode pemecahan masalah yang mereplikasi proses seorang programmer dalam membuat program dan algoritma komputer.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/construct-3" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Construct 3</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Construct 3 adalah sebuah program pembuatan game 2D gratis tanpa memerlukan kemampuan coding.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/content-marketing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Content Marketing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Content marketing adalah strategi pemasaran melalui pembuatan konten berkualitas supaya dapat menarik dan mempertahankan audiens.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/content-pillar" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Content Pillar</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Content pillar adalah pondasi agar konten perusahaan memiliki identitas yang mudah dikenali dan menjadi keseluruhan strategi konten media sosial bisnis.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/conversion" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Conversion</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Conversion adalah istilah untuk mendeskripsikan tindakan mengubah pengunjung website menjadi pelanggan yang membayar.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cookie" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Cookie</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Cookie adalah file kecil berisi informasi user saat mengunjungi suatu website. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/copyright" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Copyright</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Copyright adalah hak legal yang diberikan kepada pemilik kekayaan intelektual.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#319cff;color:#319cff" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/customer-acquisition" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Customer Acquisition</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Customer acquisition adalah proses dalam mendapatkan pelanggan potensial yang akan membeli produk/layanan. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/customer-journey" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Customer Journey</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Customer journey adalah seluruh pengalaman yang dialami customer saat berinteraksi dengan perusahaan/brand dan membantu perusahaan dalam memahami customer lebih baik.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/customer-retention" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Customer Retention</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Customer retention adalah upaya untuk membuat pelanggan melakukan pembelian berulang, puas dengan layanan perusahaan, dan tidak beralih ke kompetitor.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/customer-segmentation" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Customer Segmentation</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Customer segmentation adalah pembagian basis konsumen menjadi kelompok dengan kesamaan tertentu, seperti usia, jenis kelamin, ketertarikan, dan kebiasaan belanja.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/dns" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">DNS</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">DNS adalah sistem yang menerjemahkan nama domain yang dapat dibaca manusia menjadi alamat IP yang dapat dibaca komputer.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/dom" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">DOM</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">DOM adalah interface pemrograman untuk dokumen HTML dan XML.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/dart" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Dart</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Dart adalah bahasa pemrograman open-source berorientasi objek yang dikembangkan oleh Google.&nbsp;Dart umumnya digabungkan dengan Flutter untuk pengembangan mobile app.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/data-diskrit" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Data Diskrit</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Data diskrit adalah data yang berisi bulangan bulat, dan tak bisa dipecah menjadi angka pecahan atau desimal. </p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/data-lake" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Data Lake</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Data lake adalah tempat untuk menyimpan berbagai jenis informasi dalam format aslinya. Artinya, data lake dirancang untuk mengakomodasi semua jenis data.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/data-mining" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Data Mining</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Data mining adalah proses menganalisis atau memilah informasi secara otomatis yang dapat berguna dalam tempat penyimpanan data yang berukuran sangat besar (big data).</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/data-modelling" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Data Modelling</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Data modelling adalah proses mengumpulkan data dan mengubahnya menjadi diagram sederhana agar bisa menjadi informasi yang bisa digunakan sesuai kebutuhan bisnis.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/data-sekunder" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Data Sekunder</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Data sekunder adalah informasi yang diperoleh secara tidak langsung.&nbsp;Data sekunder berperan penting untuk mendapatkan pemahaman yang lebih dalam tentang suatu topik.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/data-warehouse" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Data Warehouse</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Data warehouse adalah sistem yang mengumpulkan data dari berbagai sumber di satu pusat penyimpanan.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/database" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Database</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Database adalah kumpulan data dan informasi yang secara khusus diatur supaya mudah dicari, diambil, dikelola, dan diperbarui.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/debugging" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Debugging</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Debugging adalah proses menemukan dan memperbaiki error atau bug dalam kode sistem perangkat lunak.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/deep-learning" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Deep Learning</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Deep learning adalah bagian dari machine learning yang bekerja dengan artificial neural networks, yaitu algoritma yang dirancang untuk meniru cara manusia berpikir dan belajar.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/devops" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">DevOps</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">DevOps adalah prinsip untuk mengotomatiskan serta mengintegrasikan proses antara pengembangan software (Dev) dan kegiatan operasional (Ops). Prinsip ini lahir dari tiga kombinasi, yaitu praktik, tools, dan culture.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#8a5ba6;color:#8a5ba6" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/diagram-batang" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Diagram Batang</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Diagram batang adalah teknik visualisasi data yang menggunakan batang berbentuk persegi panjang.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/diagram-garis" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Diagram Garis</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Diagram garis adalah teknik visualisasi data yang digunakan untuk menampilkan informasi melalui rangkaian titik data yang terhubung oleh garis lurus.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/diagram-pareto" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Diagram Pareto</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Diagram Pareto adalah gabungan diagram batang dan diagram garis yang menunjukkan urutan banyaknya suatu kejadian.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/digital-native" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Digital Native</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Digital native adalah generasi yang lahir di era digital, dan sejak kecilnya terpapar dengan informasi digital secara terus menerus.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/direct-marketing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Direct Marketing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Direct marketing adalah pemasaran yang dilakukan dengan memanfaatkan jalur komunikasi dan distribusi langsung ke konsumen tanpa perantara.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/distribusi-normal" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Distribusi Normal</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Distribusi normal adalah sebuah distribusi probabilitas yang digambarkan dengan kurva lonceng simetris yang melandai di bagian tepi dan memuncak di bagian tengah.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/domain" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Domain</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Domain adalah bagian dari alamat web (URL) yang dipakai untuk mencari lokasi suatu website atau halaman dari website.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/domain-authority" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Domain Authority</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">DA atau domain authority adalah metrik untuk memprediksi seberapa besar kemungkinan suatu website mendapatkan ranking di search engine result page (SERP) atau halaman hasil penelusuran.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/e-commerce" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">E-Commerce</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pengertian dari e-commerce adalah seluruh bisnis yang menjual barang dan jasa lewat internet.</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#de3078;color:#de3078" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/erd" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">ERD</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Entity-relationship diagram (ERD) adalah diagram yang menunjukkan hubungan antar entitas seperti orang, objek, dan konsep dalam suatu sistem.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" style="border-color:#f65616;color:#f65616" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/etl" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">ETL</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Extract, transform, load atau biasa disingkat ETL adalah proses integrasi data yang menggabungkan data dari berbagai sumber lalu dipindahkan ke satu penyimpanan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/efisien" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Efisien</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Efisien adalah ketika suatu pekerjaan bisa menghasilkan output maksimal dengan input atau usaha seminimal mungkin. Karena itu, efisiensi memerlukan adanya pengurangan sumber daya yang tidak perlu, termasuk waktu dan SDM.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/elevator-pitch" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Elevator Pitch</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Elevator pitch adalah ringkasan perkenalan yang berisi gambaran besar mengenai produk, layanan, atau project. Selain dalam bisnis, elevator pitch juga digunakan dalam interview kerja untuk menarik perhatian perekrut (recruiter).</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/email-marketing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Email Marketing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Email marketing adalah salah satu strategi yang memanfaatkan media email untuk mempromosikan produk dan efektif digunakan dalam menarik pelanggan. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/emulator" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Emulator</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Emulator adalah sebuah alat agar perangkat yang digunakan pengguna bisa meniru fungsi dari perangkat lain. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/end-user" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">End User</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">End user adalah orang yang menjadi pertimbangan tim development ketika merancang dan mendesain produk. Mereka bertindak sebagai konsumen akhir yang menggunakan produk.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/endorse" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Endorse</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Endorse adalah bentuk strategi marketing yang melibatkan publik figur dan orang-orang terkenal seperti content creator serta influencer dengan basis pengikut yang masif.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/engagement" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Engagement</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Dalam konteks digital marketing, engagement adalah istilah untuk menyebut interaksi antara merek dengan konsumen.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/engagement-rate" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Engagement Rate</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Engagement rate adalah sebuah metrik yang dapat mengukur interaksi audiens terhadap konten yang dibuat, terutama pada media sosial.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/enkripsi" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Enkripsi</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Enkripsi adalah metode mengamankan data dengan cara mengubah data yang tadinya mudah dibaca menjadi kumpulan tulisan yang tidak bisa dipahami atau disebut dengan chipertext message. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/ftp" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">FTP</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">File Transfer Protocol atau disingkat FTP adalah protokol internet yang digunakan untuk mentransfer file antar komputer melalui suatu jaringan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Data Analysis</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/fyp" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">FYP</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Kepanjangan FYP adalah For You Page dan merujuk ke halaman di TikTok yang menampilkan rekomendasi video untuk tiap akun.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/facebook-pixel" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Facebook Pixel</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Facebook Pixel atau saat ini dikenal dengan Meta Pixel adalah kode yang dipasang di website untuk mengumpulkan data tentang pengunjung. Data ini digunakan untuk mengukur, mengoptimalkan iklan, serta menargetkan audiens.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/firebase" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Firebase</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Firebase adalah platform Backend-as-a-Service (BaaS) yang memudahkan developer dalam mengembangkan web dan mobile app.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/firewall" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Firewall</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Firewall adalah sebuah program atau sistem yang bertugas menjaga keamanan jaringan komputer dari ancaman serangan siber seperti hacker, virus, dan malware. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/firmware" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Firmware</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Firmware adalah program yang ditanamkan dalam memori hardware agar perangkat bisa beroperasi dengan baik. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/flash-sale" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Flash Sale</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Flash Sale adalah strategi penjualan dengan diskon besar-besaran namun berbatas waktu.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/flowchart" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Flowchart</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Flowchart adalah diagram yang menggambarkan proses, sistem, atau algoritma komputer. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/framework" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Framework</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Framework adalah fondasi yang digunakan oleh developer maupun programmer untuk membuat aplikasi dan website. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/gerbang-logika" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Gerbang Logika</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Gerbang logika adalah komponen elektronik yang berfungsi untuk menghantarkan sinyal ketika kondisi tertentu terpenuhi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/github" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">GitHub</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">GitHub adalah platform pengembangan software online berbasis cloud yang digunakan untuk menyimpan, melacak, dan sebagai tempat kolaborasi antar developer dalam suatu proyek perangkat lunak.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/giveaway" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Giveaway</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Giveaway adalah pemberian hadiah dari satu pihak (brand) ke pihak lain (audiens) yang disertai syarat dan ketentuan. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/golang" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Golang</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Golang adalah bahasa pemrograman open-source yang dikembangkan oleh Google. Berguna untuk mengembangkan web, layanan cloud dan jaringan, serta jenis perangkat lunak lainnya</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/google-ads" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Google Ads</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Google Ads adalah layanan online advertising yang ada di Google untuk menargetkan audiens, mengarahkan traffic ke website, dan meningkatkan kunjungan in-store.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/google-analytics" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Google Analytics</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Google Analytics adalah alat analisis milik Google untuk membantu melacak dan menganalisis traffic atau kunjungan ke suatu website serta perilaku pengunjungnya.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/google-data-studio" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Google Data Studio</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Google Data Studio, sekarang disebut Looker Studio, adalah alat visualisasi dan pelaporan data milik Google.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/html" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">HTML</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">HTML adalah kepanjangan dari HyperText Markup Language (HTML), berfungsi memberitahu browser cara menampilkan kata dan gambar di halaman website.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/http" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">HTTP</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">HTTP adalah protokol yang digunakan untuk mentransfer teks, gambar, suara, video, dan file multimedia lainnya melalui halaman website.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/https" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">HTTPS</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">HTTPS adalah protokol keamanan website dengan keamanan tingkat tinggi yang menjamin data pengunjung website terlindungi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/hipotesis" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Hipotesis</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Hipotesis adalah dugaan awal/sementara, atau penjelasan yang mungkin untuk suatu peristiwa.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/hosting" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Hosting</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Hosting adalah layanan yang menyimpan seluruh data website di internet. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/ip-address" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">IP Address</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">IP Address adalah alamat berisi kumpulan nomor atau karakter untuk membedakan antar device yang terhubung ke internet.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/isp" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">ISP</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Internet Service Provider atau ISP adalah perusahaan yang menyediakan akses ke internet untuk pelanggan pribadi maupun organisasi. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/impression" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Impression</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Impression adalah jumlah setiap kali konten ditampilkan di layar audiens.Perolehan impression bisa berasal dari beragam konten di platform mana saja.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/impulsive-buying" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Impulsive Buying</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Impulsive buying adalah dorongan yang kuat untuk berbelanja suatu produk secara tiba-tiba tanpa merencanakannya. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/incognito" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Incognito</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Mode incognito adalah tempat di mana user bisa menjelajahi web tanpa ada catatan riwayat yang disimpan di perangkat.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/indexing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Indexing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Indexing adalah proses menyusun data atau informasi supaya dapat diakses sehingga seseorang dapat dengan mudah menemukan informasi sesuai pencariannya. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/infografis" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Infografis</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Infografis adalah representasi visual yang memberikan garis besar suatu informasi atau data agar lebih mudah dipahami dalam waktu singkat.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Data Analysis</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/instastory" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Instastory</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Instastory adalah fitur Instagram yang memungkinkan pengguna untuk berbagi foto dan video yang akan hilang setelah 24 jam.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/intranet" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Intranet</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Intranet adalah jaringan pribadi yang digunakan dalam suatu organisasi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/iot-internet-of-things" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">IoT (Internet of Things)</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">IoT (Internet of Things) adalah teknologi yang menghubungkan berbagai perangkat lewat jaringan internet.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/json" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">JSON</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">JavaScript Object Notation atau JSON adalah suatu format yang digunakan untuk menyimpan dan mengirimkan data.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/javascript" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">JavaScript</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">JavaScript adalah bahasa pemrograman yang digunakan developer untuk membuat halaman web interaktif sehingga meningkatkan user experience di website.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/jira" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Jira</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Jira adalah tools project management yang dirancang untuk mengatur sekaligus melacak proyek dan dibangun berdasarkan metodologi Agile.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/k-means-clustering" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">K Means Clustering</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">K Means clustering adalah algoritma unsupervised machine learning yang digunakan untuk pengelompokan data dan pengenalan pola.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/kol" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">KOL</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Key Opinion Leader atau KOL adalah seseorang yang dianggap ahli di bidang tertentu dan pendapatnya dihormati publik.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/kpi" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">KPI</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">KPI adalah serangkaian metrik pengukuran kuantitatif yang digunakan untuk mengukur kinerja di suatu perusahaan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/keyword" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Keyword</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Keyword adalah kata kunci yang paling mewakili isi suatu artikel atau konten.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/korelasi" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Korelasi</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Korelasi adalah ukuran statistik untuk mengetahui sejauh mana hubungan antara dua variabel atau lebih.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/kotlin" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Kotlin</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Kotlin adalah bahasa pemrograman bersifat open-source yang kompatibel dengan Java, dan dapat dikompilasi menjadi JavaScript. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/kubernetes" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Kubernetes</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Kubernetes adalah platform open-source yang dikembangkan oleh Google untuk mengelola banyak kontainer secara otomatis.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/lms" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">LMS</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">LMS (Learning Management System) adalah software yang dirancang untuk mengelola materi dan aktivitas pembelajaran online.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/landing-page" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Landing Page</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Landing page adalah salah satu laman web yang ditargetkan untuk menarik audiens agar melakukan tindakan tertentu.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/laravel" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Laravel</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Laravel adalah framework PHP open-source yang menyediakan berbagai fitur untuk membuat website berbasis PHP modern.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/lead-generation" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Lead Generation</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Lead generation adalah serangkaian proses yang dilakukan untuk mengubah leads, atau orang yang tertarik dengan suatu bisnis, menjadi pembeli</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/leads" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Leads</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Leads adalah orang-orang yang menunjukkan ketertarikan terhadap suatu produk atau jasa yang ditawarkan, salah satunya melalui pengumpulan form di landing page.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/linux" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Linux</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Linux adalah sistem operasi open source yang banyak digunakan baik oleh perusahaan maupun perorangan.&nbsp;Salah satu platform yang paling populer, Android, menggunakan Linux sebagai dasarnya.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/mvc" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">MVC</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">MVC adalah pola arsitektur atau desain yang membagi kode pada aplikasi menjadi tiga komponen, yaitu model, view, dan controller, di mana ketiganya memiliki fungsi berbeda.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/mvp" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">MVP</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Minimum viable product (MVP) adalah versi produk terbaru yang hanya berisikan fitur inti sesuai dengan permintaan dan kebutuhan pelanggan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/mvvm" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">MVVM</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">MVVM adalah pola desain yang membagi fungsi kode aplikasi menjadi tiga lapisan, yaitu Model, View, dan ViewModel.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/machine-learning" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Machine Learning</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Salah satu bagian dari artificial intelligence yang memungkinkan mesin belajar dari data atau pengalaman masa lalu (data historis) sehingga tidak perlu diprogram secara manual untuk melakukan seluruh pekerjaan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/mailchimp" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Mailchimp</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Mailchimp adalah platform marketing yang membantu perusahaan dalam mengelola serta berinteraksi dengan pelanggan dan klien. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/mailerlite" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">MailerLite</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">MailerLite adalah sebuah platform pemasaran dan otomasi e-mail.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/margin" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Margin</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Margin adalah selisih antara harga jual dan biaya yang dikeluarkan untuk memproduksi atau mendapatkan suatu produk atau layanan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/market-share" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Market Share</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pangsa pasar atau market share adalah metrik yang menunjukkan persentase penjualan suatu perusahaan dari total penjualan di pasar selama periode waktu tertentu.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/marketing-mix" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Marketing Mix</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Marketing mix adalah beberapa fokus area yang dapat digabungkan dalam membuat strategi pemasaran perusahaan. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/meta-title" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Meta Title</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Meta title adalah judul konten yang muncul atau terlihat di halaman mesin pencarian atau SERP (Search Engine Results Page).&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/metadata" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Metadata</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Metadata adalah informasi yang mendeskripsikan suatu data.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/metaverse" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Metaverse</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Metaverse adalah dunia virtual yang mereplikasi tampilan dunia nyata dan segala aspek di dalamnya, termasuk interaksi sosial, perdagangan, dan kepemilikan properti. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/microsoft-excel" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Microsoft Excel</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Microsoft Excel adalah program pengolahan dan penghitungan data yang dikeluarkan oleh Microsoft.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/mind-mapping" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Mind Mapping</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Mind mapping adalah teknik untuk mengatur dan mengembangkan pikiran, ide, serta informasi secara visual.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/mockup" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Mockup</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Mockup adalah visualisasi atau gambaran akhir dari sebuah produk yang akan diproduksi, termasuk produk fisik atau digital seperti website dan aplikasi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/monetisasi" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Monetisasi</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Monetisasi adalah proses mendapatkan penghasilan atau uang melalui konten yang telah dibuat.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/mysql" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">MySQL</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">MySQL adalah open-source relational database management system (RDBMS) yang digunakan untuk mengelola database suatu website</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/nps" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">NPS</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">NPS (Net Promoter Score) adalah metrik yang mengukur loyalitas dan kepuasan pelanggan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/native-advertising" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Native Advertising</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Native advertising adalah bentuk iklan berbayar yang tampilan, nuansa, fungsi, kualitas, dan format medianya sama dengan platform di mana iklan tersebut muncul.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/natural-language-processing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Natural Language Processing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Salah satu cabang artificial intelligence yang membantu komputer memahami bahasa manusia baik secara lisan maupun tertulis</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/neural-network" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Neural Network</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Neural network adalah sekumpulan algoritma machine learning yang dirancang untuk mengenali pola data dengan meniru cara kerja sel saraf manusia (neuron).</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/niche-market" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Niche Market</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Niche market adalah sekelompok orang yang ingin melakukan pembelian produk atau jasa yang spesifik.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/node-js" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Node.js</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Node.js adalah runtime environment (RTE) atau lingkungan eksekusi untuk JavaScript yang bersifat lintas platform dan open-source sehingga memungkinkan JavaScript dapat dijalankan di luar browser.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/okr" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">OKR</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">OKR adalah seperangkat cara untuk menentukan, mengkomunikasikan, dan memantau tujuan yang ditetapkan perusahaan. OKR dipakai oleh perusahaan seperti Google. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/oop" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">OOP</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Object-Oriented Programming (OOP) adalah metode programming yang berorientasi kepada objek.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/orm" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">ORM</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">ORM adalah cara agar kueri database bisa dilakukan dengan selain bahasa SQL, seperti JavaScript atau Python.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/onedrive" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">OneDrive</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">OneDrive adalah penyimpanan cloud yang disediakan oleh Microsoft. Fungsinya sebagai platform virtual tempat menyimpan semua dokumen dan file di internet untuk user yang memiliki akun Microsoft.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Data Analysis</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/open-source" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Open Source</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Open source adalah sebuah program yang kode dasarnya dapat dengan bebas digunakan dan dimodifikasi oleh siapapun.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/p-value" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">P Value</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">P Value atau nilai p adalah nilai yang digunakan untuk mengetahui seberapa besar kemungkinan hipotesis yang diajukan sesuai dengan hasil penelitian.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/pwa" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">PWA</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Progressive Web App atau disingkat PWA adalah aplikasi yang dibuat dengan mengombinasikan aplikasi web dan aplikasi seluler. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/pain-point" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pain Point</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pain point adalah masalah dari calon pelanggan bisnis yang membuat mereka tidak nyaman dan membutuhkan solusi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/parameter" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Parameter</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Parameter adalah nilai numerik yang menggambarkan karakteristik seluruh anggota populasi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/pay-per-click" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pay Per Click</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pay per click adalah model digital advertising berbayar yang mengharuskan pengiklan membayar sejumlah fee setiap kali iklannya mendapat click.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/pengolahan-data" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pengolahan Data</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pengolahan data adalah proses mengubah data mentah menjadi informasi yang bermakna dan berguna.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/personal-branding" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Personal Branding</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Personal branding adalah proses menciptakan citra atau image diri seorang individu.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/phising" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Phising</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Phising adalah bentuk penipuan lewat media komunikasi online (seperti e-mail, telepon, pesan teks) di mana penyerang menyamar sebagai individu atau organisasi yang memiliki reputasi baik.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/pivot-table" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pivot Table</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Salah satu fungsi di Excel untuk meringkas informasi yang ada di tabel database atau baris data. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/platform" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Platform</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Platform adalah hardware atau software yang menggerakkan suatu aplikasi atau layanan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/polymorphism" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Polymorphism</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Polymorphism adalah entitas seperti variabel, function, atau objek lain yang ketika ditampilkan memiliki bentuk yang berbeda-beda.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/press-release" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Press Release</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Siaran pers atau press release adalah pengumuman resmi yang dibuat oleh perusahaan/bisnis menggunakan format tertentu untuk memberitahukan informasi penting kepada publik.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/probabilitas" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Probabilitas</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Probabilitas adalah angka yang menyatakan kemungkinan terjadinya suatu peristiwa, dan salah satu tujuannya adalah untuk mengambil keputusan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/product-backlog" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Product Backlog</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Product backlog adalah teknik memecah tugas menjadi beberapa bagian yang dirangkum dalam sebuah daftar prioritas untuk memastikan produk tetap kompetitif di kemudian hari.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/product-life-cycle" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Product Life Cycle</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Product life cycle adalah tahapan yang dilalui suatu produk mulai dari pengenalan ke pasar hingga akhirnya menghilang dari pasar.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/product-requirement-document" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Product Requirement Document (PRD)</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">PRD atau product requirement document adalah dokumen panduan pengembangan produk untuk mendefinisikan tujuan, fitur, dan apa saja yang harus disertakan dalam suatu produk.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/prototype" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Prototype</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Prototype adalah replika atau model kerja sederhana dari produk software yang sesungguhnya untuk tujuan demonstrasi dan sebagai bagian dari proses pengembangan perangkat lunak (software development).</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/pseudocode" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Pseudocode</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Pseudocode adalah cara penulisan kode dan algoritma menggunakan bahasa umum yang digunakan sehari-hari sehingga lebih mudah dipahami, terutama bagi orang tanpa latar belakang programming.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/qr-code" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">QR Code</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">QR code adalah singkatan dari quick response code, salah satu jenis barcode yang dapat dibaca dengan mudah oleh perangkat digital.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/query" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Query</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Query adalah perintah untuk meminta informasi dalam sebuah database yang dapat dibuat menggunakan bahasa SQL untuk membuat laporan atau analisis data.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/r" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">R</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">R adalah bahasa pemrograman yang digunakan untuk keperluan statistik, khususnya untuk orang yang bertugas menangani dan bekerja dengan data.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/rad" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">RAD</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">RAD adalah metodologi pengembangan software dengan menggunakan prototype dan feedback yang berulang-ulang. Tujuannya adalah untuk menghasilkan software berkualitas tinggi dalam waktu singkat.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/roi" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">ROI</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">ROI adalah ukuran kinerja yang digunakan untuk menghitung efisiensi atau profitabilitas suatu investasi bisnis.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/rate-card" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Rate Card</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Rate card adalah dokumen untuk menyatakan harga semua layanan yang disediakan pihak penyedia jasa atau layanan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/react" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">React</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">React adalah library JavaScript open-source yang digunakan untuk membangun user interface. React diperkenalkan pada tahun 2013 oleh Facebook dan saat ini dikelola oleh Facebook dan komunitas developer.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/react-native" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">React Native</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">React Native adalah framework untuk membuat aplikasi seluler yang bisa diakses pada berbagai platform, dan dibuat berdasarkan library JavaScript yang disebut React.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/rebranding" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Rebranding</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Rebranding adalah menciptakan tampilan dan nuansa baru dari suatu brand dengan melakukan perubahan pada logo, simbol, bahkan visi dan misi brand terkait.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/reduksi-data" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Reduksi Data</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Reduksi data adalah proses pengurangan volume data asli dan merepresentasikannya dalam volume yang jauh lebih kecil dengan tetap menjaga integritas data asli.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/reels" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Reels</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Reels adalah fitur short video di Instagram yang bisa diedit sedemikian rupa agar lebih menarik.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/referral" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Referral</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Referral adalah tindakan yang dilakukan pelanggan untuk merekomendasikan layanan atau produk yang ditawarkan suatu bisnis. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/regresi" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Regresi</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Regresi adalah teknik dalam statistika yang digunakan untuk memprediksi hubungan antar variabel, yaitu variabel dependen dan independen.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/relational-database" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Relational Database</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Relational database adalah kumpulan item data yang hubungannya sudah ditentukan. Data disimpan dalam baris dan kolom yang secara kolektif membentuk satu atau lebih tabel yang memiliki relasi satu sama lain.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/repeater" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Repeater</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Repeater adalah hardware yang digunakan untuk memperkuat dan memperluas area jangkauan network. Alat ini bekerja dengan meregenerasi sinyal masuk sebelum mentransmisikannya kembali.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/retargeting" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Retargeting</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Retargeting adalah salah satu metode periklanan online untuk menjangkau orang-orang yang pernah mengunjungi suatu website. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/retur" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Retur</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Retur adalah pengembalian barang oleh customer ke merchant karena alasan tertentu, misalnya barang rusak atau tak sesuai deskripsi. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/robotika" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Robotika</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Robotika adalah teknik yang melibatkan pengkonsepan, pembuatan, dan pengoperasian robot.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/routing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Routing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Routing adalah proses pemilihan jalur transfer data untuk komunikasi antar jaringan yang efisien. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/sdlc" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">SDLC</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Software Development Life Cycle atau SDLC adalah metodologi untuk membuat software berkualitas tinggi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/sem" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">SEM</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">SEM adalah singkatan dari Search Engine Marketing, salah satu channel marketing berbayar yang juga menggunakan platform search engine seperti SEO. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/seo-off-page" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">SEO Off Page</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">SEO off-page adalah seluruh aktivitas untuk meningkatkan ranking melalui jalur eksternal.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/seo-on-page" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">SEO On page</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">SEO on-page adalah upaya pengoptimalan bagian halaman website untuk meningkatkan traffic dan meraih peringkat teratas di mesin pencari.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/sla-adalah" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">SLA</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Service-level Agreement atau SLA adalah kontrak yang dibuat dalam bentuk dokumen dan disetujui antara pemilik bisnis atau penyedia layanan dengan customer.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/ssd" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">SSD</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">SSD adalah salah satu perangkat memori berbasis chip untuk menyimpan, mengubah, dan menampilkan data pada perangkat yang dipasangkan. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/saas" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">SaaS</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Software as a Service atau disingkat SaaS adalah salah satu jenis model layanan cloud computing di mana software sudah siap digunakan tanpa harus melakukan konfigurasi atau instalasi apa pun.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/sales-funnel" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sales Funnel</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sales funnel adalah representasi perjalanan pelanggan dari awareness hingga pembelian.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/scrum" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Scrum</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Scrum adalah metode Agile yang membagi rencana jangka panjang menjadi beberapa periode kerja jangka pendek yang disebut sprint.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/segmentasi-pasar" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Segmentasi Pasar</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Segmentasi pasar adalah proses membagi pangsa pasar berdasarkan karakteristik tertentu supaya perusahaan dapat menawarkan produk atau layanan yang sesuai.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/sequence-diagram" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sequence Diagram</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sequence diagram adalah contoh diagram UML yang menunjukkan interaksi antar objek atau komponen dalam suatu sistem atau proses secara visual.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/server" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Server</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Server adalah perangkat komputer khusus yang menyediakan informasi dan data untuk komputer komputer klien.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/sitemap" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sitemap</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sitemap adalah sebuah file atau halaman yang berisi daftar URL dari seluruh halaman penting suatu website.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/six-sigma" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Six Sigma</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Six Sigma adalah metode dalam project management untuk membantu perusahaan mengurangi cacat (defect) produk dan meningkatkan proses bisnis.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/skala-ordinal" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Skala Ordinal</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Skala ordinal adalah salah satu jenis skala pengukuran dan ada di urutan kedua. Skala ini mewakili urutan atau order.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/skala-pengukuran" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Skala Pengukuran</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Skala pengukuran adalah skala untuk mengukur, mengklasifikasikan, dan menggambarkan hubungan antara nilai-nilai yang dikumpulkan dalam variabel.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/soft-selling" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Soft Selling</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Soft selling adalah salah satu taktik penjualan yang membuat customer nyaman dan mengetahui informasi produk sebelum memutuskan untuk membeli.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/spam" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Spam</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Spam adalah pesan tidak diharapkan yang dikirim melalui media komunikasi elektronik.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/sprout-social" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sprout Social</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sprout Social adalah tool manajemen media sosial yang memungkinkan pengguna untuk membangun hubungan lebih kuat dengan audiens di media sosial.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/standar-deviasi" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Standar Deviasi</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Standar deviasi adalah nilai yang mengukur penyebaran data terhadap nilai rata-rata (mean) data tersebut. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/statistika-deskriptif" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Statistika Deskriptif</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Statistika deskriptif adalah metode dalam statistika untuk mengumpulkan, mengklasifikasikan, meringkas, menginterpretasikan, dan menyajikan data secara deskriptif atau eksplanasi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/stitch" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Stitch</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Stitch adalah fitur di TikTok yang memungkinkan pengguna mencuplik bagian dari video orang lain dan menambahkannya ke video mereka sendiri.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/struktur-data" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Struktur Data</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Struktur data adalah cara menyimpan, mengambil, dan menyusun data. Struktur data memungkinkan data yang ada di komputer lebih mudah diakses dan diperbarui.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/subnet-mask" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Subnet Mask</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Subnet mask adalah nomor alamat dari internal IP address yang membedakan antara IP address pada perangkat satu dan lainnya.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/sunk-cost" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Sunk Cost</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Sunk cost adalah pengeluaran yang tidak dapat diperoleh kembali.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag pm">Product Management</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/supervised-learning" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Supervised Learning</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Supervised learning adalah pendekatan dalam machine learning dan artificial intelligence yang menggunakan kumpulan data berlabel. Data tersebut berfungsi melatih algoritma dalam mengklasifikasikan data atau memprediksi hasil secara akurat.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/switch" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Switch</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Switch adalah alat yang digunakan untuk menghubungkan perangkat dan meneruskan paket data dari dan untuk perangkat tersebut.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/tdd" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">TDD</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">TDD adalah pengembangan software di mana pengujiannya langsung dilakukan setelah setiap unit fungsi dibuat, alih-alih setelah keseluruhan software selesai. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/tagline" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Tagline</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Tagline adalah deskripsi singkat berisi value, pesan, dan aspek penting dari suatu brand. Tagline digunakan untuk tujuan branding.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/tailwind" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Tailwind</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Tailwind CSS adalah utility-first framework CSS yang didesain untuk mempermudah dan mempercepat pembuatan aplikasi menggunakan desain custom.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/tensorflow" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">TensorFlow</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">TensorFlow adalah framework open-source milik Google untuk mengembangkan dan melatih berbagai model yang ada di machine learning, deep learning, serta pekerjaan yang berkaitan dengan analisis statistik lainnya.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/testimoni" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Testimoni</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Testimoni adalah pernyataan dari orang-orang yang telah menggunakan produk/layanan bisnis dan merasa puas dengan produk tersebut.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/tipe-data" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Tipe Data</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Tipe data adalah klasifikasi value suatu variabel yang membantu operasi komputer untuk mengenali nilai data tanpa menghasilkan output error.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/tipografi" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Tipografi</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Tipografi adalah seni mengatur tulisan agar ketika ditampilkan bisa menarik secara visual. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/topologi-star" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Topologi Star</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Topologi Star adalah konfigurasi jaringan yang seluruh perangkatnya terhubung ke node pusat.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/trademark" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Trademark</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Trademark adalah simbol, kata, frase, dan desain yang dapat mencerminkan produk atau jasa dari suatu perusahaan dan membedakannya dari produk atau jasa kompetitor.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/traffic" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Traffic</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Traffic atau website traffic adalah segala informasi tentang setiap pengunjung (visitor) suatu website, dari jumlah pengunjung, durasi kunjungan, dan segala aktivitas di dalam situs. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/triangulasi-data" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Triangulasi Data</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Triangulasi data adalah metodologi yang digunakan untuk meningkatkan validitas dan reliabilitas suatu penelitian dengan menggabungkan data dari berbagai sumber, metode, atau teori.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/uml" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">UML</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">UML (Unified Modeling Language) adalah bahasa visual yang digunakan untuk membuat diagram dan model yang mewakili sistem software. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/url" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">URL</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">URL adalah singkatan dari Uniform Resource Locator dan merupakan halaman website yang menjadi lokasi situs atau dokumen di internet. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/usp" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">USP</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">USP (Unique Selling Point/Unique Selling Preposition) adalah hal yang membedakan suatu produk dengan produk pesaingnya.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/ubersuggest" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Ubersuggest</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Ubersuggest adalah tool SEO yang digunakan untuk menghasilkan ide keyword dan konten baru. Tool ini merupakan alat SEO all-in-one yang juga bisa dimanfaatkan untuk melacak ranking website, melakukan analisis kompetitor, mengaudit situs, dan banyak lainnya.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/ubuntu" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Ubuntu</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Ubuntu adalah sistem operasi berbasis Linux dan open-source yang dikembangkan oleh perusahaan Canonical Ltd. Sistem operasi ini dirancang untuk meningkatkan pengembangan di smartphone, komputer, dan network server.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/uji-homogenitas" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Uji Homogenitas</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Uji homogenitas adalah salah satu metode uji asumsi non-parametrik untuk mengetahui apakah dua atau lebih sampel dari populasi yang berbeda memiliki distribusi nilai yang sama.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/up-selling" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Up Selling</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Up Selling adalah strategi marketing yang membuat customer membeli produk yang lebih mahal atau lebih banyak dari produk yang mereka ingin beli.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/use-case-diagram" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Use Case Diagram</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Use case diagram adalah sebuah diagram yang menggambarkan perilaku sebuah sistem serta interaksi antara sistem dengan pengguna (disebut dengan istilah aktor).</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/user-experience" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">User Experience (UX)</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">User experience adalah keseluruhan perjalanan yang dilalui pengguna saat mereka menggunakan suatu produk. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/user-generated-content" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">User Generated Content</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">User Generated Content (UGC) adalah semua jenis konten mengenai suatu produk atau layanan yang dibuat oleh pengguna di platform online.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/user-interface" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">User Interface</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">User Interface adalah elemen visual yang berguna untuk menghubungkan pengguna (user) dengan sistem teknologi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/vpn" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">VPN</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Virtual Private Network atau VPN adalah layanan online yang dapat melindungi privasi dan koneksi internet.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/vps" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">VPS</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">VPS (Virtual Private Server) adalah layanan hosting web yang server fisiknya dibagi menjadi beberapa server virtual dengan sumber daya dan sistem operasinya sendiri.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/viral-marketing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Viral Marketing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Viral marketing adalah teknik pemasaran yang melibatkan penyebaran informasi dari mulut ke mulut melalui internet</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/virtual-reality" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Virtual Reality</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">VR atau Virtual Reality adalah teknologi komputer untuk menciptakan lingkungan 3D semirip mungkin dengan dunia nyata dan membuat pengguna bisa berinteraksi di dalamnya.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/virus-trojan" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Virus Trojan</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Virus Trojan adalah jenis malware yang menyerang komputer dengan menyamar sebagai program atau sistem operasional resmi.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/web-dinamis" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web Dinamis</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web dinamis adalah jenis website yang kontennya dapat berubah sesuai dengan permintaan user atau input yang diterima.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/web-proxy" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web Proxy</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web proxy adalah server yang bertindak sebagai perantara perangkat pengguna dan internet.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/web-server" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web Server</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web server adalah salah satu jenis server yang khusus ditujukan untuk menyediakan layanan permintaan data di web.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/web-service" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web Service</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web service adalah penghubung antara dua perangkat, sistem, atau aplikasi dengan bahasa yang berbeda untuk saling bertukar data.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag da">Data Analytics</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/web3" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Web3</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Web3 adalah generasi internet terbaru yang sedang dikembangkan menggunakan teknologi blockchain.&nbsp;</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/white-box-testing" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">White Box Testing</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">White Box Testing adalah teknik pengujian software yang berfokus pada struktur internal atau desain sistem. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/wireframe" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Wireframe</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Wireframe adalah kerangka dasar sebuah website atau app yang menggambarkan isi dan fungsionalitasnya.&nbsp;Wireframe biasanya digunakan di tahap awal web development.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/word-of-mouth" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Word of Mouth</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Word of Mouth adalah teknik membagikan informasi mengenai suatu produk atau layanan ke orang lain, biasanya melalui komunikasi lisan.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/xml" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">XML</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">XML (eXtensible Markup Language) adalah bahasa markup yang digunakan untuk mendeskripsikan data dalam format yang dapat dibaca baik oleh manusia maupun mesin.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/yandex" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Yandex</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">Yandex adalah browser asal Rusia yang berfungsi sebagai search engine, serta menyediakan layanan lain seperti online advertising, e-mail, dan voice assistant. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/youtube-shorts" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">YouTube Shorts</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">YouTube Shorts adalah video pendek dari YouTube berdurasi maksimal 60 detik yang dapat dimonetisasi. </p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag dm">Digital Marketing</p>
                                </a>
                                </div>
                                <div role="listitem" class="w-dyn-item" id="">
                                <a href="/kosakata/cpanel" class="keyword-item w-inline-block">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">cPanel</h4>
                                    <p fs-cmsfilter-field="content" class="card-panduan-body margin-bottom">cPanel adalah panel kontrol untuk membangun dan memelihara website dengan mudah tanpa perlu memahami pengetahuan teknikal mengenai web development.</p>
                                    <p fs-cmsfilter-field="vertical" class="card-tag">Software Engineering</p>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
