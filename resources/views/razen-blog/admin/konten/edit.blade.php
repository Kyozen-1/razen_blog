@extends('razen-blog.layouts.app')
@section('title', 'Razen Blog | Konten | Edit')

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
            <h1 class="mb-0 pb-0 display-4" id="title">Razen Blog | Konten | Edit</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-blog.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-blog.admin.konten.index') }}">Konten</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <label for="" class="small-title">Edit Konten</label>
                </div>
                <div class="col-6" style="text-align: right;">
                    <a href="{{ route('razen-blog.admin.konten.index') }}" class="btn btn-icon btn-danger waves-effect waves-light"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('razen-blog.admin.konten.update') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="konten_id" value="{{$konten->id}}">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="mb-3 position-relative form-group">
                                    <label for="tipe_konten" class="form-label">Tipe Konten</label>
                                    <select id="tipe_konten" class="form-control" required>
                                        <option value="">--- Pilih ---</option>
                                        <option value="berita" @if($konten->kategori_konten->tipe_konten == 'berita') selected @endif>Berita</option>
                                        <option value="profesi" @if($konten->kategori_konten->tipe_konten == 'profesi') selected @endif>Profesi</option>
                                        <option value="teknis" @if($konten->kategori_konten->tipe_konten == 'teknis') selected @endif>Teknis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 position-relative form-group">
                                    <label for="kategori_konten_id" class="form-label">Kategori Konten</label>
                                    <select name="kategori_konten_id" id="kategori_konten_id" class="form-control" disabled required>
                                        <option value="">--- Pilih ---</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{$konten->judul}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="deskripsi_judul" class="form-label">Deskripsi Judul</label>
                            <textarea name="deskripsi_judul" id="deskripsi_judul" rows="5" class="form-control" required>{{$konten->deskripsi_judul}}</textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="deskripsi_overview" class="form-label">Deskripsi Overview</label>
                            <textarea name="deskripsi_overview" id="deskripsi_overview" rows="5" class="form-control" required>{{$konten->deskripsi_overview}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="gambar_mini" class="control-label">Gambar Mini</label>
                            <input type="file" class="dropify" name="gambar_mini" id="gambar_mini" data-height="150" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" data-default-file="{{ asset('images/razen-blog/konten/'.$konten->gambar_mini) }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h4 class="small-title">Edit Sub Judul</h4>
                        <table class="table table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="35%">Judul</th>
                                    <th width="50%">Deskripsi</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($konten->pivot_sub_judul_konten)
                                    @php
                                        $a = 1;
                                        $index_a = 0;
                                    @endphp
                                    @foreach ($konten->pivot_sub_judul_konten as $sub_judul)
                                        <tr>
                                            <td class="text-left">
                                                {{$a++}}
                                                <input type="hidden" name="edit_pivot_sub_judul_konten[{{$index_a}}][pivot_sub_judul_konten_id]" value="{{$sub_judul->id}}">
                                            </td>
                                            <td class="text-left">
                                                <input type="text" class="form-control" name="edit_pivot_sub_judul_konten[{{$index_a}}][judul]" value="{{$sub_judul->judul}}">
                                            </td>
                                            <td class="text-left">
                                                <textarea name="edit_pivot_sub_judul_konten[{{$index_a}}][deskripsi]" id="edit_pivot_sub_judul_konten_{{$sub_judul->id}}_deskripsi" rows="5" class="form-control">{{$sub_judul->deskripsi}}</textarea>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-danger hapus-pivot-sub-judul-konten" type="button" aria-hidden="true" data-id="{{$sub_judul->id}}" title="Hapus">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="hapus_id_pivot" id="hapus_id_pivot">
        <div class="card mb-3" id="status_tambah_sub_judul_card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-4" style="justify-content: center; align-self: center;">
                        <label for="status_tambah_sub_judul" class="small-title">Apakah anda ingin menambahkan Sub Judul dalam konten ini?</label>
                    </div>
                    <div class="col-8" style="justify-content: center; align-self: center;">
                        <select id="status_tambah_sub_judul" class="form-control">
                            <option value="">--- Pilih ---</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <h1 id="batas_tambah_sub_judul"></h1>
        <h1></h1>

        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group position-relative">
                            <label for="" class="form-label">Konten Terkait (optional)</label>
                            <select name="konten_terkait[]" id="konten_terkait" class="form-control" multiple >
                                @foreach ($kontens as $item)
                                    <option value="{{$item->id}}">{{$item->judul}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group position-relative" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light btn-icon" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
        var kategori_tipe_konten = "{{ $konten->kategori_konten->tipe_konten }}";
        var kategori_konten_id = "{{ $konten->kategori_konten_id}}";
        if(kategori_tipe_konten != "")
        {
            $.ajax({
                url: "{{ route('razen-blog.admin.konten.select.kategori-konten') }}",
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    tipe_konten: kategori_tipe_konten
                },
                success: function(response)
                {
                    $('#kategori_konten_id').empty();
                    $('#kategori_konten_id').append('<option value="">--- Pilih ---</option>');
                    $('#kategori_konten_id').prop('disabled', false);
                    $.each(response, function(id, nama){
                        $('#kategori_konten_id').append(new Option(nama, id));
                    });

                    if(kategori_konten_id != "")
                    {
                        $("[name='kategori_konten_id']").val(kategori_konten_id).trigger('change');
                    }
                }
            });
        }

        $(document).ready(function(){
            $('.dropify').dropify();
            $('#tipe_konten').select2();
            $('#kategori_konten_id').select2();
            $('#konten_terkait').select2();
            $('#konten_terkait').select2('val', @php $pivot_konten_terkait @endphp);

            CKEDITOR.replace('deskripsi_overview');

            @if ($konten->pivot_sub_judul_konten)
                @foreach ($konten->pivot_sub_judul_konten as $sub_judul)
                    CKEDITOR.replace("edit_pivot_sub_judul_konten_{{$sub_judul->id}}_deskripsi");
                @endforeach
            @endif

            CKEDITOR.config.allowedContent = true;
        });

        $('#tipe_konten').change(function(){
            var value = $(this).val();
            if(value != '')
            {
                $.ajax({
                    url: "{{ route('razen-blog.admin.konten.select.kategori-konten') }}",
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        tipe_konten: value
                    },
                    success: function(response)
                    {
                        $('#kategori_konten_id').empty();
                        $('#kategori_konten_id').append('<option value="">--- Pilih ---</option>');
                        $('#kategori_konten_id').prop('disabled', false);
                        $.each(response, function(id, nama){
                            $('#kategori_konten_id').append(new Option(nama, id));
                        });
                    }
                });
            } else {
                $('#kategori_konten_id').empty();
                $('#kategori_konten_id').append('<option value="">--- Pilih ---</option>');
                $('#kategori_konten_id').prop('disabled', true);
            }
        });

        $('#status_tambah_sub_judul').change(function(){
            var value = $(this).val();

            if(value == 'ya')
            {
                $('.field-sub-judul').remove();
                $('#card_tambah_sub_judul').remove();
                var tambah_sub_judul = $(`<div class="card mb-3" id="card_tambah_sub_judul">
                                            <div class="card-body">
                                                <div class="row form-group mb-3">
                                                    <div class="col-6 justify-content-center align-self-center" style="text-align:left;">
                                                        <label class="small-title">Tambah Sub Judul</label>
                                                    </div>
                                                    <div class="col-6" style="text-align: right;">
                                                        <button class="btn btn-icon waves-effect waves-light btn-primary mr-2" type="button" id="btn_tambah_sub_judul"><i class="fas fa-plus"></i></button>
                                                        <button class="btn btn-icon waves-effect waves-light btn-danger" type="button" id="btn_hapus_sub_judul"><i class="fas fa-minus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`);
                $('#status_tambah_sub_judul_card').after(tambah_sub_judul);
            } else {
                $('.field-sub-judul').remove();
                $('#card_tambah_sub_judul').remove();
            }
        });

        var count_sub_judul = 0;

        dynamic_field_sub_judul();
        function dynamic_field_sub_judul(number_sub_judul)
        {
            var index_sub_judul = number_sub_judul - 1;
            html = '<div class="card mb-3 border shadow p3 mb-3 field-sub-judul">';
                html += '<div class="card-body">';
                    html += '<div class="form-group row">';
                        html += '<div class="col-12" style="text-align:center;">';
                            html += '<h3>';
                                html += '<span class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-info d-flex justify-content-center align-items-center rounded-xl">'+number_sub_judul+'</span>';
                            html += '</h3>';
                        html +='</div>';
                    html += '</div>';
                    html += '<div class="position-relative mb-3 form-group row">';
                        html += '<label class="col-md-3 col-form-label">Judul</label>';
                        html += '<div class="col-md-9">';
                            html += '<input type="text" name="data_sub_judul['+index_sub_judul+'][judul]" class="form-control" required>';
                        html += '</div>';
                    html +='</div>';
                    html += '<div class="position-relative mb-3 form-group row">';
                        html += '<label class="col-md-3 col-form-label">deskripsi</label>';
                        html += '<div class="col-md-9">';
                            html += '<textarea class="form-control" rows="5" name="data_sub_judul['+index_sub_judul+'][deskripsi]" id="data_sub_judul_'+index_sub_judul+'_deskripsi" required></textarea>';
                        html += '</div>';
                    html +='</div>';
                html +='</div>';
            html += '</div>';

            if(number_sub_judul >= 1)
            {
                $('#batas_tambah_sub_judul').after(html);
                CKEDITOR.replace('data_sub_judul_'+index_sub_judul+'_deskripsi');
                CKEDITOR.config.allowedContent = true;
            }
        }

        $(document).on('click', '#btn_tambah_sub_judul', function(){
            count_sub_judul++;
            dynamic_field_sub_judul(count_sub_judul);
        });

        $(document).on('click', '#btn_hapus_sub_judul', function(){
            count_sub_judul--;
            if(count_sub_judul < 0)
            {
                count_sub_judul = 0;
            }
            $('#batas_tambah_sub_judul').next('div').remove();
        });

        var ID_PIVOT = [];

        $('.hapus-pivot-sub-judul-konten').click(function() {
            var id = $(this).attr('data-id');
            var _t = $(this);
            ID_PIVOT.push(id);
            $('#hapus_id_pivot').val(ID_PIVOT);
            _t.parent().parent().remove();
        });
    </script>
@endsection
