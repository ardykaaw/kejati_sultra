<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\TriKramaController;
use App\Http\Controllers\ReformasiBirokrasiController;
use App\Http\Controllers\SaranaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes untuk Profil
Route::prefix('profil')->group(function () {
    // About Routes
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');
    Route::get('/about/{about}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/about/{about}', [AboutController::class, 'update'])->name('about.update');

    // Visi Misi Routes
    Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi.index');
    Route::get('/visi-misi/create', [VisiMisiController::class, 'create'])->name('visi-misi.create');
    Route::post('/visi-misi', [VisiMisiController::class, 'store'])->name('visi-misi.store');
    Route::get('/visi-misi/{visiMisi}/edit', [VisiMisiController::class, 'edit'])->name('visi-misi.edit');
    Route::put('/visi-misi/{visiMisi}', [VisiMisiController::class, 'update'])->name('visi-misi.update');

    // Struktur Organisasi Routes
    Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur-organisasi.index');
    Route::get('/struktur-organisasi/create', [StrukturOrganisasiController::class, 'create'])->name('struktur-organisasi.create');
    Route::post('/struktur-organisasi', [StrukturOrganisasiController::class, 'store'])->name('struktur-organisasi.store');
    Route::get('/struktur-organisasi/{strukturOrganisasi}/edit', [StrukturOrganisasiController::class, 'edit'])->name('struktur-organisasi.edit');
    Route::put('/struktur-organisasi/{strukturOrganisasi}', [StrukturOrganisasiController::class, 'update'])->name('struktur-organisasi.update');

    // Tri Krama Routes
    Route::get('/tri-krama', [TriKramaController::class, 'index'])->name('tri-krama.index');
    Route::get('/tri-krama/create', [TriKramaController::class, 'create'])->name('tri-krama.create');
    Route::post('/tri-krama', [TriKramaController::class, 'store'])->name('tri-krama.store');
    Route::get('/tri-krama/{triKrama}/edit', [TriKramaController::class, 'edit'])->name('tri-krama.edit');
    Route::put('/tri-krama/{triKrama}', [TriKramaController::class, 'update'])->name('tri-krama.update');
});

// Routes untuk Layanan
Route::prefix('layanan')->group(function () {
    // Reformasi Birokrasi Routes
    Route::get('/reformasi-birokrasi', [ReformasiBirokrasiController::class, 'index'])->name('reformasi-birokrasi.index');
    Route::get('/reformasi-birokrasi/create', [ReformasiBirokrasiController::class, 'create'])->name('reformasi-birokrasi.create');
    Route::post('/reformasi-birokrasi', [ReformasiBirokrasiController::class, 'store'])->name('reformasi-birokrasi.store');
    Route::get('/reformasi-birokrasi/{reformasiBirokrasi}/edit', [ReformasiBirokrasiController::class, 'edit'])->name('reformasi-birokrasi.edit');
    Route::put('/reformasi-birokrasi/{reformasiBirokrasi}', [ReformasiBirokrasiController::class, 'update'])->name('reformasi-birokrasi.update');

    // Sarana Routes
    Route::get('/sarana', [SaranaController::class, 'index'])->name('sarana.index');
    Route::get('/sarana/create', [SaranaController::class, 'create'])->name('sarana.create');
    Route::post('/sarana', [SaranaController::class, 'store'])->name('sarana.store');
    Route::get('/sarana/{sarana}/edit', [SaranaController::class, 'edit'])->name('sarana.edit');
    Route::put('/sarana/{sarana}', [SaranaController::class, 'update'])->name('sarana.update');
});
