<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\PenggunaController;
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

Route::post('/login', [AuthController::class, 'login'])->name('login.proses');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard_admin'])->name("admin.dashboard");
Route::get('admin/pembayaran', [PembayaranController::class, 'index'])->name("admin.pembayaran");
Route::get('/dashboard-siswa', function () {
    return view('welcome');
});
Route::get('/dashboard-orang_tua', function () {
    return view('welcome');
});
//menu pd bagian data master
Route::get('/admin/dtsiswa', [SiswaController::class, 'index'])->name("admin.dtsiswa");
Route::get('/admin/dtpengguna', [PenggunaController::class, 'index'])->name("admin.dtpengguna");
Route::get('/admin/dtkelas', [KelasController::class, 'index'])->name("admin.dtkelas");
Route::get('/admin/dtortu', [OrangtuaController::class, 'index'])->name("admin.dtortu");
Route::post('/admin/pengguna/tambah', [PenggunaController::class, 'store'])->name("pengguna.store");
Route::get('/admin/pengguna', [PenggunaController::class, 'create'])->name('pengguna.create');
//
Route::get('/admin/dtsiswa/tambah', [SiswaController::class, 'tambahsiswa'])->name("admin.dtsiswa.tambah");
Route::get('/admin/dtkelas/tambah', [KelasController::class, 'tambahkelas'])->name("admin.dtkelas.tambah");
Route::get('/admin/dtortu/tambah', [OrangtuaController::class, 'tambahortu'])->name("admin.dtortu.tambah");

//menyimpan data (post)
Route::post('/admin/dtkelas/tambah', [KelasController::class, 'store'])->name("admin.dtkelas.store");
Route::get('admin/dtkelas/edit/{id}', [KelasController::class, 'edit'])->name("kelas.edit");
Route::put('admin/dtkelas/update/{id}', [KelasController::class, 'update'])->name("kelas.update");
