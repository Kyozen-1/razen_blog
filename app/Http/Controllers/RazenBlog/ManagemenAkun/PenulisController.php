<?php

namespace App\Http\Controllers\RazenBlog\ManagemenAkun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use Auth;
use App\Models\AkunPenulis;
use App\Models\Penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $data = new Penulis;
            $data = $data->latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){

                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';

                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';

                    $button_update_password = '<button type="button" name="update-password" data-id="'.$data->akun_penulis->id.'"
                    class="update-password btn btn-icon waves-effect btn-warning" title="Update Password"><i class="fas fa-user"></i></button>';

                    if ($data->akun_penulis->is_active == 1) {
                        $button_status_penulis = '<button type="button" name="status-penulis" data-id="'.$data->akun_penulis->id.'"
                        class="status-penulis btn btn-icon waves-effect btn-danger" title="Ubah Status Penulis"><i class="fas fa-x"></i></button>';
                    } else {
                        $button_status_penulis = '<button type="button" name="status-penulis" data-id="'.$data->akun_penulis->id.'"
                        class="status-penulis btn btn-icon waves-effect btn-success" title="Ubah Status Penulis"><i class="fas fa-check"></i></button>';
                    }

                    $button = $button_show . ' ' . $button_edit . ' ' . $button_update_password . ' ' . $button_status_penulis;
                    return $button;
                })
                ->editColumn('foto', function($data) {
                    return '<img src="'.asset('images/razen-blog/foto/'.$data->foto).'" style="height:5rem;">';
                })
                ->addColumn('email', function($data){
                    return $data->akun_penulis->email;
                })
                ->rawColumns(['aksi', 'foto'])
                ->make(true);
        }
        return view('razen-blog.managemen-akun.penulis.index');
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
            'email' => 'required | max:255 | unique:akun_penulis',
            'password' => 'required',
            'foto' => 'required | mimes:png,jpg,jpeg'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $fotoExtension = $request->foto->extension();
        $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
        $foto = Image::make($request->foto);
        $fotoSize = public_path('images/razen-blog/foto/'.$fotoName);
        $foto->save($fotoSize, 60);

        $penulis = new Penulis;
        $penulis->nama = $request->nama;
        $penulis->no_hp = $request->no_hp;
        $penulis->foto = $fotoName;
        $penulis->save();

        $akun_penulis = new AkunPenulis;
        $akun_penulis->name = $request->nama;
        $akun_penulis->email = $request->email;
        $akun_penulis->password = Hash::make($request->password);
        $akun_penulis->penulis_id = $penulis->id;
        $akun_penulis->is_active = 1;
        $akun_penulis->save();

        return response()->json(['success' => 'Berhasil menyimpan data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Penulis::find($id);
        $data['email'] = $data->akun_penulis->email;

        return response()->json(['result' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Penulis::find($id);
        return response()->json(['result' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'no_hp' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $penulis = Penulis::find($request->hidden_id);
        $penulis->nama = $request->nama;
        $penulis->no_hp = $request->no_hp;
        if($request->foto)
        {
            File::delete(public_path('images/razen-blog/foto/'.$penulis->foto));

            $fotoExtension = $request->foto->extension();
            $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
            $foto = Image::make($request->foto);
            $fotoSize = public_path('images/razen-blog/foto/'.$fotoName);
            $foto->save($fotoSize, 60);

            $penulis->foto = $fotoName;
        }
        $penulis->save();

        $get_akun_penulis = AkunPenulis::where('penulis_id', $penulis->id)->first();

        $akun_penulis = AkunPenulis::find($get_akun_penulis->id);
        $akun_penulis->name = $request->nama;
        $akun_penulis->save();

        return response()->json(['success' => 'Berhasil mengubah data']);
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

    public function update_password(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'password' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $akun_penulis = AkunPenulis::find($request->penulis_id);
        $akun_penulis->password = Hash::make($request->password);
        $akun_penulis->save();

        return response()->json(['success' => 'Berhasil merubah password']);
    }

    public function update_status_penulis($id)
    {
        try {
            $akun_penulis = AkunPenulis::find($id);
            if($akun_penulis->is_active == 1)
            {
                $akun_penulis->is_active = '0';
            }

            if($akun_penulis->is_active == '0')
            {
                $akun_penulis->is_active = 1;
            }

            $akun_penulis->save();

            return response()->json(['success' => 'Berhasil merubah password']);
        } catch (\Throwable $th) {
            return response()->json(['error' =>$th]);
        }
    }
}
