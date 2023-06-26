<?php
use App\Http\Controllers\RazenBlog\Admin\DashboardController;
// Admin
use App\Http\Controllers\RazenBlog\Admin\ProfilController;
// Landing Page
use App\Http\Controllers\RazenBlog\LandingPage\BerandaController;
use App\Http\Controllers\RazenBlog\LandingPage\BeritaController;
use App\Http\Controllers\RazenBlog\LandingPage\ProfesiController;
use App\Http\Controllers\RazenBlog\LandingPage\TeknisController;
use App\Http\Controllers\RazenBlog\LandingPage\KosakataController;
use App\Http\Controllers\RazenBlog\LandingPage\PanduanController;
// Master Data
use App\Http\Controllers\RazenBlog\MasterData\MediaSosialController;
use App\Http\Controllers\RazenBlog\MasterData\KategoriKontenController;
use App\Http\Controllers\RazenBlog\ManagemenAkun\PenulisController;

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
        Route::post('/edit-media-sosial-profil', [ProfilController::class, 'edit_media_sosial_profil'])->name('razen-blog.admin.profil.edit-media-sosial-profil');
        Route::post('/tambah-media-sosial-profil', [ProfilController::class, 'tambah_media_sosial_profil'])->name('razen-blog.admin.profil.tambah-media-sosial-profil');
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

    Route::prefix('kategori-konten')->group(function(){
        Route::get('/', [KategoriKontenController::class, 'index'])->name('razen-blog.master-data.kategori-konten.index');
        Route::get('/detail/{id}', [KategoriKontenController::class, 'show'])->name('razen-blog.master-data.kategori-konten.show');
        Route::post('/',[KategoriKontenController::class, 'store'])->name('razen-blog.master-data.kategori-konten.store');
        Route::get('/edit/{id}',[KategoriKontenController::class, 'edit'])->name('razen-blog.master-data.kategori-konten.edit');
        Route::post('/update',[KategoriKontenController::class, 'update'])->name('razen-blog.master-data.kategori-konten.update');
        Route::get('/destroy/{id}',[KategoriKontenController::class, 'destroy'])->name('razen-blog.master-data.kategori-konten.destroy');
    });
});

Route::prefix('managemen-akun')->group(function(){
    Route::prefix('penulis')->group(function(){
        Route::get('/', [PenulisController::class, 'index'])->name('razen-blog.managemen-akun.penulis.index');
        Route::get('/detail/{id}', [PenulisController::class, 'show'])->name('razen-blog.managemen-akun.penulis.show');
        Route::post('/',[PenulisController::class, 'store'])->name('razen-blog.managemen-akun.penulis.store');
        Route::get('/edit/{id}',[PenulisController::class, 'edit'])->name('razen-blog.managemen-akun.penulis.edit');
        Route::post('/update',[PenulisController::class, 'update'])->name('razen-blog.managemen-akun.penulis.update');
        Route::get('/destroy/{id}',[PenulisController::class, 'destroy'])->name('razen-blog.managemen-akun.penulis.destroy');
        Route::post('/update/password',[PenulisController::class, 'update_password'])->name('razen-blog.managemen-akun.penulis.update.password');
        Route::get('/update/status-penulis/{id}',[PenulisController::class, 'update_status_penulis'])->name('razen-blog.managemen-akun.penulis.update.status-penulis');
    });
});
