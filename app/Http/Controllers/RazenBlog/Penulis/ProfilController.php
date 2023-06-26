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
use App\Models\Penulis;
use App\Models\AkunPenulis;
use App\Models\PivotPenulisMediaSosial;
use App\Models\MasterMediaSosial;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = Penulis::find(Auth::user()->penulis_id);

        $media_sosial = MasterMediaSosial::pluck('nama', 'id');

        $cek_pivot = PivotPenulisMediaSosial::where('penulis_id', $penulis->id)->first();
        $pivot_penulis_media_sosial = [];
        if($cek_pivot)
        {
            $pivot_penulis_media_sosial = [
                'status' => 'ada',
                'pivot' => PivotPenulisMediaSosial::where('penulis_id', $penulis->id)->get()
            ];
        } else {
            $pivot_penulis_media_sosial = [
                'status' => 'tidak ada',
                'pivot' => ''
            ];
        }

        return view('penulis.profil.index', [
            'profil' => $penulis,
            'media_sosial' => $media_sosial,
            'pivot_penulis_media_sosial' => $pivot_penulis_media_sosial
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'no_hp' => 'required',
        ]);
        if($errors -> fails())
        {
            return back()->withErrors($errors)->withInput();
        }

        if($request->foto)
        {
            $errors = Validator::make($request->all(), [
                'foto' => 'mimes:png,jpeg,jpg,webp',
            ]);
            if($errors -> fails())
            {
                return back()->withErrors($errors)->withInput();
            }
        }

        $profil = Penulis::find(Auth::user()->penulis_id);
        $profil->nama = $request->nama;
        $profil->no_hp = $request->no_hp;

        if($request->foto)
        {
            File::delete(public_path('images/razen-blog/foto/'.$profil->foto));

            $fotoExtension = $request->foto->extension();
            $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
            $foto = Image::make($request->foto);
            $fotoSize = public_path('images/razen-blog/foto/'.$fotoName);
            $foto->save($fotoSize, 60);

            $profil->foto = $fotoName;
        }

        $profil->save();

        $akun = AkunPenulis::find(Auth::user()->id);
        $akun->name = $request->nama;
        $akun->save();

        Alert::success('Berhasil', 'Berhasil memperbaharui profil');
        return redirect()->route('razen-blog.penulis.profil.index');
    }

    public function ubah_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, Auth::user()->password)){
            return back()->with("error", "Password lama salah!");
        }

        AkunPenulis::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password Berhasil diubah!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
            PivotPenulisMediaSosial::find($id[$i])->delete();
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
            $pivot_penulis_media_sosial = new PivotPenulisMediaSosial;
            $pivot_penulis_media_sosial->media_sosial_id = $dataMediaSosial[$i]['master_media_sosial_id'];
            $pivot_penulis_media_sosial->penulis_id = $dataMediaSosial[$i]['profil_id'];
            $pivot_penulis_media_sosial->tautan = $dataMediaSosial[$i]['tautan'];
            $pivot_penulis_media_sosial->save();
        }

        return response()->json(['success' => 'Data media sosial penulis berhasil ditambahkan!']);
    }
}
