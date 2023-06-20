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
use App\Models\LandingPagePanduan;

class PanduanController extends Controller
{
    public function index()
    {
        return view('razen-blog.landing-page.panduan.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPagePanduan::first();
        if($cek)
        {
            $panduan = LandingPagePanduan::find($cek->id);
        } else {
            $panduan = new LandingPagePanduan;
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'judul_tombol' => $request->judul_tombol,
            'link' => $request->link,
            'warna' => $request->warna,
        ];

        $panduan->section_1 = json_encode($array);
        $panduan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-blog.landing-page.panduan.index');
    }
}
