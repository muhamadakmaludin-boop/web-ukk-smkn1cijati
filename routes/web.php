<?php

use Illuminate\Support\Facades\Route;

// Controller Publik
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\FasilitasJurusanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\KontakController;

// Controller Admin
use App\Http\Controllers\Admin\EskulController as AdminEskulController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\GuruController as AdminGuruController;
use App\Http\Controllers\Admin\JurusanController as AdminJurusanController;
use App\Http\Controllers\Admin\ProfilController as AdminProfilController;
use App\Http\Controllers\Admin\SambutanController;
use App\Http\Controllers\Admin\FasilitasJurusanController as AdminFasilitasJurusanController;
use App\Http\Controllers\Admin\FasilitasSekolahController as AdminFasilitasSekolahController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\GaleriController;

/*
|--------------------------------------------------------------------------
| Route Publik (bisa diakses siapa saja)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/ekstrakurikuler', [EskulController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurusan/{jurusan:slug}', [JurusanController::class, 'show']);
Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/fasilitas', [FasilitasJurusanController::class, 'index'])->name('fasilitas.index');

/*
|--------------------------------------------------------------------------
| Route Autentikasi (Login/Logout Admin)
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Route Admin (wajib login)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Home (Beranda) - tabel 1 baris, cukup edit
    Route::get('/home/edit', [AdminHomeController::class, 'edit'])->name('home.edit');
    Route::put('/home/edit', [AdminHomeController::class, 'update'])->name('home.update');

    // Sambutan - tabel 1 baris, cukup edit
    Route::get('/sambutan', [SambutanController::class, 'edit'])->name('sambutan.edit');
    Route::put('/sambutan', [SambutanController::class, 'update'])->name('sambutan.update');

    Route::resource('eskul', AdminEskulController::class)->except(['show']);
    Route::resource('berita', AdminBeritaController::class)->parameters(['berita' => 'berita']);

    Route::resource('guru', AdminGuruController::class)->except(['show']);
    Route::resource('jurusan', AdminJurusanController::class)->except(['show']);

    // Profil Sekolah (tabel 1 baris, cukup edit)
    Route::get('/profil', [AdminProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil', [AdminProfilController::class, 'update'])->name('profil.update');

    // Fasilitas Jurusan: hanya bisa tambah & hapus dari dalam halaman Edit Jurusan
    Route::post('fasilitas', [AdminFasilitasJurusanController::class, 'store'])->name('fasilitas.store');
    Route::delete('fasilitas/{fasilitas}', [AdminFasilitasJurusanController::class, 'destroy'])->name('fasilitas.destroy');

    Route::resource('fasilitas-sekolah', AdminFasilitasSekolahController::class)->except(['show']);

    Route::resource('galeri', GaleriController::class)->except(['show']);
});