@extends('landing-page.layouts.app')
@section('title', 'Panduan Karir | Razen Blog')

@section('header')
    <header id="top" data-w-id="2241d6d7-0a71-6df6-6b18-88715515709b" class="hero-revoupedia-list">
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
        <div class="page-padding-hero">
            <div class="container-large">
                <div class="padding-vertical padding-xhuge relative">
                    <div class="hero-icon-lright">
                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62ac9854f2b6038959089a63_hero-panduan-icon-05.svg" loading="lazy" alt="" class="hero-icon-image">
                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62ac9854444be31f1767f988_hero-panduan-icon-03.svg" loading="lazy" alt="" class="hero-icon-image">
                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62ac9854be399b81fbe335ce_hero-panduan-icon-01.svg" loading="lazy" alt="" class="hero-icon-image">
                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62ac9c3c1536834ebf3abdc8_hero-icon-block-2.svg" loading="lazy" alt="" class="hero-icon-tablet">
                    </div>
                    <div class="hero-icon-left">
                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62ac98564ef09c75c3a41032_hero-panduan-icon-06.svg" loading="lazy" alt="" class="hero-icon-image">
                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62ac985657b8593af1e7ebdd_hero-panduan-icon-04.svg" loading="lazy" alt="" class="hero-icon-image">
                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62ac98545ae40f09c8af0173_hero-panduan-icon-02.svg" loading="lazy" alt="" class="hero-icon-image">
                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62ac9c3c99072dafe2d55873_hero-icon-block-1.svg" loading="lazy" alt="" class="hero-icon-tablet">
                    </div>
                    <div class="program-header_center-content">
                        <div class="program-title_block">
                            <div class="program-title_wrapper">
                                <h1 style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="program_header_heading margin-bottom_1">Panduan Karir</h1>
                                <div style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="program-title_copy">Panduan Karir ini menyediakan semua informasi yang kamu butuhkan untuk bantu pahami lebih detail karir impianmu!</div>
                            </div>
                            <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62af357852fa1be72dd6ea45_hero-icon-mobile.svg" loading="lazy" alt="" class="hero-icon-mobile">
                        </div>
                        <div style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="filter-block">
                            <a href="/revoupedia/panduan-karir" aria-current="page" class="filter-category state-active w-button w--current">panduan karir</a>
                            <a href="/revoupedia/panduan-teknis" class="filter-category w-button">panduan teknis</a>
                            <a id="w-node-_6edcaf65-92f8-1254-d977-87cbf07ecfc7-1b121a22" href="/revoupedia/kosakata" class="filter-category w-button">Kosakata</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
