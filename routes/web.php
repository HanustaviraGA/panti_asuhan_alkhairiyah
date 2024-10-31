<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;

// Anak Asuh
use App\Http\Controllers\Admin\AnakAsuhController;
// Banner
use App\Http\Controllers\Admin\BannerController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Landing
Route::get('/', [LandingController::class, 'beranda'])->name('beranda');
Route::get('/anak', [LandingController::class, 'anak'])->name('anak');
Route::get('/donasi', [LandingController::class, 'donasi'])->name('donasi');
Route::get('/donasi/proses/{id}', [LandingController::class, 'donasi_step_two'])->name('donasi_step_two');
Route::get('/donasi/selesai', [LandingController::class, 'donasi_step_three'])->name('donasi_step_three');

// Pembayaran
Route::post('/pembayaran', [DonasiController::class, 'create_payment'])->name('pembayaran');

// Dashboard
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_aksi', [LoginController::class, 'login_aksi'])->name('login_aksi');
Route::get('/logout_aksi', [LoginController::class, 'logout_aksi'])->name('logout_aksi');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Anak Asuh
    Route::get('/dashboard/anak', [AnakAsuhController::class, 'anak'])->name('admin_anak');
    // Tambah
    Route::get('/dashboard/anak/tambah', [AnakAsuhController::class, 'add_anak'])->name('add_anak');
    Route::post('/dashboard/anak/tambah_aksi', [AnakAsuhController::class, 'add_anak_aksi'])->name('add_anak_aksi');
    // Edit
    Route::get('/dashboard/anak/edit', [AnakAsuhController::class, 'edit_anak'])->name('edit_anak');
    Route::post('/dashboard/anak/edit_aksi', [AnakAsuhController::class, 'edit_anak_aksi'])->name('edit_anak_aksi');
    // Hapus
    Route::get('/dashboard/anak/hapus/{id}', [AnakAsuhController::class, 'delete_anak_aksi'])->name('delete_anak_aksi');

    // Beranda - Banner
    // Tambah
    Route::get('/dashboard/beranda/banner/tambah', [BannerController::class, 'add_banner'])->name('add_banner');
    Route::post('/dashboard/beranda/banner/tambah_aksi', [BannerController::class, 'add_banner_aksi'])->name('add_banner_aksi');
    // Edit
    Route::get('/dashboard/beranda/banner/edit', [BannerController::class, 'edit_banner'])->name('edit_banner');
    Route::post('/dashboard/beranda/banner/edit_aksi', [BannerController::class, 'edit_banner_aksi'])->name('edit_banner_aksi');
    // Hapus
    Route::get('/dashboard/beranda/banner/hapus/{id}', [BannerController::class, 'delete_banner_aksi'])->name('delete_banner_aksi');

});
