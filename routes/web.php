<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Exmaple of a simple route
Route::get('/welcome', function () {
    return view('welcome');
});

// Public pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
// Profil submenu pages
Route::get('/profil/fasilitas', [PageController::class, 'fasilitas'])->name('profil.fasilitas');
Route::get('/profil/kepala-sekolah', [PageController::class, 'kepalaSekolah'])->name('profil.kepala');
Route::get('/profil/tenaga-pengajar', [PageController::class, 'tenagaPengajar'])->name('profil.tenaga');
Route::get('/profil/tenaga-pengajar/{slug}', [PageController::class, 'detailTenaga'])->name('profil.tenaga.detail');
Route::get('/program', [PageController::class, 'program'])->name('program');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
// Informasi submenu pages
Route::get('/informasi/artikel', [PageController::class, 'informasiArtikel'])->name('informasi.artikel');
Route::get('/informasi/kegiatan-alumni', [PageController::class, 'informasiKegiatanAlumni'])->name('informasi.kegiatan');
Route::get('/informasi/pengumuman', [PageController::class, 'informasiPengumuman'])->name('informasi.pengumuman');
Route::get('/informasi/artikel/detail', [PageController::class, 'detailArtikel'])->name('informasi.artikel.detail');
