@extends('razen-blog.layouts.app')
@section('title', 'Razen Blog | Landing Page | Beranda')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/font/CS-Interface/style.css') }}">
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2-bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .select2-selection__rendered {
            line-height: 40px !important;
        }
        .select2-container .select2-selection--single {
            height: 41px !important;
        }
        .select2-selection__arrow {
            height: 36px !important;
        }
        .modal-dialog{
            pointer-events: all !important;
        }
    </style>
@endsection

@section('content')
    @php
        use App\Models\LandingPageBeranda;

        $beranda = LandingPageBeranda::first();

        $section_1 = json_decode($beranda->section_1, true);
        $section_2 = json_decode($beranda->section_2, true);
        $section_3 = json_decode($beranda->section_3, true);
        $section_4 = json_decode($beranda->section_4, true);
    @endphp
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title"> Beranda</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-blog.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-blog.landing-page.beranda.index') }}">Beranda</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>

    <!-- Content Start -->
    <h2 class="small-title">Atur</h2>
    <!-- Content End -->

    {{-- Section 1 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-6 mb-3">
                    <h2 class="small-title">Edit Section 1</h2>
                </div>
                <div class="col-6 mb-3" style="text-align: right;">
                    <a href="{{ route('beranda') }}#page-padding-home" class="btn btn-icon waves-effect waves-light btn-secondary" target="blank"><i class="fas fa-pager"></i> Preview</a>
                </div>
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/beranda/section_1.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}

            <form action="{{ route('razen-blog.landing-page.beranda.store.section-1') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$section_1?$section_1['judul']:'' }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" id="dekripsi_section_1" required>{{$section_1?$section_1['deskripsi']:'' }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar Background</label>
                            @if ($section_1)
                            <input type="file" class="dropify" name="gambar_background" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" data-default-file="{{ asset('images/landing-page/beranda/'.$section_1['gambar_background']) }}" required>
                            @else
                            <input type="file" class="dropify" name="gambar_background" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>
                            @endif
                        </div>
                    </div>
                    <div class="col-12" style="text-align: right">
                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                    </div>
                </div>
            </form>

            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 1 End --}}

    {{-- Section 2 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-6 mb-3">
                    <h2 class="small-title">Edit Section 2</h2>
                </div>
                <div class="col-6 mb-3" style="text-align: right;">
                    <a href="{{ route('beranda') }}#section-panduan_karir" class="btn btn-icon waves-effect waves-light btn-secondary" target="blank"><i class="fas fa-pager"></i> Preview</a>
                </div>
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/beranda/section_2.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}
            <form action="{{ route('razen-blog.landing-page.beranda.store.section-2') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$section_2?$section_2['judul'] : ''}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Warna Background</label>
                            <input type="color" class="form-control" name="warna_background" value="{{$section_2 ? $section_2['warna_background'] : ''}}" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>

            <hr>
            <h2 class="small-title">Atur Konten Section 2</h2>

            @if ($section_2)
                @if ($section_2['konten'] == '')
                    <form action="{{ route('razen-blog.landing-page.beranda.store.section-2.konten') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="cta-3">Tambah Form Section 2</div>
                            </div>
                            <div class="col-6" style="text-align: right">
                                <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section_2" type="button"><i data-acorn-icon="plus"></i></button>
                                <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section_2" type="button"><i data-acorn-icon="minus"></i></button>
                            </div>
                        </div>
                        <div id="div_form_section_2"></div>
                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                    </form>
                @endif
                @if ($section_2['konten'] != '')
                    <div class="row">
                        @foreach ($section_2['konten'] as $item)
                            <div class="col-12 col-md-4 mb-5">
                                <div class="card h-100 border">
                                    <button class="btn border-0 btn-icon btn_hapus_gambar_section_2" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                    <div class="card-body">
                                        <img src="{{ asset('images/landing-page/beranda/'.$item['gambar']) }}" class="img-fluid mb-3">
                                        <h5 class="small-title mb-0">{{$item['judul']}}</h5>
                                        <p>{{$item['deskripsi']}}</p>
                                        <a href="{{$item['link']}}" class="btn btn-primary" target="blank">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <form action="{{ route('razen-blog.landing-page.beranda.store.section-2.konten') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="cta-3">Tambah Form Section 2</div>
                            </div>
                            <div class="col-6" style="text-align: right">
                                <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section_2" type="button"><i data-acorn-icon="plus"></i></button>
                                <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section_2" type="button"><i data-acorn-icon="minus"></i></button>
                            </div>
                        </div>
                        <div id="div_form_section_2"></div>
                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                    </form>
                @endif
            @endif
            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 2 End --}}

    {{-- Section 3 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-6 mb-3">
                    <h2 class="small-title">Edit Section 3</h2>
                </div>
                <div class="col-6 mb-3" style="text-align: right;">
                    <a href="{{ route('beranda') }}#section-panduan_teknis" class="btn btn-icon waves-effect waves-light btn-secondary" target="blank"><i class="fas fa-pager"></i> Preview</a>
                </div>
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/beranda/section_3.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}

            <form action="{{ route('razen-blog.landing-page.beranda.store.section-3') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$section_3?$section_3['judul'] : ''}}" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>

            <hr>
            <h2 class="small-title">Atur Konten Section 3</h2>

            @if ($section_3)
                @if ($section_3['konten'] == '')
                    <form action="{{ route('razen-blog.landing-page.beranda.store.section-3.konten') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="cta-3">Tambah Form Section 3</div>
                            </div>
                            <div class="col-6" style="text-align: right">
                                <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section_3" type="button"><i data-acorn-icon="plus"></i></button>
                                <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section_3" type="button"><i data-acorn-icon="minus"></i></button>
                            </div>
                        </div>
                        <div id="div_form_section_3"></div>
                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                    </form>
                @endif
                @if ($section_3['konten'] != '')
                    <div class="row">
                        @foreach ($section_3['konten'] as $item)
                            <div class="col-12 col-md-4 mb-5">
                                <div class="card h-100 border">
                                    <button class="btn border-0 btn-icon btn_hapus_gambar_section_3" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                    <div class="card-body">
                                        <img src="{{ asset('images/landing-page/beranda/'.$item['gambar']) }}" class="img-fluid mb-3">
                                        <h5 class="small-title mb-0">{{$item['judul']}}</h5>
                                        <p>{{$item['deskripsi']}}</p>
                                        <a href="{{$item['link']}}" class="btn btn-primary" target="blank">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <form action="{{ route('razen-blog.landing-page.beranda.store.section-3.konten') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="cta-3">Tambah Form Section 3</div>
                            </div>
                            <div class="col-6" style="text-align: right">
                                <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section_3" type="button"><i data-acorn-icon="plus"></i></button>
                                <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section_3" type="button"><i data-acorn-icon="minus"></i></button>
                            </div>
                        </div>
                        <div id="div_form_section_3"></div>
                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                    </form>
                @endif
            @endif

            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 3 End --}}

    {{-- Section 4 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-6 mb-3">
                    <h2 class="small-title">Edit Section 4</h2>
                </div>
                <div class="col-6 mb-3" style="text-align: right;">
                    <a href="{{ route('beranda') }}#section-kosakata" class="btn btn-icon waves-effect waves-light btn-secondary" target="blank"><i class="fas fa-pager"></i> Preview</a>
                </div>
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/beranda/section_4.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}

            <form action="{{ route('razen-blog.landing-page.beranda.store.section-4') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$section_4?$section_4['judul']:'' }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" id="dekripsi_section_4" required>{{$section_4?$section_4['deskripsi']:'' }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            @if ($section_4)
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" data-default-file="{{ asset('images/landing-page/beranda/'.$section_4['gambar']) }}" required>
                            @else
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>
                            @endif
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar Background</label>
                            @if ($section_4)
                            <input type="file" class="dropify" name="gambar_background" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" data-default-file="{{ asset('images/landing-page/beranda/'.$section_4['gambar_background']) }}" required>
                            @else
                            <input type="file" class="dropify" name="gambar_background" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>
                            @endif
                        </div>
                    </div>
                    <div class="col-12" style="text-align: right">
                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                    </div>
                </div>
            </form>
            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 4 End --}}
