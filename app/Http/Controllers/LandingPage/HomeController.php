<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('landing-page.profesi.index');
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
