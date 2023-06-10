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

    public function panduan_karir()
    {
        return view('landing-page.panduan-karir.index');
    }

    public function panduan_teknis()
    {
        return view('landing-page.panduan-teknis.index');
    }

    public function kosakata()
    {
        return view('landing-page.kosakata.index');
    }
}
