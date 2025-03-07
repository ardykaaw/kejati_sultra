<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\TriKramaController;
use App\Http\Controllers\ReformasiBirokrasiController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ComplaintController;

// Route untuk publik (tidak perlu auth)
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

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
    // Route dashboard sekarang menggunakan DashboardController
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

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

        // Gallery Routes
        Route::resource('gallery', GalleryController::class)->except(['show']);
    });

    // Routes untuk Layanan
    Route::prefix('layanan')->group(function () {
        Route::resource('reformasi-birokrasi', ReformasiBirokrasiController::class);
        Route::resource('sarana', SaranaController::class);
    });

    // Routes untuk Berita
    Route::resource('news', NewsController::class);

    // Routes untuk Aduan Masyarakat
    Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
    Route::put('/complaints/{id}/status', [ComplaintController::class, 'updateStatus'])->name('complaints.updateStatus');
});

// Route untuk Tri Krama Adhyaksa
Route::get('/tri-krama', [TriKramaController::class, 'detail'])->name('tri-krama.detail');

// Tambahkan route berikut
Route::get('/berita', [NewsController::class, 'allNews'])->name('news.all');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');

// Di luar grup auth (untuk publik)
Route::get('/galeri', [GalleryController::class, 'show'])->name('gallery.show');

// Tambahkan routes ini bersama route gallery yang sudah ada
Route::post('/gallery/video', [GalleryController::class, 'storeVideo'])->name('gallery.storeVideo');
Route::put('/gallery/video/{id}', [GalleryController::class, 'updateVideo'])->name('gallery.updateVideo');
Route::delete('/gallery/video/{id}', [GalleryController::class, 'destroyVideo'])->name('gallery.destroyVideo');

Route::get('/survey', [SurveyController::class, 'index'])->name('survey.index');
Route::post('/survey', [SurveyController::class, 'store'])->name('survey.store');

// Route untuk menyimpan aduan dari halaman welcome
Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store');

// Di luar grup auth (untuk publik)
Route::get('/sarana-prasarana', [SaranaController::class, 'detail'])->name('sarana.detail');
