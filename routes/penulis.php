<?php
use App\Http\Controllers\RazenBlog\Penulis\DashboardController;
use App\Http\Controllers\RazenBlog\Penulis\ProfilController;
use App\Http\Controllers\RazenBlog\Penulis\KontenController;

Route::prefix('penulis')->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('razen-blog.penulis.dashboard.index');
        Route::post('/change', [DashboardController::class, 'change'])->name('razen-blog.penulis.dashboard.change');
    });

    Route::prefix('profil')->group(function(){
        Route::get('/', [ProfilController::class, 'index'])->name('razen-blog.penulis.profil.index');
        Route::get('/detail/{id}', [ProfilController::class, 'show']);
        Route::post('/',[ProfilController::class, 'store'])->name('razen-blog.penulis.profil.store');
        Route::post('/ubah-password',[ProfilController::class, 'ubah_password'])->name('razen-blog.penulis.profil.ubah_password');
        Route::get('/edit/{id}',[ProfilController::class, 'edit']);
        Route::post('/update',[ProfilController::class, 'update'])->name('razen-blog.penulis.profil.update');
        Route::get('/destroy/{id}',[ProfilController::class, 'destroy']);
        Route::post('/edit-media-sosial-profil', [ProfilController::class, 'edit_media_sosial_profil'])->name('razen-blog.penulis.profil.edit-media-sosial-profil');
        Route::post('/tambah-media-sosial-profil', [ProfilController::class, 'tambah_media_sosial_profil'])->name('razen-blog.penulis.profil.tambah-media-sosial-profil');
    });

    Route::prefix('konten')->group(function(){
        Route::get('/', [KontenController::class, 'index'])->name('razen-blog.penulis.konten.index');
        Route::get('/create', [KontenController::class, 'create'])->name('razen-blog.penulis.konten.create');
        Route::post('/store', [KontenController::class, 'store'])->name('razen-blog.penulis.konten.store');
        Route::post('/select/kategori-konten', [KontenController::class, 'select_kategori_konten'])->name('razen-blog.penulis.konten.select.kategori-konten');
    });
});
