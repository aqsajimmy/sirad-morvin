<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Master\Pengguna;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', action: Dashboard::class)->name('admin.dashboard');
        Route::get('/pengguna', action: Pengguna::class)->name('admin.pengguna');
    });
});
