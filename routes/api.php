<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\MasterKategoriKontenController;
use App\Http\Controllers\Api\MasterWebController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('blog')->group(function(){
    Route::get('/all', [BlogController::class, 'all']);
    Route::get('/divisi-web/{unique_code}', [BlogController::class, 'divisiWeb']);
    Route::get('/kategori-konten/{id}', [BlogController::class, 'kategoriKonten']);
    Route::get('/detail/{id}', [BlogController::class, 'detail']);
});

Route::prefix('master-kategori-konten')->group(function(){
    Route::get('/all', [MasterKategoriKontenController::class, 'all']);
    Route::get('/detail/{id}', [MasterKategoriKontenController::class, 'detail']);
});

Route::prefix('master-web')->group(function(){
    Route::get('/all', [MasterWebController::class, 'all']);
    Route::get('/detail/{id}', [MasterWebController::class, 'detail']);
});
