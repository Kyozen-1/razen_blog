@extends('penulis.layouts.app')
@section('title', 'Razen Blog | Penulis | Konten | Detail')

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
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Razen Blog | Penulis | Konten | Detail</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-blog.penulis.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Penulis</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-blog.penulis.konten.index') }}">Konten</a></li>
                    <li class="breadcrumb-item"><a href="#">Detail</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12" style="text-align:right">
            <a class="btn btn-outline-primary waves-effect waves-light mr-2 item_create" title="Kembali" href="{{ route('razen-blog.penulis.konten.index') }}"><i class="fas fa-arrow-left"></i></a>
        </div>
    </div>

    <!-- Title and Top Buttons End -->
    <div class="row">
        <div class="col-12 col-xl-8 col-xxl-9 mb-5">
            <!-- Content Start -->
            <div class="card-body p-0">
                <div class="card-body pt-0">
                    <h4 class="mb-3">{{$konten->judul}}</h4>
                    <div>
                        <p>
                            {{$konten->deskripsi_judul}}
                        </p>
                        <h6 class="mb-3 mt-5 text-alternate">Overview</h6>
                        {!! $konten->deskripsi_overview !!}
                        <hr>
                        @if ($konten->pivot_sub_judul_konten)
                            @foreach ($konten->pivot_sub_judul_konten as $sub_judul)
                                <h6 class="mb-3 mt-5 text-alternate">{{$sub_judul->judul}}</h6>
                                {!! $sub_judul->deskripsi !!}
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- Content End -->
        </div>

        <!-- Right Side Start -->
        <div class="col-12 col-xl-4 col-xxl-3">

            <div class="row">
                <div class="col-12 col-sm-6 col-xl-12 mb-5">
                    <div class="card w-100 sh-25 hover-img-scale-up">
                        <img src="{{ asset('images/razen-blog/konten/'.$konten->gambar_mini) }}" class="card-img h-100 scale" alt="card image" />
                        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                            <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <a href="#" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                <span>{{$konten->kategori_konten->nama}}</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="small-title">Terkait</h4>
            @if ($konten->pivot_konten_terkait)
                <div class="row mb-n2">
                    @foreach ($konten->pivot_konten_terkait as $konten_terkait)
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="card sh-11 sh-sm-14 mb-2">
                                <div class="row g-0 h-100">
                                    <div class="col-auto">
                                        <img src="{{ asset('images/razen-blog/konten/'.$konten_terkait->child->gambar_mini) }}" alt="alternate text" class="card-img card-img-horizontal sw-10 sw-sm-14" />
                                    </div>
                                    <div class="col position-static">
                                        <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <a href="{{ route('razen-blog.penulis.konten.detail', ['id'=>$konten_terkait->id]) }}" class="stretched-link body-link">
                                                    <div class="clamp-line" data-line="2">{{$konten_terkait->child->judul}}</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <!-- Right Side End -->
    </div>
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
@endsection
