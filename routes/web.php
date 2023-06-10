<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Auth\RazenBlog\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false, 'login' => false]);

Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/panduan-karir', [HomeController::class, 'panduan_karir'])->name('panduan-karir');
Route::get('/panduan-teknis', [HomeController::class, 'panduan_teknis'])->name('panduan-teknis');
Route::get('/kosakata', [HomeController::class, 'kosakata'])->name('kosakata');

Route::get('/login',[LoginController::class, 'showLoginForm'])->name('razen-blog.login');
Route::post('/login', [LoginController::class, 'login'])->name('razen-blog.login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('razen-blog.logout');

Route::group(['middleware' => 'auth:razen_blog'], function(){
    @include('razen-blog.php');
});
