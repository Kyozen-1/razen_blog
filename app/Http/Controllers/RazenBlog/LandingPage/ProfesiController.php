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
use App\Models\LandingPageProfesi;

class ProfesiController extends Controller
{
    public function index()
    {
        return view('razen-blog.landing-page.profesi.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageProfesi::first();
        if($cek)
        {
            $profesi = LandingPageProfesi::find($cek->id);
            if($profesi->section_1)
            {
                if ($request->gambar_background) {
                    $gambarBackgroundName = $get_section_1['gambar_background'];
                    File::delete(public_path('images/landing-page/profesi/'.$gambarBackgroundName));

                    $gambarBackgroundExtension = $request->gambar_background->extension();
                    $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                    $gambarBackground = Image::make($request->gambar_background);
                    $gambarBackgroundSize = public_path('images/landing-page/profesi/'.$gambarBackgroundName);
                    $gambarBackground->save($gambarBackgroundSize, 100);
                } else {
                    $gambarBackgroundName = $get_section_4['gambar_background'];
                }
            } else {
                $gambarBackgroundExtension = $request->gambar_background->extension();
                $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                $gambarBackground = Image::make($request->gambar_background);
                $gambarBackgroundSize = public_path('images/landing-page/profesi/'.$gambarBackgroundName);
                $gambarBackground->save($gambarBackgroundSize, 100);
            }
        } else {
            $profesi = new LandingPageProfesi;

            $gambarBackgroundExtension = $request->gambar_background->extension();
            $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
            $gambarBackground = Image::make($request->gambar_background);
            $gambarBackgroundSize = public_path('images/landing-page/profesi/'.$gambarBackgroundName);
            $gambarBackground->save($gambarBackgroundSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar_background' => $gambarBackgroundName,
        ];

        $profesi->section_1 = json_encode($array);
        $profesi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-blog.landing-page.profesi.index');
    }
}
