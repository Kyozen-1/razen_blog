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

    public function edit($id)
    {
        $konten = Konten::find($id);

        $kontens = Konten::select('id', 'judul')->latest()->get();
        $pivot_konten_terkait = [];
        foreach ($konten->parent_pivot_konten_terkait as $value) {
            $pivot_konten_terkait[] = $value->child_id;
        }

        return view('razen-blog.admin.konten.edit', [
            'konten' => $konten,
            'kontens' => $kontens,
            'pivot_konten_terkait' => $pivot_konten_terkait
        ]);
    }

    public function update(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'konten_id' => 'required',
            'kategori_konten_id' => 'required',
            'judul' => 'required',
            'deskripsi_judul' => 'required',
            'deskripsi_overview' => 'required'
        ]);
        if($errors -> fails())
        {
            return back()->withErrors($errors)->withInput();
        }

        $konten = Konten::find($request->konten_id);
        $konten->kategori_konten_id = $request->kategori_konten_id;
        $konten->judul = $request->judul;
        $konten->deskripsi_judul = $request->deskripsi_judul;
        $konten->deskripsi_overview = $request->deskripsi_overview;

        if($request->gambar_mini)
        {
            File::delete(public_path('images/razen-blog/konten/'.$konten->gambar_mini));

            $gambarMiniExtension = $request->gambar_mini->extension();
            $gambarMiniName =  uniqid().'-'.date("ymd").'.'.$gambarMiniExtension;
            $gambarMini = Image::make($request->gambar_mini);
            $gambarMiniSize = public_path('images/razen-blog/konten/'.$gambarMiniName);
            $gambarMini->save($gambarMiniSize, 60);

            $konten->gambar_mini = $gambarMiniName;
        }

        $konten->tgl = Carbon::now();
        $konten->save();

        if($request->edit_pivot_sub_judul_konten)
        {
            $edit_pivot_sub_judul_konten = array_values($request->edit_pivot_sub_judul_konten);
            for ($i=0; $i < count($edit_pivot_sub_judul_konten); $i++) {
                $pivot = PivotSubJudulKonten::find($edit_pivot_sub_judul_konten[$i]['pivot_sub_judul_konten_id']);
                $pivot->judul = $edit_pivot_sub_judul_konten[$i]['judul'];
                $pivot->deskripsi = $edit_pivot_sub_judul_konten[$i]['deskripsi'];
                $pivot->save();
            }
        }

        if($request->hapus_id_pivot)
        {
            $hapus_id_pivot = explode(',', $request->hapus_id_pivot);
            for ($i=0; $i < count($hapus_id_pivot); $i++) {
                PivotSubJudulKonten::find($hapus_id_pivot[$i])->delete();
            }
        }

        if($request->data_sub_judul)
        {
            $data_sub_judul = $request->data_sub_judul;

            for ($i=0; $i < count($data_sub_judul); $i++) {
                $pivot = new PivotSubJudulKonten;
                $pivot->konten_id = $konten->id;
                $pivot->judul = $data_sub_judul[$i]['judul'];
                $pivot->deskripsi = $data_sub_judul[$i]['deskripsi'];
                $pivot->save();
            }
        }

        if ($request->konten_terkait) {
            $konten_terkait = $request->konten_terkait;

            $get_konten_terkait = PivotKontenTerkait::where('parent_id', $request->konten_id)->get();
            foreach ($get_konten_terkait as $terkait) {
                PivotKontenTerkait::find($terkait->id)->delete();
            }

            for ($i=0; $i < count($konten_terkait); $i++) {
                $pivot_konten_terkait = new PivotKontenTerkait;
                $pivot_konten_terkait->parent_id = $request->konten_id;
                $pivot_konten_terkait->child_id = $konten_terkait[$i];
                $pivot_konten_terkait->save();
            }
        }

        Alert::success('Berhasil', 'Berhasil merubah konten');
        return redirect()->route('razen-blog.admin.konten.index');
    }

    public function delete($id)
    {
        $getPivotSubJuduls = PivotSubJudulKonten::where('konten_id', $id)->get();
        foreach ($getPivotSubJuduls as $value) {
            PivotSubJudulKonten::find($value->id)->delete();
        }

        $getPivotKontenTerkaits = PivotKontenTerkait::where('konten_id', $id)->get();
        foreach ($getPivotKontenTerkaits as $value) {
            PivotKontenTerkait::find($value->id)->delete();
        }

        $konten = Konten::find($id);
        File::delete(public_path('images/razen-blog/konten/'.$konten->gambar_mini));
        $konten->delete();

        Alert::success('Berhasil', 'Berhasil menghapus konten');
        return redirect()->route('razen-blog.admin.konten.index');
    }
}
