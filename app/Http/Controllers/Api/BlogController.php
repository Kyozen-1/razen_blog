<?php

namespace App\Http\Controllers\Api;

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

use App\Models\Konten;
use App\Models\MasterKategoriKonten;
use App\Models\PivotKontenTerkait;
use App\Models\PivotSubJudulKonten;

class BlogController extends Controller
{
    public function all()
    {
        try {
            $kontens = Konten::all()->map(function($data){
                return [
                    'id' => Crypt::encryptString($data->id),
                    'penulis' => $data->is_admin == '0' ? $data->penulis->nama : 'Razen Blog',
                    'kategori' => [
                        'id' => Crypt::encryptString($data->kategori_konten_id),
                        'nama' => $data->kategori_konten->nama,
                    ],
                    'web' => $data->pivot_konten_and_web->map(function($data){
                        return [
                            'id' => Crypt::encryptString($data->master_web_id),
                            'nama' => $data->master_web->nama,
                            'unique_code' => Crypt::encryptString($data->master_web->unique_code),
                        ];
                    }),
                    'judul' => $data->judul,
                    'deskripsi_judul' => $data->deskripsi_judul,
                    'deskripsi_overview' => $data->deskripsi_overview,
                    'gambar_mini' => asset('images/razen-blog/konten/'.$data->gambar_mini),
                    'tgl' => $data->tgl
                ];
            });

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $kontens
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => $th->getMessage()
            ]);
        }
    }

    public function divisiWeb($unique_code)
    {
        try {
            $kontens = Konten::whereHas('pivot_konten_and_web', function($q) use ($unique_code){
                $q->whereHas('master_web', function($q) use ($unique_code){
                    $q->where('unique_code', 'like', '%'.$unique_code.'%');
                });
            })->get()
            ->map(function($data){
                return [
                    'id' => Crypt::encryptString($data->id),
                    'penulis' => $data->is_admin == '0' ? $data->penulis->nama : 'Razen Blog',
                    'kategori' => [
                        'id' => Crypt::encryptString($data->kategori_konten_id),
                        'nama' => $data->kategori_konten->nama,
                    ],
                    'web' => $data->pivot_konten_and_web->map(function($data){
                        return [
                            'id' => Crypt::encryptString($data->master_web_id),
                            'nama' => $data->master_web->nama,
                            'unique_code' => Crypt::encryptString($data->master_web->unique_code),
                        ];
                    }),
                    'judul' => $data->judul,
                    'deskripsi_judul' => $data->deskripsi_judul,
                    'deskripsi_overview' => $data->deskripsi_overview,
                    'gambar_mini' => asset('images/razen-blog/konten/'.$data->gambar_mini),
                    'tgl' => $data->tgl
                ];
            });

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $kontens
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => $th->getMessage()
            ]);
        }
    }

    public function detail($id)
    {
        try {
            $cekKonten = Konten::find($id);
            if($cekKonten)
            {
                $konten = Konten::find($id);
            } else {
                $id = Crypt::decryptString($id);
                $konten = Konten::find($id);
            }

            $data = [
                'id' => Crypt::encryptString($konten->id),
                'penulis' => $konten->is_admin == '0' ? $konten->penulis->nama : 'Razen Blog',
                'kategori' => [
                    'id' => Crypt::encryptString($konten->kategori_konten_id),
                    'nama' => $konten->kategori_konten->nama,
                ],
                'web' => $konten->pivot_konten_and_web->map(function($web){
                    return [
                        'id' => Crypt::encryptString($web->master_web_id),
                        'nama' => $web->master_web->nama,
                        'unique_code' => Crypt::encryptString($web->master_web->unique_code),
                    ];
                }),
                'judul' => $konten->judul,
                'deskripsi_judul' => $konten->deskripsi_judul,
                'deskripsi_overview' => $konten->deskripsi_overview,
                'gambar_mini' => asset('images/razen-blog/konten/'.$konten->gambar_mini),
                'tgl' => $konten->tgl
            ];
            return $data;
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $data
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => $th->getMessage()
            ]);
        }
    }
}
