<?php

namespace App\Http\Controllers\RazenBlog\Penulis;

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
use Illuminate\Support\Facades\Hash;

class KontenController extends Controller
{
    public function index()
    {
        return view('penulis.konten.index');
    }

    public function create()
    {
        return view('penulis.konten.create');
    }
}
