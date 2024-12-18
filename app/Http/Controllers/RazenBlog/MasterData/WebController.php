<?php

namespace App\Http\Controllers\RazenBlog\MasterData;

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
use Illuminate\Support\Facades\Crypt;

use App\Models\MasterWeb;

class WebController extends Controller
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
            $data = new MasterWeb;
            $data = $data->where('is_active', '1');
            $data = $data->latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $id = Crypt::encryptString($data->id);
                    $button_show = '<button type="button" name="detail" id="'.$id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('razen-blog.master-data.web.index');
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
            'unique_code' => 'required | max:255'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $master_web = new MasterWeb;
        $master_web->nama = $request->nama;
        $master_web->unique_code = $request->unique_code;
        $master_web->is_active = '1';
        $master_web->save();

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
        $id = Crypt::decryptString($id);
        return response()->json(['result' => MasterWeb::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decryptString($id);
        return response()->json(['result' => MasterWeb::find($id)]);
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
            'unique_code' => 'required | max:255',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $hidden_id = Crypt::decryptString($request->hidden_id);
        $master_web = MasterWeb::find($hidden_id);
        $master_web->nama = $request->nama;
        $master_web->unique_code = $request->unique_code;
        $master_web->save();

        return response()->json(['success' => 'Berhasil merubah data']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Crypt::decryptString($id);
        $master_web = MasterWeb::find($id);
        $master_web->is_active = '0';
        $master_web->save();
    }
}
