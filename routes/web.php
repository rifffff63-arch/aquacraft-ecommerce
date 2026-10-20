
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman utama AquaCraft
Route::get('/', [HomeController::class, 'index'])->name('home');

// Dashboard untuk pengguna yang sudah login
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Dashboard khusus Admin
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('admin.dashboard');

// Profile pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
