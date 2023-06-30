<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\MasterKategoriKonten;
use App\Models\PivotKontenTerkait;
use App\Models\PivotSubJudulKonten;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('landing-page.beranda.index');
    }

    public function berita()
    {
        return view('landing-page.berita.index');
    }

    public function profesi()
    {
        $kontens = Konten::whereHas('kategori_konten', function($q){
            $q->where('tipe_konten', 'profesi');
        })->paginate(5);

        $kategori_kontens = MasterKategoriKonten::where('tipe_konten', 'profesi')->get();
        return view('landing-page.profesi.index', [
            'kontens' => $kontens,
            'kategori_kontens' => $kategori_kontens
        ]);
    }

    public function teknis()
    {
        return view('landing-page.teknis.index');
    }

    public function kosakata()
    {
        return view('landing-page.kosakata.index');
    }
}
