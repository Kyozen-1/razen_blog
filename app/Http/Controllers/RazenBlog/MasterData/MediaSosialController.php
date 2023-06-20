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
use App\Models\MasterMediaSosial;

class MediaSosialController extends Controller
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
            $data = MasterMediaSosial::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('kode_ikon', function($data) {
                    return '<img src="'.asset('images/razen-blog/ikon/'.$data->kode_ikon).'" style="height:5rem;">';
                })
                ->rawColumns(['aksi', 'kode_ikon'])
                ->make(true);
        }
        return view('razen-blog.master-data.media-sosial.index');
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
            'kode_ikon' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $kodeIkonExtension = $request->kode_ikon->extension();
        $kodeIkonName =  uniqid().'-'.date("ymd").'.'.$kodeIkonExtension;
        $kodeIkon = Image::make($request->kode_ikon);
        $kodeIkonSize = public_path('images/razen-blog/ikon/'.$kodeIkonName);
        $kodeIkon->save($kodeIkonSize, 60);

        $master_media_sosial = new MasterMediaSosial;
        $master_media_sosial->nama = $request->nama;
        $master_media_sosial->kode_ikon = $kodeIkonName;
        $master_media_sosial->save();

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
        return response()->json(['result' => MasterMediaSosial::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => MasterMediaSosial::find($id)]);
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
            'kode_ikon' => 'required | max:255',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $master_media_sosial = MasterMediaSosial::find($request->hidden_id);
        $master_media_sosial->nama = $request->nama;
        if ($request->kode_ikon) {
            File::delete(public_path('images/razen-blog/ikon/'.$master_media_sosial->kode_ikon));

            $kodeIkonExtension = $request->kode_ikon->extension();
            $kodeIkonName =  uniqid().'-'.date("ymd").'.'.$kodeIkonExtension;
            $kodeIkon = Image::make($request->kode_ikon);
            $kodeIkonSize = public_path('images/razen-blog/ikon/'.$kodeIkonName);
            $kodeIkon->save($kodeIkonSize, 60);

            $master_media_sosial->kode_ikon = $kodeIkonName;
        }
        $master_media_sosial->save();

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
        $master_media_sosial = MasterMediaSosial::find($id);

        File::delete(public_path('images/razen-blog/ikon/'.$master_media_sosial->kode_ikon));

        $master_media_sosial->delete();
    }
}
