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
        } else {
            $profesi = new LandingPageProfesi;
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $profesi->section_1 = json_encode($array);
        $profesi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-blog.landing-page.profesi.index');
    }
}
