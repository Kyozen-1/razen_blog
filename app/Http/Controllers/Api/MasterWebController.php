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

use App\Models\MasterWeb;

class MasterWebController extends Controller
{
    public function all()
    {
        try {
            $datas = MasterWeb::where('is_active', '1')->get()
                    ->map(function($data) {
                        return [
                            'id' => Crypt::encryptString($data->id),
                            'nama' => $data->nama,
                            'unique_code' => Crypt::encryptString($data->unique_code)
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
            $cekMasterWeb = MasterWeb::find($id);
            if(!$cekMasterWeb)
            {
                $id = Crypt::decryptString($id);
            }
            $masterWeb = MasterWeb::find($id);
            $data = [
                'id' => Crypt::encryptString($masterWeb->id),
                'nama' => $masterWeb->nama,
                'unique_code' => Crypt::encryptString($masterWeb->unique_code)
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
