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

use App\Models\MasterKategoriKonten;

class MasterKategoriKontenController extends Controller
{
    public function all()
    {
        try {
            $datas = MasterKategoriKonten::all()
                    ->map(function($data) {
                        return [
                            'id' => Crypt::encryptString($data->id),
                            'tipe_konten' => $data->tipe_konten,
                            'nama' => $data->nama
                        ];
                    });
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $datas
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
            $cekMasterKategoriKonten = MasterKategoriKonten::find($id);
            if(!$cekMasterKategoriKonten)
            {
                $id = Crypt::decryptString($id);
            }
            $masterKategoriKonten = MasterKategoriKonten::find($id);
            $data = [
                'id' => Crypt::encryptString($masterKategoriKonten->id),
                'tipe_konten' => $masterKategoriKonten->tipe_konten,
                'nama' => $masterKategoriKonten->nama
            ];
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
