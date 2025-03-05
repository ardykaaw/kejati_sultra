<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\TriKramaController;
use App\Http\Controllers\ReformasiBirokrasiController;
use App\Http\Controllers\SaranaController;

// Route untuk publik (tidak perlu auth)
Route::get('/', function () {
    $about = \App\Models\About::first();
    return view('welcome', compact('about'));
});

// Route publik untuk detail
Route::get('/tentang-kami', function() {
    $about = \App\Models\About::first();
    return view('profil.about.detail', compact('about'));
})->name('about.detail');

Route::get('/visi-misi', function() {
    $visiMisi = \App\Models\VisiMisi::first();
    return view('profil.visi-misi.detail', compact('visiMisi'));
})->name('visi-misi.detail');

Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'detail'])
    ->name('struktur-organisasi.detail');

// Route autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes untuk admin (perlu auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // Routes untuk Profil
    Route::prefix('profil')->group(function () {
        // About Routes
        Route::resource('about', AboutController::class)->except(['show']);

        // Visi Misi Routes
        Route::resource('visi-misi', VisiMisiController::class)->except(['show']);

        // Struktur Organisasi Routes
        Route::resource('struktur-organisasi', StrukturOrganisasiController::class)->except(['show']);

        // Tri Krama Routes
        Route::resource('tri-krama', TriKramaController::class);
    });

    // Routes untuk Layanan
    Route::prefix('layanan')->group(function () {
        Route::resource('reformasi-birokrasi', ReformasiBirokrasiController::class);
        Route::resource('sarana', SaranaController::class);
    });
});
