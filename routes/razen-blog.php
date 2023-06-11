<?php
use App\Http\Controllers\RazenBlog\Admin\DashboardController;

Route::prefix('razen-blog')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::prefix('dashboard')->group(function(){
            Route::get('/', [DashboardController::class, 'index'])->name('razen-blog.admin.dashboard.index');
            Route::post('/change', [DashboardController::class, 'change'])->name('razen-blog.admin.dashboard.change');
        });
    });
});
