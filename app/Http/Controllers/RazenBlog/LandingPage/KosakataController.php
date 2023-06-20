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
use App\Models\LandingPageKosakata;

class KosakataController extends Controller
{
    public function index()
    {
        return view('razen-blog.landing-page.kosakata.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageKosakata::first();
        if($cek)
        {
            $kosakata = LandingPageKosakata::find($cek->id);
        } else {
            $kosakata = new LandingPageKosakata;
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $kosakata->section_1 = json_encode($array);
        $kosakata->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-blog.landing-page.kosakata.index');
    }
}
