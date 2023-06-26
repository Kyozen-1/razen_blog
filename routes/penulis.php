<?php
use App\Http\Controllers\RazenBlog\Penulis\DashboardController;

Route::prefix('penulis')->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('razen-blog.penulis.dashboard.index');
        Route::post('/change', [DashboardController::class, 'change'])->name('razen-blog.penulis.dashboard.change');
    });
});
