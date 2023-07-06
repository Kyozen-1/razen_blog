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
use App\Models\LandingPageTeknis;

class TeknisController extends Controller
{
    public function index()
    {
        return view('razen-blog.landing-page.teknis.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageTeknis::first();
        if($cek)
        {
            $teknis = LandingPageTeknis::find($cek->id);
            if($teknis->section_1)
            {
                if ($request->gambar_background) {
                    $gambarBackgroundName = $get_section_1['gambar_background'];
                    File::delete(public_path('images/landing-page/teknis/'.$gambarBackgroundName));

                    $gambarBackgroundExtension = $request->gambar_background->extension();
                    $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                    $gambarBackground = Image::make($request->gambar_background);
                    $gambarBackgroundSize = public_path('images/landing-page/teknis/'.$gambarBackgroundName);
                    $gambarBackground->save($gambarBackgroundSize, 100);
                } else {
                    $gambarBackgroundName = $get_section_4['gambar_background'];
                }
            } else {
                $gambarBackgroundExtension = $request->gambar_background->extension();
                $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                $gambarBackground = Image::make($request->gambar_background);
                $gambarBackgroundSize = public_path('images/landing-page/teknis/'.$gambarBackgroundName);
                $gambarBackground->save($gambarBackgroundSize, 100);
            }
        } else {
            $teknis = new LandingPageTeknis;

            $gambarBackgroundExtension = $request->gambar_background->extension();
            $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
            $gambarBackground = Image::make($request->gambar_background);
            $gambarBackgroundSize = public_path('images/landing-page/teknis/'.$gambarBackgroundName);
            $gambarBackground->save($gambarBackgroundSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar_background' => $gambarBackgroundName,
        ];

        $teknis->section_1 = json_encode($array);
        $teknis->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-blog.landing-page.teknis.index');
    }
}
