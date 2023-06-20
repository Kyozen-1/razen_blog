<?php
use App\Http\Controllers\RazenBlog\Admin\DashboardController;
use App\Http\Controllers\RazenBlog\Admin\ProfilController;
use App\Http\Controllers\RazenBlog\LandingPage\BerandaController;
use App\Http\Controllers\RazenBlog\LandingPage\BeritaController;
use App\Http\Controllers\RazenBlog\LandingPage\ProfesiController;
use App\Http\Controllers\RazenBlog\LandingPage\TeknisController;
use App\Http\Controllers\RazenBlog\LandingPage\KosakataController;
use App\Http\Controllers\RazenBlog\LandingPage\PanduanController;
use App\Http\Controllers\RazenBlog\MasterData\MediaSosialController;

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

            Route::post('/store/section-1', [BerandaController::class, 'store_section_1'])->name('razen-blog.landing-page.beranda.store.section-1');
            Route::post('/store/section-2', [BerandaController::class, 'store_section_2'])->name('razen-blog.landing-page.beranda.store.section-2');
            Route::post('/store/section-2/konten', [BerandaController::class, 'store_section_2_konten'])->name('razen-blog.landing-page.beranda.store.section-2.konten');
            Route::post('/hapus/section-2/konten', [BerandaController::class, 'hapus_section_2_konten'])->name('razen-blog.landing-page.beranda.hapus.section-2.konten');
            Route::post('/store/section-3', [BerandaController::class, 'store_section_3'])->name('razen-blog.landing-page.beranda.store.section-3');
            Route::post('/store/section-3/konten', [BerandaController::class, 'store_section_3_konten'])->name('razen-blog.landing-page.beranda.store.section-3.konten');
            Route::post('/hapus/section-3/konten', [BerandaController::class, 'hapus_section_3_konten'])->name('razen-blog.landing-page.beranda.hapus.section-3.konten');
            Route::post('/store/section-4', [BerandaController::class, 'store_section_4'])->name('razen-blog.landing-page.beranda.store.section-4');
        });

        Route::prefix('berita')->group(function(){
            Route::get('/', [BeritaController::class, 'index'])->name('razen-blog.landing-page.berita.index');

            Route::post('/store/section-1', [BeritaController::class, 'store_section_1'])->name('razen-blog.landing-page.berita.store.section-1');
        });

        Route::prefix('profesi')->group(function(){
            Route::get('/', [ProfesiController::class, 'index'])->name('razen-blog.landing-page.profesi.index');

            Route::post('/store/section-1', [ProfesiController::class, 'store_section_1'])->name('razen-blog.landing-page.profesi.store.section-1');
        });

        Route::prefix('teknis')->group(function(){
            Route::get('/', [TeknisController::class, 'index'])->name('razen-blog.landing-page.teknis.index');

            Route::post('/store/section-1', [TeknisController::class, 'store_section_1'])->name('razen-blog.landing-page.teknis.store.section-1');
        });

        Route::prefix('kosakata')->group(function(){
            Route::get('/', [KosakataController::class, 'index'])->name('razen-blog.landing-page.kosakata.index');

            Route::post('/store/section-1', [KosakataController::class, 'store_section_1'])->name('razen-blog.landing-page.kosakata.store.section-1');
        });

        Route::prefix('panduan')->group(function(){
            Route::get('/', [PanduanController::class, 'index'])->name('razen-blog.landing-page.panduan.index');

            Route::post('/store/section-1', [PanduanController::class, 'store_section_1'])->name('razen-blog.landing-page.panduan.store.section-1');
        });
    });

    Route::prefix('master-data')->group(function(){
        Route::prefix('media-sosial')->group(function(){
            Route::get('/', [MediaSosialController::class, 'index'])->name('razen-blog.master-data.media-sosial.index');
            Route::get('/detail/{id}', [MediaSosialController::class, 'show'])->name('razen-blog.master-data.media-sosial.show');
            Route::post('/',[MediaSosialController::class, 'store'])->name('razen-blog.master-data.media-sosial.store');
            Route::get('/edit/{id}',[MediaSosialController::class, 'edit'])->name('razen-blog.master-data.media-sosial.edit');
            Route::post('/update',[MediaSosialController::class, 'update'])->name('razen-blog.master-data.media-sosial.update');
            Route::get('/destroy/{id}',[MediaSosialController::class, 'destroy'])->name('razen-blog.master-data.media-sosial.destroy');
        });
    });
});
