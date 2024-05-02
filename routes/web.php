<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DashboardController;   
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class,'login'])->name('login.proses');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard_admin'] )->name("admin.dashboard");
Route::get('admin/pembayaran', [PembayaranController::class, 'index'])->name("admin.pembayaran");
Route::get('/dashboard-siswa', function () {
    return view('welcome');
});
Route::get('/dashboard-orang_tua', function () {
    return view('welcome');
});
//menu pd bagian data master
Route::get('/admin/dtsiswa', [SiswaController::class, 'index'] )->name("admin.dtsiswa");
Route::get('/admin/dtadmin', [AdminController::class, 'index'] )->name("admin.dtadmin");