@endsection

@section('js')
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/bootstrap-submenu.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/tagify.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script src="{{ asset('dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/dropzone.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/singleimageupload.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/cs/dropzone.templates.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $('.dropify').dropify();

            CKEDITOR.replace('dekripsi_section_1');

            CKEDITOR.replace('dekripsi_section_4',{
                toolbarGroups: [{
                        "name": "basicstyles",
                        "groups": ["basicstyles"]
                    },
                    {
                        "name": 'clipboard',
                        "groups": ['Undo', 'Paste', 'Cut', 'Copy' ]
                    },
                    {
                        "name" : 'editing',
                        "groups" : ['Find', 'Replace', 'SelectAll']
                    },
                    {
                        "name": "paragraph",
                        "groups": ["list", "blocks"]
                    },
                    {
                        "name": "document",
                        "groups": ["mode"]
                    },
                    {
                        "name": "styles",
                        "groups": ["styles"]
                    }
                ],
                // Remove the redundant buttons from toolbar groups defined above.
                removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Source'
            });

            CKEDITOR.config.allowedContent = true;
        });

        // Section 2 Start
        var count_section_2 = 0;
        dynamic_section_2(count_section_2);
        function dynamic_section_2(number)
        {
            var urut = number - 1;
            html = '<div class="border shadow p-3 mb-3">'
                html += '<div class="form-group row">';
                    html += '<div class="col-12">';
                        html += '<h3>';
                            html += '<span class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-info d-flex justify-content-center align-items-center rounded-xl">'+number+'</span>';
                        html += '</h3>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Judul</label>';
                    html += '<div class="col-md-9">';
                        html +='<input type="text" class="form-control" name="section_2['+urut+'][judul]" required>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Deskripsi</label>';
                    html += '<div class="col-md-9">';
                        html += '<textarea name="section_2['+urut+'][deskripsi]" rows="5" class="form-control" required></textarea>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Link</label>';
                    html += '<div class="col-md-9">';
                        html +='<input type="text" class="form-control" name="section_2['+urut+'][link]" required>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Gambar</label>';
                    html += '<div class="col-md-9">';
                        html += '<input type="file" class="dropify" name="section_2['+urut+'][gambar]" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>';
                    html += '</div>';
                html += '</div>';
            html += '</div>';
            if(number >= 1)
            {
                $('#div_form_section_2').after(html);
                $('.dropify').dropify();
                $('.dropify-wrapper').css('line-height', '3rem');
            }
        }

        $(document).on('click', '.btn_tambah_section_2',function(){
            count_section_2++;
            dynamic_section_2(count_section_2);
        });

        $(document).on('click','.btn_hapus_section_2',function(){
            count_section_2--;
            if(count_section_2 < 0)
            {
                count_section_2 = 0;
            }
            $('#div_form_section_2').next('div').remove();
        });

        $('.btn_hapus_gambar_section_2').click(function(){
            var id = $(this).attr('value');
            return new swal({
                title: "Apakah Anda Yakin?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1976D2",
                confirmButtonText: "Ya"
            }).then((result)=>{
                if(result.value)
                {
                    $.ajax({
                        url: "{{ route('razen-blog.landing-page.beranda.hapus.section-2.konten') }}",
                        method: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id:id
                        },
                        dataType: "json",
                        beforeSend: function()
                        {
                            return new swal({
                                title: "Checking...",
                                text: "Harap Menunggu",
                                imageUrl: "{{ asset('/images/preloader.gif') }}",
                                showConfirmButton: false,
                                allowOutsideClick: false
                            });
                        },
                        success: function(data)
                        {
                            new swal({
                                icon: 'success',
                                title: data.success
                                }).then(function() {
                                    window.location.href = "{{ route('razen-blog.landing-page.beranda.index') }}";
                            });
                        }
                    });
                }
            });
        });
        // Section 2 End

        // Section 3 Start
        var count_section_3 = 0;
        dynamic_section_3(count_section_3);
        function dynamic_section_3(number)
        {
            var urut = number - 1;
            html = '<div class="border shadow p-3 mb-3">'
                html += '<div class="form-group row">';
                    html += '<div class="col-12">';
                        html += '<h3>';
                            html += '<span class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-info d-flex justify-content-center align-items-center rounded-xl">'+number+'</span>';
                        html += '</h3>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Judul</label>';
                    html += '<div class="col-md-9">';
                        html +='<input type="text" class="form-control" name="section_3['+urut+'][judul]" required>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Deskripsi</label>';
                    html += '<div class="col-md-9">';
                        html += '<textarea name="section_3['+urut+'][deskripsi]" rows="5" class="form-control" required></textarea>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Link</label>';
                    html += '<div class="col-md-9">';
                        html +='<input type="text" class="form-control" name="section_3['+urut+'][link]" required>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Gambar</label>';
                    html += '<div class="col-md-9">';
                        html += '<input type="file" class="dropify" name="section_3['+urut+'][gambar]" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>';
                    html += '</div>';
                html += '</div>';
            html += '</div>';
            if(number >= 1)
            {
                $('#div_form_section_3').after(html);
                $('.dropify').dropify();
                $('.dropify-wrapper').css('line-height', '3rem');
            }
        }

        $(document).on('click', '.btn_tambah_section_3',function(){
            count_section_3++;
            dynamic_section_3(count_section_3);
        });

        $(document).on('click','.btn_hapus_section_3',function(){
            count_section_3--;
            if(count_section_3 < 0)
            {
                count_section_3 = 0;
            }
            $('#div_form_section_3').next('div').remove();
        });

        $('.btn_hapus_gambar_section_3').click(function(){
            var id = $(this).attr('value');
            return new swal({
                title: "Apakah Anda Yakin?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1976D2",
                confirmButtonText: "Ya"
            }).then((result)=>{
                if(result.value)
                {
                    $.ajax({
                        url: "{{ route('razen-blog.landing-page.beranda.hapus.section-3.konten') }}",
                        method: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id:id
                        },
                        dataType: "json",
                        beforeSend: function()
                        {
                            return new swal({
                                title: "Checking...",
                                text: "Harap Menunggu",
                                imageUrl: "{{ asset('/images/preloader.gif') }}",
                                showConfirmButton: false,
                                allowOutsideClick: false
                            });
                        },
                        success: function(data)
                        {
                            new swal({
                                icon: 'success',
                                title: data.success
                                }).then(function() {
                                    window.location.href = "{{ route('razen-blog.landing-page.beranda.index') }}";
                            });
                        }
                    });
                }
            });
        });
        // Section 3 End
    </script>
@endsection