<section class="section-panduan_teknis position-relative">
    <div class="padding-vertical padding-medium">
        <div class="page-padding">
            <div class="container-large">
                <div fs-cmsload-element="scroll-anchor" fs-cmsfilter-element="scroll-anchor" class="list-article_grid">
                    <div id="back-top" class="button-filter-wrapper">
                        <div class="tag-wrapper"></div>
                        <a data-w-id="9feed43c-4474-6008-f1ae-214244d0a388" href="#" class="button-filter w-inline-block">
                            <div class="button-filter-text">Filter </div>
                            <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62af37d0612c9740f9d2fd71_icon_filter.svg" loading="lazy" alt="" class="button-filter-image">
                        </a>
                    </div>
                    <div id="w-node-_8fec9240-121c-d38d-d8d8-bae326e54bd0-1b121a22" data-w-id="8fec9240-121c-d38d-d8d8-bae326e54bd0" class="filter-list_wrapper">
                        <div class="filter-content">
                            <div class="button-close-wrapper">
                                <a data-w-id="b177d873-9692-fa33-aa17-d1a4e8a1c651" href="#" class="button-close w-inline-block">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62af3bf7cd95df46be24dd29_icon_close.svg" loading="lazy" alt="">
                                </a>
                            </div>
                            <div class="filter-form_block w-form">
                                <form method="get" name="wf-form-Filter-Form" data-name="Filter Form" fs-cmsfilter-element="filters" fs-cmssort-element="list" id="wf-form-Filter-Form" class="filter-form_wrapper" aria-label="Filter Form">
                                    <div class="form-input_wrapper">
                                        <input type="text" class="form-input_search w-input" maxlength="256" name="Input-Search" fs-cmsfilter-field="*" data-name="Input Search" placeholder="Cari artikel" id="Input-Search">
                                        <img loading="lazy" src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a607d5ff170835c2c1819e_icon-search.svg" alt="" class="form-search_icon">
                                    </div>
                                    <h4 class="card-panduan-title margin-bottom-2">Urutkan</h4>
                                    <div class="sort-field_wrapper">
                                        <a href="#" fs-cmssort-desc="is-desc" fs-cmssort-element="trigger" fs-cmssort-field="update-date" fs-cmssort-asc="is-asc" class="sort-button w-button" role="columnheader" tabindex="0" aria-sort="none">Tanggal Publikasi</a>
                                    </div>
                                    <div class="filter-title_wrapper">
                                        <h4 class="card-panduan-title">Panduan Karir</h4>
                                        <a fs-cmsfilter-element="reset" href="#" class="reset-text">Hapus Semua</a>
                                    </div>
                                    <div class="filter-tag_wrapper form-sort_wrapper">
                                        <div class="w-dyn-list">
                                            <div role="list" class="w-dyn-items">
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-1" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Back End Developer</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-2" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Front End Developer</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-3" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Web Developer</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-4" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Software Engineer</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-5" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Programmer</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-6" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Content Creator</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-7" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Content Writer</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-8" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Business Analyst</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-9" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Data Scientist</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-10" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Data Analyst</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-11" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Project Manager</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-12" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Product Manager</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-13" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Social Media Specialist</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-14" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">Digital Marketer</span>
                                                    </label>
                                                </div>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-15" value="most-recent" data-name="sort-by-radio" style="opacity:0;position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">SEO Specialist</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="w-form-done" tabindex="-1" role="region" aria-label="Filter Form success"></div>
                                <div class="w-form-fail" tabindex="-1" role="region" aria-label="Filter Form failure"></div>
                            </div>
                        </div>
                    </div>
                    <div id="w-node-_7b5acc26-a2fb-462b-b3cd-506b76c4b17c-1b121a22" class="content-list_wrapper">
                        <div class="collection-panduan w-dyn-list">
                            <div fs-cmsload-mode="pagination" fs-cmsfilter-element="list" fs-cmssort-element="list" fs-cmsload-element="list" role="list" class="content-list_panduan_grid_1 w-dyn-items">
                            <div role="listitem" class="collection-item_panduan w-dyn-item">
                                <a href="/panduan-karir/back-end-developer-resume" class="card-panduan direcion-orizontal w-inline-block">
                                <div class="card-panduan-content background-yellow">
                                    <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/64217198bbdb6992133c5a47_resume%20back%20end%20developer.png" loading="lazy" alt="" sizes="(max-width: 479px) 91vw, (max-width: 991px) 34vw, (max-width: 1439px) 10vw, 122.6796875px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/64217198bbdb6992133c5a47_resume%20back%20end%20developer-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/64217198bbdb6992133c5a47_resume%20back%20end%20developer.png 601w" class="card-panduan-image_full">
                                </div>
                                <div class="card-panduan-text direction-vertical full-width">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Contoh Back End Developer Resume dan Tips Membuatnya</h4>
                                    <div class="tag-topic">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a60158ddad956b7abedd37_icon-srticle-category.svg" loading="lazy" alt="" class="button-circle-image margin-right">
                                    <p fs-cmsfilter-field="topic" class="card-panduan-body text-color-black">Back End Developer</p>
                                    </div>
                                    <p fs-cmsfilter-field="paragraph" class="card-panduan-body margin-bottom_16">Kamu perlu membuat back end developer resume yang keren jika kamu tertarik meniti karir di bidang ini.</p>
                                    <div class="divider-card_horizontal"></div>
                                    <div class="card-author_block">
                                    <div style="background-image:url(&quot;https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d5ecdd758c86ec676248f_maria%20photo.png&quot;)" class="card-author_image"></div>
                                    <div class="card-author_name_block">
                                        <p class="card-author_title">Maria Caroline Samodra</p>
                                        <p fs-cmssort-field="update-date" fs-cmssort-type="date" class="card-article_date">March 27, 2023</p>
                                    </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div role="listitem" class="collection-item_panduan w-dyn-item">
                                <a href="/panduan-karir/gaji-back-end-developer" class="card-panduan direcion-orizontal w-inline-block">
                                <div class="card-panduan-content background-yellow">
                                    <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/64216ebfe50209882b2458f5_gaji%20back%20end%20developer.png" loading="lazy" alt="" sizes="(max-width: 479px) 91vw, (max-width: 991px) 34vw, (max-width: 1439px) 10vw, 122.6796875px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/64216ebfe50209882b2458f5_gaji%20back%20end%20developer-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/64216ebfe50209882b2458f5_gaji%20back%20end%20developer.png 601w" class="card-panduan-image_full">
                                </div>
                                <div class="card-panduan-text direction-vertical full-width">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Gaji Back End Developer di Indonesia: Junior sampai Senior </h4>
                                    <div class="tag-topic">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a60158ddad956b7abedd37_icon-srticle-category.svg" loading="lazy" alt="" class="button-circle-image margin-right">
                                    <p fs-cmsfilter-field="topic" class="card-panduan-body text-color-black">Back End Developer</p>
                                    </div>
                                    <p fs-cmsfilter-field="paragraph" class="card-panduan-body margin-bottom_16">Gaji yang diperoleh back end developer bervariasi berdasarkan berbagai faktor, seperti pengalaman, lokasi, dan keterampilan yang dimiliki. </p>
                                    <div class="divider-card_horizontal"></div>
                                    <div class="card-author_block">
                                    <div style="background-image:url(&quot;https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d5ecdd758c86ec676248f_maria%20photo.png&quot;)" class="card-author_image"></div>
                                    <div class="card-author_name_block">
                                        <p class="card-author_title">Maria Caroline Samodra</p>
                                        <p fs-cmssort-field="update-date" fs-cmssort-type="date" class="card-article_date">March 27, 2023</p>
                                    </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div role="listitem" class="collection-item_panduan w-dyn-item">
                                <a href="/panduan-karir/front-end-developer-roadmap" class="card-panduan direcion-orizontal w-inline-block">
                                <div class="card-panduan-content background-yellow">
                                    <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/64213bbfdd850a131ba0b687_front%20end%20developer%20roadmap.png" loading="lazy" alt="" sizes="(max-width: 479px) 91vw, (max-width: 991px) 34vw, (max-width: 1439px) 10vw, 122.6796875px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/64213bbfdd850a131ba0b687_front%20end%20developer%20roadmap-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/64213bbfdd850a131ba0b687_front%20end%20developer%20roadmap.png 601w" class="card-panduan-image_full">
                                </div>
                                <div class="card-panduan-text direction-vertical full-width">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Belajar Front End Developer Roadmap (Urut dan Lengkap)</h4>
                                    <div class="tag-topic">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a60158ddad956b7abedd37_icon-srticle-category.svg" loading="lazy" alt="" class="button-circle-image margin-right">
                                    <p fs-cmsfilter-field="topic" class="card-panduan-body text-color-black">Front End Developer</p>
                                    </div>
                                    <p fs-cmsfilter-field="paragraph" class="card-panduan-body margin-bottom_16">Mau jadi Front End Developer tapi bingung mulai belajar dari mana? Simak Front End Developer roadmap berikut ini!</p>
                                    <div class="divider-card_horizontal"></div>
                                    <div class="card-author_block">
                                    <div style="background-image:url(&quot;https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d27b9b1ea518ab2364964_WhatsApp%20Image%202023-03-24%20at%2012.31.25.jpeg&quot;)" class="card-author_image"></div>
                                    <div class="card-author_name_block">
                                        <p class="card-author_title">Nurul Izzatur Ramadhani</p>
                                        <p fs-cmssort-field="update-date" fs-cmssort-type="date" class="card-article_date">March 27, 2023</p>
                                    </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div role="listitem" class="collection-item_panduan w-dyn-item">
                                <a href="/panduan-karir/cara-menjadi-back-end-developer" class="card-panduan direcion-orizontal w-inline-block">
                                <div class="card-panduan-content background-yellow">
                                    <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d6b4113714b14d5840826_cara%20menjadi%20back%20end%20developer.png" loading="lazy" alt="" sizes="(max-width: 479px) 91vw, (max-width: 991px) 34vw, (max-width: 1439px) 10vw, 122.6796875px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d6b4113714b14d5840826_cara%20menjadi%20back%20end%20developer-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d6b4113714b14d5840826_cara%20menjadi%20back%20end%20developer.png 601w" class="card-panduan-image_full">
                                </div>
                                <div class="card-panduan-text direction-vertical full-width">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">7 Cara Menjadi Back End Developer, Bisa Kerja di Mana?</h4>
                                    <div class="tag-topic">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a60158ddad956b7abedd37_icon-srticle-category.svg" loading="lazy" alt="" class="button-circle-image margin-right">
                                    <p fs-cmsfilter-field="topic" class="card-panduan-body text-color-black">Back End Developer</p>
                                    </div>
                                    <p fs-cmsfilter-field="paragraph" class="card-panduan-body margin-bottom_16">Bagaimana cara menjadi back end developer? Yuk simak artikel berikut ini!</p>
                                    <div class="divider-card_horizontal"></div>
                                    <div class="card-author_block">
                                    <div style="background-image:url(&quot;https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d5ecdd758c86ec676248f_maria%20photo.png&quot;)" class="card-author_image"></div>
                                    <div class="card-author_name_block">
                                        <p class="card-author_title">Maria Caroline Samodra</p>
                                        <p fs-cmssort-field="update-date" fs-cmssort-type="date" class="card-article_date">March 24, 2023</p>
                                    </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div role="listitem" class="collection-item_panduan w-dyn-item">
                                <a href="/panduan-karir/belajar-menjadi-back-end-developer" class="card-panduan direcion-orizontal w-inline-block">
                                <div class="card-panduan-content background-yellow">
                                    <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d39671b8d89deeef50ef8_belajar%20menjadi%20back%20end%20developer.png" loading="lazy" alt="" sizes="(max-width: 479px) 91vw, (max-width: 991px) 34vw, (max-width: 1439px) 10vw, 122.6796875px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d39671b8d89deeef50ef8_belajar%20menjadi%20back%20end%20developer-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d39671b8d89deeef50ef8_belajar%20menjadi%20back%20end%20developer.png 601w" class="card-panduan-image_full">
                                </div>
                                <div class="card-panduan-text direction-vertical full-width">
                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">Belajar Menjadi Back End Developer (Step-by-Step)</h4>
                                    <div class="tag-topic">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a60158ddad956b7abedd37_icon-srticle-category.svg" loading="lazy" alt="" class="button-circle-image margin-right">
                                    <p fs-cmsfilter-field="topic" class="card-panduan-body text-color-black">Back End Developer</p>
                                    </div>
                                    <p fs-cmsfilter-field="paragraph" class="card-panduan-body margin-bottom_16">Tertarik menjadi back end developer? Simak artikel berikut agar tahu cara belajar menjadi back end developer!</p>
                                    <div class="divider-card_horizontal"></div>
                                    <div class="card-author_block">
                                    <div style="background-image:url(&quot;https://assets-global.website-files.com/61af164800e38cf1b6c60b55/641d27b9b1ea518ab2364964_WhatsApp%20Image%202023-03-24%20at%2012.31.25.jpeg&quot;)" class="card-author_image"></div>
                                    <div class="card-author_name_block">
                                        <p class="card-author_title">Nurul Izzatur Ramadhani</p>
                                        <p fs-cmssort-field="update-date" fs-cmssort-type="date" class="card-article_date">March 24, 2023</p>
                                    </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            </div>
                            <div role="navigation" aria-label="List" class="w-pagination-wrapper pagination">
                            <a href="?166c24fd_page=0" aria-label="Previous Page" class="w-pagination-previous pagination-prev" style="display: none;">
                                <svg class="w-pagination-previous-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                                <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
                                </svg>
                                <div class="pagination-text w-inline-block">Previous</div>
                            </a>
                            <a href="?166c24fd_page=2" aria-label="Next Page" class="w-pagination-next pagination-next">
                                <div class="pagination-text w-inline-block">Next</div>
                                <svg class="w-pagination-next-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                                <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M4 2l4 4-4 4"></path>
                                </svg>
                            </a>
                            <link rel="prerender" href="?166c24fd_page=2">
                            <a fs-cmsload-element="page-button" href="?166c24fd_page=1" class="pagination-number w-inline-block w--current" aria-current="page">1</a>
                            <a fs-cmsload-element="page-button" href="?166c24fd_page=2" class="pagination-number w-inline-block">2</a>
                            <a fs-cmsload-element="page-button" href="?166c24fd_page=3" class="pagination-number w-inline-block">3</a>
                            <a fs-cmsload-element="page-button" href="?166c24fd_page=4" class="pagination-number w-inline-block">4</a>
                            <a fs-cmsload-element="page-button" href="?166c24fd_page=5" class="pagination-number w-inline-block">5</a>
                            <div>...</div>
                            <a fs-cmsload-element="page-button" href="?166c24fd_page=24" class="pagination-number w-inline-block">24</a>
                            </div>
                        </div>
                    </div>
                    <a href="#top" data-w-id="ed44f92a-129a-a909-3496-3b9f02f9d8e3" class="button-top w-button"></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
