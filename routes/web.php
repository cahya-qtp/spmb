<?php

use App\Http\Controllers\Admin\ADashboardController;
use App\Http\Controllers\Admin\AGuruController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', [ADashboardController::class, 'index']);

Route::get('/admin/akun-guru', [AGuruController::class, 'index']);
Route::post('/admin/akun-guru', [AGuruController::class, 'store']);

Route::get('/admin/akun-siswa', [HomeController::class, 'akun_siswa']);
Route::get('/admin/akun-casis', [HomeController::class, 'akun_casis']);
