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
use App\Models\LandingPageKontrol;

class KontrolController extends Controller
{
    public function index()
    {
        return view('razen-blog.landing-page.kontrol.index');
    }
}
