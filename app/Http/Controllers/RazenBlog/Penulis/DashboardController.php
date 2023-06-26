<?php

namespace App\Http\Controllers\RazenBlog\Penulis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\AkunPenulis;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('penulis.dashboard.index');
    }

    public function change(Request $request)
    {
        $akun_penulis = AkunPenulis::find(Auth::user()->id);
        $akun_penulis->color_layout = $request->color_layout;
        $akun_penulis->nav_color = $request->nav_color;
        $akun_penulis->behaviour = $request->behaviour;
        $akun_penulis->layout = $request->layout;
        $akun_penulis->radius = $request->radius;
        $akun_penulis->placement = $request->placement;
        $akun_penulis->save();
    }
}
