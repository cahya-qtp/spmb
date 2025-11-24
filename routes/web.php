<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', [HomeController::class, 'index']);
Route::get('/admin/akun-guru', [HomeController::class, 'akun_guru']);
Route::post('/admin/akun-guru', [HomeController::class, 'store']);

Route::get('/admin/akun-siswa', [HomeController::class, 'akun_siswa']);
Route::get('/admin/akun-casis', [HomeController::class, 'akun_casis']);
