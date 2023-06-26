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
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/profesi', [HomeController::class, 'profesi'])->name('profesi');
Route::get('/teknis', [HomeController::class, 'teknis'])->name('teknis');
Route::get('/kosakata', [HomeController::class, 'kosakata'])->name('kosakata');

Route::get('/login',[LoginController::class, 'showLoginForm'])->name('razen-blog.login');
Route::post('/login', [LoginController::class, 'login'])->name('razen-blog.login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('razen-blog.logout');

Route::get('/penulis/login',[PenulisLoginController::class, 'showLoginForm'])->name('penulis.login');
Route::post('/penulis/login', [PenulisLoginController::class, 'login'])->name('penulis.login.submit');
Route::get('/penulis/logout', [PenulisLoginController::class, 'logout'])->name('penulis.logout');

Route::group(['middleware' => 'auth:razen_blog'], function(){
    @include('razen-blog.php');
});
