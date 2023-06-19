<?php
use App\Http\Controllers\RazenBlog\Admin\DashboardController;
use App\Http\Controllers\RazenBlog\Admin\ProfilController;
use App\Http\Controllers\RazenBlog\LandingPage\BerandaController;

Route::prefix('razen-blog')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::prefix('dashboard')->group(function(){
            Route::get('/', [DashboardController::class, 'index'])->name('razen-blog.admin.dashboard.index');
            Route::post('/change', [DashboardController::class, 'change'])->name('razen-blog.admin.dashboard.change');
        });

        Route::prefix('profil')->group(function(){
            Route::get('/', [ProfilController::class, 'index'])->name('razen-blog.admin.profil.index');
            Route::get('/detail/{id}', [ProfilController::class, 'show']);
            Route::post('/',[ProfilController::class, 'store'])->name('razen-blog.admin.profil.store');
            Route::get('/edit/{id}',[ProfilController::class, 'edit']);
            Route::post('/update',[ProfilController::class, 'update'])->name('razen-blog.admin.profil.update');
            Route::get('/destroy/{id}',[ProfilController::class, 'destroy']);
        });
    });

    Route::prefix('landing-page')->group(function(){
        Route::prefix('beranda')->group(function(){
            Route::get('/', [BerandaController::class, 'index'])->name('razen-blog.landing-page.beranda.index');
        });
    });
});
