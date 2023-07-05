@extends('landing-page.layouts.app')
@section('title', 'Profesi | Razen Blog')

@section('header')
    @php
        use App\Models\LandingPageProfesi;
        use Carbon\Carbon;

        $beranda = LandingPageProfesi::first();

        $section_1 = json_decode($beranda->section_1, true);
    @endphp
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
                    <div class="program-header_center-content">
                        <div class="program-title_block">
                            <div class="program-title_wrapper" style="width: 100% !important;">
                                <h1 style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="program_header_heading margin-bottom_1">{{$section_1?$section_1['judul']:'' }}</h1>
                                <div style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="program-title_copy">{{$section_1?$section_1['deskripsi']:'' }}</div>
                            </div>
                        </div>
                        <div style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="filter-block">
                            <a href="{{ route('berita') }}" aria-current="page" class="filter-category w-button">berita</a>
                            <a href="{{ route('profesi') }}" class="filter-category state-active w-button w--current">profesi</a>
                            <a href="{{ route('teknis') }}" class="filter-category w-button">teknis</a>
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
                                <div class="filter-title_wrapper">
                                    <h4 class="card-panduan-title">Kategori Profesi</h4>
                                    <button class="reset-text" type="button" style="background-color:transparent">Hapus Semua</button>
                                </div>
                                <div class="filter-tag_wrapper form-sort_wrapper">
                                    <div class="w-dyn-list">
                                        <div role="list" class="w-dyn-items">
                                            @php
                                                $number_kategori = 1;
                                            @endphp
                                            @foreach ($kategori_kontens as $kategori_konten)
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="form-check_input_field w-radio">
                                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio_button w-radio-input" id="label_kategori_{{$kategori_konten->id}}"></div>
                                                        <input type="radio" name="sort-by-radio" id="radio_button-{{$number_kategori++}}" value="{{$kategori_konten->id}}" style="position:absolute;z-index:-1">
                                                        <span fs-cmsfilter-field="topic" class="form-check_input_label w-form-label" for="radio_button">{{$kategori_konten->nama}}</span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="w-node-_7b5acc26-a2fb-462b-b3cd-506b76c4b17c-1b121a22" class="content-list_wrapper">
                        <div class="collection-panduan w-dyn-list" id="div_konten">
                            <div fs-cmsload-mode="pagination" fs-cmsfilter-element="list" fs-cmssort-element="list" fs-cmsload-element="list" role="list" class="content-list_panduan_grid_1 w-dyn-items">
                                @foreach ($kontens->toArray()['data'] as $item)
                                    <div role="listitem" class="collection-item_panduan w-dyn-item">
                                        <a href="{{ route('profesi-detail', ['id'=> $item['id']]) }}" class="card-panduan direcion-orizontal w-inline-block">
                                            <div class="card-panduan-content background-yellow">
                                                <img src="{{ asset('images/razen-blog/konten/'.$item['gambar_mini']) }}" loading="lazy" alt="" sizes="(max-width: 479px) 91vw, (max-width: 991px) 34vw, (max-width: 1439px) 10vw, 122.6796875px" class="card-panduan-image_full">
                                            </div>
                                            <div class="card-panduan-text direction-vertical full-width">
                                                <h4 fs-cmsfilter-field="title" class="card-panduan-title">{{$item['judul']}}</h4>
                                                <div class="tag-topic">
                                                    <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a60158ddad956b7abedd37_icon-srticle-category.svg" loading="lazy" alt="" class="button-circle-image margin-right">
                                                    <p fs-cmsfilter-field="topic" class="card-panduan-body text-color-black">{{$item['kategori_konten']}}</p>
                                                </div>
                                                <p fs-cmsfilter-field="paragraph" class="card-panduan-body margin-bottom_16">{{$item['deskripsi_judul']}}</p>
                                                <div class="divider-card_horizontal"></div>
                                                <div class="card-author_block">
                                                    <div style="background-image:url({{asset($item['penulis']['foto'])}})" class="card-author_image"></div>
                                                    <div class="card-author_name_block">
                                                        <p class="card-author_title">{{$item['penulis']['nama']}}</p>
                                                        <p fs-cmssort-field="update-date" fs-cmssort-type="date" class="card-article_date">{{Carbon::parse($item['tgl'])->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y')}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div role="navigation" aria-label="List" class="w-pagination-wrapper pagination">
                                @foreach ($kontens->toArray()['links'] as $item)
                                    @if ($loop->first)
                                        @if ($item['url'] != null)
                                            <a href="{{$item['url']}}" aria-label="Previous Page" class="w-pagination-previous pagination-prev" style="display: none;">
                                                <svg class="w-pagination-previous-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                                                <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
                                                </svg>
                                                <div class="pagination-text w-inline-block">Previous</div>
                                            </a>
                                        @endif
                                    @elseif ($loop->last)
                                        @if ($item['url'] != null)
                                            <a href="{{$item['url']}}" aria-label="Next Page" class="w-pagination-next pagination-next">
                                                <div class="pagination-text w-inline-block">Next</div>
                                                <svg class="w-pagination-next-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                                                <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M4 2l4 4-4 4"></path>
                                                </svg>
                                            </a>
                                        @endif
                                    @else
                                        <a fs-cmsload-element="page-button" href="{{$item['url']}}" class="pagination-number w-inline-block @if($item['active'] == true) w--current @endif" aria-current="page">{{$item['label']}}</a>
                                    @endif
                                @endforeach
                        </div>
                    </div>
                    <a href="#top" data-w-id="ed44f92a-129a-a909-3496-3b9f02f9d8e3" class="button-top w-button"></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script src="{{ asset('js/moment-with-locales.js') }}"></script>
    <script>
        $('input[type="radio"][name=sort-by-radio]').change(function(){
            var value = $(this).val();
            $('div').removeClass('w--redirected-checked');
            $('#label_kategori_'+value).addClass('w--redirected-checked');

            $('#div_konten').empty();

            var url = "{{ route('filter-kategori', ['id' => ":value"]) }}";
            url = url.replace(':value', value);
            $.ajax({
                url: url,
                dataType: "json",
                success: function(data)
                {
                    var data_konten = '';

                    data_konten += '<div fs-cmsload-mode="pagination" fs-cmsfilter-element="list" fs-cmssort-element="list" fs-cmsload-element="list" role="list" class="content-list_panduan_grid_1 w-dyn-items">';
                    moment.locale('id');
                    $.each(data.kontens.data, function(key, value){
                        var route_konten = "{{ route('teknis-detail', ['id'=> ":route_id"]) }}";
                        route_konten = route_konten.replace(':route_id', value['id']);

                        var gambar_konten = "{{ asset('images/razen-blog/konten') }}" + '/' + value['gambar_mini'];

                        var foto_penulis = "{{asset('')}}" + value['penulis']['foto'];

                        var tanggal = moment(value.tgl).format('LLLL');

                        data_konten += `<div role="listitem" class="collection-item_panduan w-dyn-item">
                                            <a href="${route_konten}" class="card-panduan direcion-orizontal w-inline-block">
                                                <div class="card-panduan-content background-yellow">
                                                    <img src="${gambar_konten}" loading="lazy" alt="" sizes="(max-width: 479px) 91vw, (max-width: 991px) 34vw, (max-width: 1439px) 10vw, 122.6796875px" class="card-panduan-image_full">
                                                </div>
                                                <div class="card-panduan-text direction-vertical full-width">
                                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">${value['judul']}</h4>
                                                    <div class="tag-topic">
                                                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a60158ddad956b7abedd37_icon-srticle-category.svg" loading="lazy" alt="" class="button-circle-image margin-right">
                                                        <p fs-cmsfilter-field="topic" class="card-panduan-body text-color-black">${value['kategori_konten']}</p>
                                                    </div>
                                                    <p fs-cmsfilter-field="paragraph" class="card-panduan-body margin-bottom_16">${value['deskripsi_judul']}</p>
                                                    <div class="divider-card_horizontal"></div>
                                                    <div class="card-author_block">
                                                        <div style="background-image:url(${foto_penulis})" class="card-author_image"></div>
                                                        <div class="card-author_name_block">
                                                            <p class="card-author_title">${value['penulis']['nama']}</p>
                                                            <p fs-cmssort-field="update-date" fs-cmssort-type="date" class="card-article_date">${tanggal}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>`;
                    });
                    data_konten += '</div>';

                    data_konten += '<div role="navigation" aria-label="List" class="w-pagination-wrapper pagination">';
                    $.each(data.kontens.links, function(key, value){
                        if (value['label'] == '&laquo; Previous') {
                            if(value['url'] != null)
                            {
                                data_konten += `<a href="${value['url']}" aria-label="Previous Page" class="w-pagination-previous pagination-prev" style="display: none;">
                                                    <svg class="w-pagination-previous-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                                                    <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
                                                    </svg>
                                                    <div class="pagination-text w-inline-block">Previous</div>
                                                </a>`;
                            }
                        } else if (value['label'] == 'Next &raquo;')
                        {
                            if(value['url'] != null)
                            {
                                data_konten += `<a href="${value['url']}" aria-label="Next Page" class="w-pagination-next pagination-next">
                                                    <div class="pagination-text w-inline-block">Next</div>
                                                    <svg class="w-pagination-next-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                                                    <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M4 2l4 4-4 4"></path>
                                                    </svg>
                                                </a>`;
                            }
                        } else {
                            data_konten += '<a fs-cmsload-element="page-button" href="'+value['url']+'" class="pagination-number w-inline-block';
                            if(value['active'] == true)
                            {
                                data_konten += 'w--current';
                            }
                            data_konten +='" aria-current="page">'+value['label']+'</a>';
                        }
                    });

                    data_konten += '</div>';

                    $('#div_konten').append(data_konten);
                }
            });
        });

        $('.reset-text').click(function(){
            $('div').removeClass('w--redirected-checked');

            $('#div_konten').empty();

            var url = "{{ route('filter-all-kategori', ['tipe_konten' => 'profesi']) }}";
            $.ajax({
                url: url,
                dataType: "json",
                success: function(data)
                {
                    var data_konten = '';

                    data_konten += '<div fs-cmsload-mode="pagination" fs-cmsfilter-element="list" fs-cmssort-element="list" fs-cmsload-element="list" role="list" class="content-list_panduan_grid_1 w-dyn-items">';
                    moment.locale('id');
                    $.each(data.kontens.data, function(key, value){
                        var route_konten = "{{ route('teknis-detail', ['id'=> ":route_id"]) }}";
                        route_konten = route_konten.replace(':route_id', value['id']);

                        var gambar_konten = "{{ asset('images/razen-blog/konten') }}" + '/' + value['gambar_mini'];

                        var foto_penulis = "{{asset('')}}" + value['penulis']['foto'];

                        var tanggal = moment(value.tgl).format('LLLL');

                        data_konten += `<div role="listitem" class="collection-item_panduan w-dyn-item">
                                            <a href="${route_konten}" class="card-panduan direcion-orizontal w-inline-block">
                                                <div class="card-panduan-content background-yellow">
                                                    <img src="${gambar_konten}" loading="lazy" alt="" sizes="(max-width: 479px) 91vw, (max-width: 991px) 34vw, (max-width: 1439px) 10vw, 122.6796875px" class="card-panduan-image_full">
                                                </div>
                                                <div class="card-panduan-text direction-vertical full-width">
                                                    <h4 fs-cmsfilter-field="title" class="card-panduan-title">${value['judul']}</h4>
                                                    <div class="tag-topic">
                                                        <img src="https://assets-global.website-files.com/61af164800e38c4f53c60b4e/62a60158ddad956b7abedd37_icon-srticle-category.svg" loading="lazy" alt="" class="button-circle-image margin-right">
                                                        <p fs-cmsfilter-field="topic" class="card-panduan-body text-color-black">${value['kategori_konten']}</p>
                                                    </div>
                                                    <p fs-cmsfilter-field="paragraph" class="card-panduan-body margin-bottom_16">${value['deskripsi_judul']}</p>
                                                    <div class="divider-card_horizontal"></div>
                                                    <div class="card-author_block">
                                                        <div style="background-image:url(${foto_penulis})" class="card-author_image"></div>
                                                        <div class="card-author_name_block">
                                                            <p class="card-author_title">${value['penulis']['nama']}</p>
                                                            <p fs-cmssort-field="update-date" fs-cmssort-type="date" class="card-article_date">${tanggal}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>`;
                    });
                    data_konten += '</div>';

                    data_konten += '<div role="navigation" aria-label="List" class="w-pagination-wrapper pagination">';
                    $.each(data.kontens.links, function(key, value){
                        if (value['label'] == '&laquo; Previous') {
                            if(value['url'] != null)
                            {
                                data_konten += `<a href="${value['url']}" aria-label="Previous Page" class="w-pagination-previous pagination-prev" style="display: none;">
                                                    <svg class="w-pagination-previous-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                                                    <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
                                                    </svg>
                                                    <div class="pagination-text w-inline-block">Previous</div>
                                                </a>`;
                            }
                        } else if (value['label'] == 'Next &raquo;')
                        {
                            if(value['url'] != null)
                            {
                                data_konten += `<a href="${value['url']}" aria-label="Next Page" class="w-pagination-next pagination-next">
                                                    <div class="pagination-text w-inline-block">Next</div>
                                                    <svg class="w-pagination-next-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                                                    <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M4 2l4 4-4 4"></path>
                                                    </svg>
                                                </a>`;
                            }
                        } else {
                            data_konten += '<a fs-cmsload-element="page-button" href="'+value['url']+'" class="pagination-number w-inline-block';
                            if(value['active'] == true)
                            {
                                data_konten += 'w--current';
                            }
                            data_konten +='" aria-current="page">'+value['label']+'</a>';
                        }
                    });

                    data_konten += '</div>';

                    $('#div_konten').append(data_konten);
                }
            });
        });

    </script>
@endsection
