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
use Illuminate\Support\Facades\Hash;
use App\Models\Konten;
use App\Models\MasterKategoriKonten;
use App\Models\PivotKontenTerkait;
use App\Models\PivotSubJudulKonten;

class KontenController extends Controller
{
    public function index()
    {

        $kontens = Konten::all()
                    ->map(function($data){
                        if ($data->is_admin == 1) {
                            $penulis = [
                                'nama' => "Admin"
                            ];
                        } else {
                            $penulis = [
                                'nama' => $data->penulis->nama,
                                'foto' => $data->penulis->foto,
                            ];
                        }
                        return [
                            'id' => $data->id,
                            'penulis' => $penulis,
                            'kategori_konten' => $data->kategori_konten->nama,
                            'judul' => $data->judul,
                            'deskripsi_judul' => $data->deskripsi_judul,
                            'deskripsi_overview' => $data->deskripsi_overview,
                            'gambar_mini' => $data->gambar_mini,
                            'tgl' => $data->tgl,
                            'pivot_sub_judul_konten' => $data->pivot_sub_judul_konten,
                            'pivot_konten_terkait' => $data->parent_pivot_konten_terkait
                        ];
                    });
        return view('razen-blog.admin.konten.index', [
            'kontens' => $kontens
        ]);
    }

    public function create()
    {
        $kontens = Konten::select('id', 'judul')->latest()->get();

        return view('razen-blog.admin.konten.create', [
            'kontens' => $kontens
        ]);
    }

    public function select_kategori_konten(Request $request)
    {
        $kategoriKontens = MasterKategoriKonten::where('tipe_konten', $request->tipe_konten)
                            ->pluck('nama', 'id');
        return response()->json($kategoriKontens);
    }

    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'kategori_konten_id' => 'required',
            'judul' => 'required',
            'deskripsi_judul' => 'required',
            'deskripsi_overview' => 'required',
            'gambar_mini' => 'required | mimes:jpeg,jpg,png'
        ]);
        if($errors -> fails())
        {
            return back()->withErrors($errors)->withInput();
        }

        $gambarMiniExtension = $request->gambar_mini->extension();
        $gambarMiniName =  uniqid().'-'.date("ymd").'.'.$gambarMiniExtension;
        $gambarMini = Image::make($request->gambar_mini);
        $gambarMiniSize = public_path('images/razen-blog/konten/'.$gambarMiniName);
        $gambarMini->save($gambarMiniSize, 60);

        $konten = new Konten;
        $konten->is_admin = '1';
        $konten->kategori_konten_id = $request->kategori_konten_id;
        $konten->judul = $request->judul;
        $konten->deskripsi_judul = $request->deskripsi_judul;
        $konten->deskripsi_overview = $request->deskripsi_overview;
        $konten->gambar_mini = $gambarMiniName;
        $konten->tgl = Carbon::now();
        $konten->save();

        $data_sub_judul = $request->data_sub_judul;

        for ($i=0; $i < count($data_sub_judul); $i++) {
            $pivot = new PivotSubJudulKonten;
            $pivot->konten_id = $konten->id;
            $pivot->judul = $data_sub_judul[$i]['judul'];
            $pivot->deskripsi = $data_sub_judul[$i]['deskripsi'];
            $pivot->save();
        }

        if($request->konten_terkait)
        {
            $konten_terkait = $request->konten_terkait;

            for ($i=0; $i < count($konten_terkait); $i++) {
                $pivot = new PivotKontenTerkait;
                $pivot->parent_id = $konten->id;
                $pivot->child_id = $konten_terkait[$i];
                $pivot->save();
            }
        }

        Alert::success('Berhasil', 'Berhasil menambahkan konten');
        return redirect()->route('razen-blog.penulis.konten.index');
    }

    public function detail($id)
    {
        $konten = Konten::find($id);
        return view('razen-blog.admin.konten.detail', [
            'konten' => $konten
        ]);
    }
}