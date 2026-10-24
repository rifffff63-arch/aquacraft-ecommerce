<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\HeroImageController;
use Illuminate\Support\Facades\Route;

// Halaman utama AquaCraft
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Dashboard pengguna yang sudah login
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    return view('pelanggan.dashboard');
})->middleware('auth')->name('dashboard');

// Dashboard khusus Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('admin.dashboard');

// Fitur pengaturan gambar Hero khusus Admin
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Menyimpan gambar Hero yang baru
        Route::post('/hero-image', [HeroImageController::class, 'update'])
            ->name('hero-image.update');

        // Menghapus gambar Hero
        Route::delete('/hero-image', [HeroImageController::class, 'destroy'])
            ->name('hero-image.destroy');

        // Mengembalikan gambar Hero ke default
        Route::post('/hero-image/reset', [HeroImageController::class, 'reset'])
            ->name('hero-image.reset');
    });

// Pengelolaan profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// Route login, register, dan logout dari Laravel Breeze
require __DIR__.'/auth.php';
