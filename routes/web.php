<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Auth\RazenBlog\LoginController;
use App\Http\Controllers\Auth\RazenBlog\PenulisLoginController;

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

Route::get('/filter/kategori/{id}', [HomeController::class, 'filter_kategori'])->name('filter-kategori');
Route::get('/filter/all-kategori/{tipe_konten}', [HomeController::class, 'all_kategori'])->name('filter-all-kategori');

Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/berita-detail/{id}', [HomeController::class, 'berita_detail'])->name('berita-detail');

Route::get('/profesi', [HomeController::class, 'profesi'])->name('profesi');
Route::get('/profesi-detail/{id}', [HomeController::class, 'profesi_detail'])->name('profesi-detail');

Route::get('/teknis', [HomeController::class, 'teknis'])->name('teknis');
Route::get('/teknis-detail/{id}', [HomeController::class, 'teknis_detail'])->name('teknis-detail');

Route::get('/berita-indonesia', [HomeController::class, 'berita_indonesia'])->name('berita-indonesia');
Route::get('/berita-indonesia/filter/kategori/{kategori}', [HomeController::class, 'berita_indonesia_filter_kategori'])->name('berita-indonesia.filter.kategori');
Route::get('/berita-indonesia/filter/kategori/reset', [HomeController::class, 'berita_indonesia_filter_kategori_reset'])->name('berita-indonesia.filter.kategori.reset');

Route::get('/kosakata', [HomeController::class, 'kosakata'])->name('kosakata');
Route::get('/kosakata-detail/{id}', [HomeController::class, 'kosakata_detail'])->name('kosakata-detail');

Route::get('/login',[LoginController::class, 'showLoginForm'])->name('razen-blog.login');
Route::post('/login', [LoginController::class, 'login'])->name('razen-blog.login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('razen-blog.logout');

Route::get('/penulis/login',[PenulisLoginController::class, 'showLoginForm'])->name('penulis.login');
Route::post('/penulis/login', [PenulisLoginController::class, 'login'])->name('penulis.login.submit');
Route::get('/penulis/logout', [PenulisLoginController::class, 'logout'])->name('penulis.logout');

Route::prefix('razen-blog')->group(function(){
    Route::group(['middleware' => 'auth:razen_blog'], function(){
        @include('razen-blog.php');
    });

    Route::group(['middleware' => 'auth:penulis'], function(){
        @include('penulis.php');
    });
});

Route::get('/get-berita', [HomeController::class, 'get_berita'])->name('get-berita');
