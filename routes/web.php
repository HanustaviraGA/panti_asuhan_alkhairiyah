<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DonasiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'beranda'])->name('beranda');
Route::get('/anak', [LandingController::class, 'anak'])->name('anak');
Route::get('/donasi', [LandingController::class, 'donasi'])->name('donasi');
Route::get('/donasi/proses/{id}', [LandingController::class, 'donasi_step_two'])->name('donasi_step_two');
Route::get('/donasi/selesai', [LandingController::class, 'donasi_step_three'])->name('donasi_step_three');

// Pembayaran
Route::post('/pembayaran', [DonasiController::class, 'create_payment'])->name('pembayaran');
