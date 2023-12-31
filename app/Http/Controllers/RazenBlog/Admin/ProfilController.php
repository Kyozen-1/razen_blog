<?php

namespace App\Http\Controllers\RazenBlog\Admin;

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
use App\Models\Profil;
use App\Models\PivotProfilMediaSosial;
use App\Models\MasterMediaSosial;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        $media_sosial = MasterMediaSosial::pluck('nama', 'id');

        $cek_pivot = PivotProfilMediaSosial::where('profil_id', $profil->id)->first();
        $pivot_profil_media_sosial = [];
        if($cek_pivot)
        {
            $pivot_profil_media_sosial = [
                'status' => 'ada',
                'pivot' => PivotProfilMediaSosial::where('profil_id', $profil->id)->get()
            ];
        } else {
            $pivot_profil_media_sosial = [
                'status' => 'tidak ada',
                'pivot' => ''
            ];
        }

        return view('razen-blog.admin.profil.index', [
            'profil' => $profil,
            'media_sosial' => $media_sosial,
            'pivot_profil_media_sosial' => $pivot_profil_media_sosial
        ]);
    }

    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'pt' => 'required | max:255',
            'no_hp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required'
        ]);
        if($errors -> fails())
        {
            return back()->withErrors($errors)->withInput();
        }

        if($request->logo)
        {
            $errors = Validator::make($request->all(), [
                'logo' => 'mimes:png,jpeg,jpg,webp',
            ]);
            if($errors -> fails())
            {
                return back()->withErrors($errors)->withInput();
            }
        }

        if($request->logo_kecil)
        {
            $errors = Validator::make($request->all(), [
                'logo_kecil' => 'mimes:png,jpeg,jpg,webp',
            ]);
            if($errors -> fails())
            {
                return back()->withErrors($errors)->withInput();
            }
        }

        $get_profil = Profil::first();
        if($get_profil)
        {
            $profil = Profil::find($get_profil->id);
        } else {
            $profil = new Profil;
        }

        $profil->nama = $request->nama;
        $profil->pt = $request->pt;
        $profil->no_hp = $request->no_hp;
        $profil->email = $request->email;
        $profil->alamat = $request->alamat;
        $profil->deskripsi = $request->deskripsi;

        if($request->logo)
        {
            File::delete(public_path('images/razen-blog/logo/'.$profil->logo));

            $logoExtension = $request->logo->extension();
            $logoName =  uniqid().'-'.date("ymd").'.'.$logoExtension;
            $logo = Image::make($request->logo);
            $logoSize = public_path('images/razen-blog/logo/'.$logoName);
            $logo->save($logoSize, 60);

            $profil->logo = $logoName;
        }

        if($request->logo_kecil)
        {
            File::delete(public_path('images/razen-blog/logo/'.$profil->logo_kecil));

            $logoKecilExtension = $request->logo_kecil->extension();
            $logoKecilName =  uniqid().'-'.date("ymd").'.'.$logoKecilExtension;
            $logoKecil = Image::make($request->logo_kecil);
            $logoKecilSize = public_path('images/razen-blog/logo/'.$logoKecilName);
            $logoKecil->save($logoKecilSize, 60);

            $profil->logo_kecil = $logoKecilName;
        }

        $profil->save();

        Alert::success('Berhasil', 'Berhasil memperbaharui profil');
        return redirect()->route('razen-blog.admin.profil.index');
    }

    public function edit_media_sosial_profil(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $id = $request->id;
        for ($i=0; $i < count($id); $i++) {
            PivotProfilMediaSosial::find($id[$i])->delete();
        }

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function tambah_media_sosial_profil(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'data_media_sosial' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $dataMediaSosial = $request->data_media_sosial;

        for ($i=0; $i < count($dataMediaSosial); $i++) {
            $pivot_profil_media_sosial = new PivotProfilMediaSosial;
            $pivot_profil_media_sosial->media_sosial_id = $dataMediaSosial[$i]['master_media_sosial_id'];
            $pivot_profil_media_sosial->profil_id = $dataMediaSosial[$i]['profil_id'];
            $pivot_profil_media_sosial->tautan = $dataMediaSosial[$i]['tautan'];
            $pivot_profil_media_sosial->save();
        }

        return response()->json(['success' => 'Data media sosial profil berhasil ditambahkan!']);
    }
}
