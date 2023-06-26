<?php
use App\Http\Controllers\RazenBlog\Penulis\DashboardController;
use App\Http\Controllers\RazenBlog\Penulis\ProfilController;

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
});
