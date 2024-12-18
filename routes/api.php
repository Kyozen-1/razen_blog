<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogController;

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
    Route::get('/detail/{id}', [BlogController::class, 'detail']);
});
