<?php

namespace App\Http\Controllers\RazenBlog\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use Auth;
use App\Models\LandingPageBeranda;

class BerandaController extends Controller
{
    public function index()
    {
        return view('razen-blog.landing-page.beranda.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageBeranda::first();
        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
            if($beranda->section_1)
            {
                $get_section_1 = json_decode($beranda->section_1, true);

                if ($request->gambar_background) {
                    $gambarBackgroundName = $get_section_1['gambar'];
                    File::delete(public_path('images/landing-page/beranda/'.$gambarBackgroundName));

                    $gambarBackgroundExtension = $request->gambar_background->extension();
                    $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                    $gambarBackground = Image::make($request->gambar_background);
                    $gambarBackgroundSize = public_path('images/landing-page/beranda/'.$gambarBackgroundName);
                    $gambarBackground->save($gambarBackgroundSize, 100);
                } else {
                    $gambarBackgroundName = $get_section_1['gambar'];
                }
            } else {
                $gambarBackgroundExtension = $request->gambar_background->extension();
                $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                $gambarBackground = Image::make($request->gambar_background);
                $gambarBackgroundSize = public_path('images/landing-page/beranda/'.$gambarBackgroundName);
                $gambarBackground->save($gambarBackgroundSize, 100);
            }
        } else {
            $beranda = new LandingPageBeranda;

            $gambarBackgroundExtension = $request->gambar_background->extension();
            $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
            $gambarBackground = Image::make($request->gambar_background);
            $gambarBackgroundSize = public_path('images/landing-page/beranda/'.$gambarBackgroundName);
            $gambarBackground->save($gambarBackgroundSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar_background' => $gambarBackgroundName
        ];

        $beranda->section_1 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-blog.landing-page.beranda.index');
    }

    public function store_section_2(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-blog.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();

        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
            if($cek->section_2)
            {
                $get_section_2 = json_decode($beranda->section_2, true);

                if($get_section_2['konten'] != '')
                {
                    $konten = $get_section_2['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $konten = '';
            }

        } else {
            $beranda = new LandingPageBeranda;

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'konten' => $konten
        ];

        $beranda->section_2 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-blog.landing-page.beranda.index');
    }

    public function store_section_2_konten(Request $request)
    {
        $konten_section_2 = $request->section_2;

        $get = LandingPageBeranda::first();

        if($get->section_2)
        {
            $beranda = LandingPageBeranda::find($get->id);

            $data_section_2 = json_decode($get->section_2, true);

            if($data_section_2['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_2); $i++) {
                    $gambarExtension = $konten_section_2[$i]['gambar']->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($konten_section_2[$i]['gambar']);
                    $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                    $gambar->save($gambarSize, 100);

                    $data[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_2[$i]['judul'],
                        'deskripsi' => $konten_section_2[$i]['deskripsi'],
                        'link' => $konten_section_2[$i]['link'],
                        'gambar' => $gambarName
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_2['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'link' => $value['link'],
                        'gambar' => $value['gambar'],
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_2); $i++) {
                    $gambarExtension = $konten_section_2[$i]['gambar']->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($konten_section_2[$i]['gambar']);
                    $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                    $gambar->save($gambarSize, 100);

                    $data_baru[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_2[$i]['judul'],
                        'deskripsi' => $konten_section_2[$i]['deskripsi'],
                        'link' => $konten_section_2[$i]['link'],
                        'gambar' => $gambarName
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_2['judul'],
                'konten' => $data
            ];

            $beranda->section_2 = json_encode($array);
            $beranda->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
            return redirect()->route('razen-blog.landing-page.beranda.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 2');
            return redirect()->route('razen-blog.landing-page.beranda.index');
        }
    }

    public function hapus_section_2_konten(Request $request)
    {
        $get = LandingPageBeranda::first();
        $data = [];
        $data_section_2 = json_decode($get->section_2, true);
        foreach ($data_section_2['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'deskripsi' => $value['deskripsi'],
                    'link' => $value['link'],
                    'gambar' => $value['gambar'],
                ];
            } else {
                $gambarName = $value['gambar'];
                File::delete(public_path('images/landing-page/beranda/'.$gambarName));
            }
        }

        $landingpage_beranda = LandingPageBeranda::find($get->id);
        $array = [
            'judul' => $data_section_2['judul'],
            'konten' => $data
        ];
        $landingpage_beranda->section_2 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_3(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-blog.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();

        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
            if($cek->section_3)
            {
                $get_section_3 = json_decode($beranda->section_3, true);

                if($get_section_3['konten'] != '')
                {
                    $konten = $get_section_3['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $konten = '';
            }

        } else {
            $beranda = new LandingPageBeranda;

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'konten' => $konten
        ];

        $beranda->section_3 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-blog.landing-page.beranda.index');
    }

    public function store_section_3_konten(Request $request)
    {
        $konten_section_3 = $request->section_3;

        $get = LandingPageBeranda::first();

        if($get->section_3)
        {
            $beranda = LandingPageBeranda::find($get->id);

            $data_section_3 = json_decode($get->section_3, true);

            if($data_section_3['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_3); $i++) {
                    $gambarExtension = $konten_section_3[$i]['gambar']->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($konten_section_3[$i]['gambar']);
                    $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                    $gambar->save($gambarSize, 100);

                    $data[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_3[$i]['judul'],
                        'deskripsi' => $konten_section_3[$i]['deskripsi'],
                        'link' => $konten_section_3[$i]['link'],
                        'gambar' => $gambarName
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_3['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'link' => $value['link'],
                        'gambar' => $value['gambar'],
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_3); $i++) {
                    $gambarExtension = $konten_section_3[$i]['gambar']->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($konten_section_3[$i]['gambar']);
                    $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                    $gambar->save($gambarSize, 100);

                    $data_baru[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_3[$i]['judul'],
                        'deskripsi' => $konten_section_3[$i]['deskripsi'],
                        'link' => $konten_section_3[$i]['link'],
                        'gambar' => $gambarName
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_3['judul'],
                'konten' => $data
            ];

            $beranda->section_3 = json_encode($array);
            $beranda->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-blog.landing-page.beranda.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 3');
            return redirect()->route('razen-blog.landing-page.beranda.index');
        }
    }

    public function hapus_section_3_konten(Request $request)
    {
        $get = LandingPageBeranda::first();
        $data = [];
        $data_section_3 = json_decode($get->section_3, true);
        foreach ($data_section_3['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'deskripsi' => $value['deskripsi'],
                    'link' => $value['link'],
                    'gambar' => $value['gambar'],
                ];
            } else {
                $gambarName = $value['gambar'];
                File::delete(public_path('images/landing-page/beranda/'.$gambarName));
            }
        }

        $landingpage_beranda = LandingPageBeranda::find($get->id);
        $array = [
            'judul' => $data_section_3['judul'],
            'konten' => $data
        ];
        $landingpage_beranda->section_3 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_4(Request $request)
    {
        $cek = LandingPageBeranda::first();
        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
            if($beranda->section_4)
            {
                $get_section_4 = json_decode($beranda->section_4, true);

                if ($request->gambar) {
                    $gambarName = $get_section_4['gambar'];
                    File::delete(public_path('images/landing-page/beranda/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_4['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $beranda = new LandingPageBeranda;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $beranda->section_4 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-blog.landing-page.beranda.index');
    }
}
