@extends('landing-page.layouts.app')
@section('title', 'Beranda | Razen Blog')

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
        <div class="page-padding-home">
            <div class="container-large">
                <div class="padding-vertical padding-xhuge revoupedia">
                    <div class="w-layout-grid program-header_grid">
                        <div id="w-node-afe5d203-46ea-2c08-056b-90192d429ec2-1b121b0d" class="program-header_content-wrapper full-width">
                            <div class="program-header_content no-max">
                                <div data-w-id="afe5d203-46ea-2c08-056b-90192d429ec4" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="program-header_heading-wrapper full-width">
                                    <h1 class="header_revoupedia text-color-white">Belajar lebih <a href="#" class="heading-highlight">
                                        <strong>ekstra</strong>
                                    </a>
                                    <strong> dengan</strong>
                                    <strong class="heading-highlight">RevoUpedia!</strong>
                                    </h1>
                                </div>
                                <div data-w-id="afe5d203-46ea-2c08-056b-90192d429ed7" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="program-header_text-wrapper full-width">
                                    <div class="program_header-text text-weight-semibold">Dapatkan informasi seluk-beluk profesi kekinian dan pengetahuan teknis <em>skill</em> digital, untuk kamu para calon profesional 🚀 </div>
                                </div>
                                <div data-w-id="afe5d203-46ea-2c08-056b-90192d429eda" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="margin-top margin-medium is-custom-margin">
                                    <a href="#get-started" id="apply" class="button is-hero-button program-hero-button no-hover w-button">mulai sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_7130288d-2389-c43b-211c-f908c8701f75-1b121b0d" class="hero-block-empty">
                            <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62ac91ce23f4fd1b3ae812cf_RevoUpedia%20Background.svg" loading="eager" alt="" class="hero-revoupedia-mobile">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section id="get-started" data-w-id="ef9b5c07-bbc4-8281-81d7-997305c63d40" class="section-panduan_karir is-relative">
        <div class="padding-vertical padding-medium">
            <div class="page-padding">
            <div class="container-large">
                <div id="our-programs" class="margin-bottom margin-medium">
                <div class="text-align-center">
                    <h2 data-w-id="ef9b5c07-bbc4-8281-81d7-997305c63d46" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="our-programs-heading large-text">Mulai Belajarmu dengan <span class="title-underline c-yellow">Panduan Karir</span>
                    </h2>
                </div>
                </div>
                <div class="padding-vertical padding-large">
                <div data-w-id="ef9b5c07-bbc4-8281-81d7-997305c63d4b" style="opacity: 1;" class="our-programs_component">
                    <div class="collection-panduan w-dyn-list">
                    <div role="list" class="collection-list-panduan w-dyn-items">
                        <div role="listitem" class="collection-item-panduan w-dyn-item">
                        <a style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="/panduan-karir/data-analyst-adalah" class="card-panduan w-inline-block">
                            <div class="card-panduan-content">
                            <div class="card-panduan-text">
                                <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6327e363978cc481c749a416_icon_homepage_vertical-da__1_-removebg-preview.png" loading="lazy" alt="" sizes="(max-width: 479px) 90px, (max-width: 767px) 89vw, (max-width: 1439px) 25vw, 328px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6327e363978cc481c749a416_icon_homepage_vertical-da__1_-removebg-preview-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6327e363978cc481c749a416_icon_homepage_vertical-da__1_-removebg-preview.png 611w" class="card-panduan-image">
                                <h4 class="card-panduan-title small-mobile">Data Analyst</h4>
                            </div>
                            <p class="card-panduan-body padding-inner">Pahami tentang role dan cara menjadi data analyst, termasuk tugas, skills wajib, contoh CV data analyst, rekomendasi course, dan banyak lagi.</p>
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
                        <div role="listitem" class="collection-item-panduan w-dyn-item">
                        <a style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="/panduan-karir/apa-itu-product-manager" class="card-panduan w-inline-block">
                            <div class="card-panduan-content">
                            <div class="card-panduan-text">
                                <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6308b82f4a748e8c610e82ea_icon_homepage_vertical-pm__1_-removebg-preview.png" loading="lazy" alt="" sizes="(max-width: 479px) 90px, (max-width: 767px) 89vw, (max-width: 1439px) 25vw, 328px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6308b82f4a748e8c610e82ea_icon_homepage_vertical-pm__1_-removebg-preview-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6308b82f4a748e8c610e82ea_icon_homepage_vertical-pm__1_-removebg-preview.png 612w" class="card-panduan-image">
                                <h4 class="card-panduan-title small-mobile">Product Manager</h4>
                            </div>
                            <p class="card-panduan-body padding-inner">Kenali peran product manager luar dalam dari definisi, tugas, contoh CV dan portofolio, hingga daftar pertanyaan interview.</p>
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
                        <div role="listitem" class="collection-item-panduan w-dyn-item">
                        <a style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="/panduan-karir/apa-itu-digital-marketer" class="card-panduan w-inline-block">
                            <div class="card-panduan-content">
                            <div class="card-panduan-text">
                                <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/62bac03ffa2cceb5a763c18c_dm%20(1).png" loading="lazy" alt="" sizes="(max-width: 479px) 90px, (max-width: 767px) 89vw, (max-width: 1439px) 25vw, 328px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/62bac03ffa2cceb5a763c18c_dm%20(1)-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/62bac03ffa2cceb5a763c18c_dm%20(1).png 600w" class="card-panduan-image">
                                <h4 class="card-panduan-title small-mobile">Digital Marketer</h4>
                            </div>
                            <p class="card-panduan-body padding-inner">Pelajari segala hal tentang dunia digital marketing, skills penting untuk menjadi digital marketer, cara menjadi digital marketer, contoh CV dan portofolio, dan banyak lagi.</p>
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
                    </div>
                    </div>
                </div>
                </div>
                <div class="link-wrapper">
                <a data-w-id="00611145-4bca-9a59-0888-7f210e8f4c7c" href="/revoupedia/panduan-karir" class="link-more text-yellow w-inline-block">
                    <div class="link-more-text">Lihat Semua Panduan Karir</div>
                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b1f58f41a2f60738410ba5_icon-more-yellow.svg" loading="lazy" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" alt="" class="link-more-icon">
                </a>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section data-w-id="31b9f1f3-29bc-e241-6359-164181754dba" class="section-panduan_teknis">
        <div class="padding-vertical padding-medium">
            <div class="page-padding">
            <div class="container-large">
                <div id="our-programs" class="margin-bottom margin-medium">
                <div class="text-align-center">
                    <h2 data-w-id="31b9f1f3-29bc-e241-6359-164181754dc0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="our-programs-heading text-color-black large-text">
                    <strong>Praktik Langsung dengan </strong>
                    <span class="title-underline c-yellow">
                        <strong>Panduan Teknis</strong>
                    </span>
                    </h2>
                </div>
                </div>
                <div class="padding-vertical padding-large">
                <div data-w-id="31b9f1f3-29bc-e241-6359-164181754dc5" style="opacity: 0;" class="our-programs_component">
                    <div class="collection-list-panduan center grid-custom">
                    <div id="w-node-_90774362-c06f-1a68-f1dc-ae8800eefd07-1b121b0d" class="collection-panduan manual w-dyn-list">
                        <div role="list" class="collection-list-panduan grid-2 w-dyn-items">
                        <div role="listitem" class="collection-item-panduan w-dyn-item">
                            <a data-w-id="1eedb616-cb99-de42-35f0-edfd95e796b9" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="/panduan-teknis/bahasa-pemrograman" class="card-panduan w-inline-block">
                            <div class="card-panduan-content">
                                <div class="card-panduan-text">
                                <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6363a01df6fbef2120323d0e_bahasa%20pemrograman.png" loading="lazy" alt="" sizes="(max-width: 479px) 90px, (max-width: 767px) 89vw, (max-width: 1439px) 25vw, 328px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6363a01df6fbef2120323d0e_bahasa%20pemrograman-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6363a01df6fbef2120323d0e_bahasa%20pemrograman.png 601w" class="card-panduan-image">
                                <h4 class="card-panduan-title margin-mobile">Data Analytics</h4>
                                <div class="card-module desktop">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/629dd37ddb64067d7cf078e6_Icon%20Module.svg" loading="lazy" alt="" class="button-circle-image margin-right-12">
                                    <p class="card-panduan-body">10 Modules</p>
                                </div>
                                </div>
                                <p class="card-panduan-body padding-inner">Panduan Data Analytics ini mencakup semua konsep penting berkaitan dengan data, termasuk SQL, visualisasi data, jenis data, dan banyak lainnya.</p>
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
                    <div id="w-node-_2559704b-3a7c-0f35-5102-8dccb93c49d7-1b121b0d" class="collection-panduan manual w-dyn-list">
                        <div role="list" class="collection-list-panduan grid-2 w-dyn-items">
                        <div role="listitem" class="collection-item-panduan w-dyn-item">
                            <a href="/panduan-teknis/sql-adalah" class="card-panduan w-inline-block">
                            <div class="card-panduan-content">
                                <div class="card-panduan-text">
                                <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6348e0c15482ba80b90c0fbe_sql%20adalah.png" loading="lazy" alt="" sizes="(max-width: 479px) 90px, (max-width: 767px) 89vw, (max-width: 1439px) 25vw, 328px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6348e0c15482ba80b90c0fbe_sql%20adalah-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6348e0c15482ba80b90c0fbe_sql%20adalah.png 601w" class="card-panduan-image">
                                <h4 class="card-panduan-title margin-mobile">SQL</h4>
                                <div class="card-module desktop">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/629dd37ddb64067d7cf078e6_Icon%20Module.svg" loading="lazy" alt="" class="button-circle-image margin-right-12">
                                    <p class="card-panduan-body">10 Modules</p>
                                </div>
                                </div>
                                <p class="card-panduan-body padding-inner">Panduan SQL ini mencakup semua konsep penting berkaitan dengan SQL, termasuk pengertian, istilah penting, dan banyak lainnya.</p>
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
                    <div id="w-node-_0f4bc80c-f8fb-12c4-cbe7-aeec3ada6805-1b121b0d" class="collection-panduan manual w-dyn-list">
                        <div role="list" class="collection-list-panduan grid-2 w-dyn-items">
                        <div id="w-node-_0f4bc80c-f8fb-12c4-cbe7-aeec3ada6807-1b121b0d" role="listitem" class="collection-item-panduan w-dyn-item">
                            <a href="/panduan-teknis/cara-melakukan-riset-untuk-facebook-ads-menggunakan-facebook-ad-library" class="card-panduan w-inline-block">
                            <div class="card-panduan-content">
                                <div class="card-panduan-text">
                                <img src="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6319f41048a192a29982acba_Cara%20melakukan%20riset%20untuk%20Facebook%20Ads%20menggunakan%20Facebook%20Ad%20Library.png" loading="lazy" alt="" sizes="(max-width: 479px) 90px, (max-width: 767px) 89vw, (max-width: 1439px) 25vw, 328px" srcset="https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6319f41048a192a29982acba_Cara%20melakukan%20riset%20untuk%20Facebook%20Ads%20menggunakan%20Facebook%20Ad%20Library-p-500.png 500w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6319f41048a192a29982acba_Cara%20melakukan%20riset%20untuk%20Facebook%20Ads%20menggunakan%20Facebook%20Ad%20Library-p-800.png 800w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6319f41048a192a29982acba_Cara%20melakukan%20riset%20untuk%20Facebook%20Ads%20menggunakan%20Facebook%20Ad%20Library-p-1080.png 1080w, https://assets-global.website-files.com/61af164800e38cf1b6c60b55/6319f41048a192a29982acba_Cara%20melakukan%20riset%20untuk%20Facebook%20Ads%20menggunakan%20Facebook%20Ad%20Library.png 1251w" class="card-panduan-image">
                                <h4 class="card-panduan-title margin-mobile">Facebook Ads</h4>
                                <div class="card-module desktop">
                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/629dd37ddb64067d7cf078e6_Icon%20Module.svg" loading="lazy" alt="" class="button-circle-image margin-right-12">
                                    <p class="card-panduan-body">10 Modules</p>
                                </div>
                                </div>
                                <p class="card-panduan-body padding-inner">Panduan Facebook Ads ini mencakup semua konsep penting dalam beriklan di Facebook, seperti Business Manager, Pixel, dan lainnya.</p>
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
                    </div>
                </div>
                </div>
                <div class="link-wrapper">
                <a data-w-id="7cca9bae-a603-5291-8043-5b67b76a47a2" href="/revoupedia/panduan-teknis" class="link-more">
                    <div class="link-more-text">Lihat Semua Panduan Teknis</div>
                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62b1f58f3ff77c5c2e5cac03_icon-more-black.svg" loading="lazy" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" alt="" class="link-more-icon">
                </a>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="get-started" data-w-id="826d8ae9-aff4-35de-dcb8-b95a800821ff" class="section-kosakata">
        <div class="padding-vertical padding-xhuge">
            <div class="page-padding">
            <div class="container-large">
                <div class="content-hz">
                <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/636bd38c76342c6aaebeac46_revou-kosakata.svg" loading="lazy" alt="" class="section-image">
                <div class="title-wrapper-hz">
                    <div id="our-programs" class="margin-bottom margin-medium">
                    <div class="text-align-center max-size">
                        <h2 data-w-id="826d8ae9-aff4-35de-dcb8-b95a80082205" style="opacity: 0;" class="our-programs-heading left-text">Kuasai berbagai istilah <span class="title-underline c-yellow">teknologi</span> dengan Kosakata </h2>
                    </div>
                    </div>
                    <div class="program_header-text mb">Temukan penjelasan yang mudah dipahami beserta contohnya disini!</div>
                    <a data-w-id="826d8ae9-aff4-35de-dcb8-b95a80082220" href="/revoupedia/kosakata" class="button hz w-inline-block">
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
