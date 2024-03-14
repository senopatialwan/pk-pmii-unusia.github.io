<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Pages\PengajuanKTAController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('upload-files', [FileController::class,'store'])->name('upload');
Route::post('v1/user/pengajuan-kta', [PengajuanKTAController::class,'store'])->name('pengajuan-kta.upload');

Route::post('v1/admin/verifikasi-kta', [AnggotaController::class,'handleVerifikasiKTA'])->name('admin.anggota.verifikasi-kta.handle');

// *Pages
Route::view('/', 'pages.home')->name('home');
Route::view('produk-hukum', 'pages.produk-hukum')->name('produk-hukum');
Route::view('anggota', 'pages.anggota')->name('anggota');
Route::view('tim', 'pages.tim')->name('tim');
Route::view('blog', 'pages.blog')->name('blog');
Route::view('single-page', 'pages.single-page')->name('single-page');
Route::view('tentang', 'pages.tentang')->name('tentang');
Route::view('cetak-kta', 'pages.cetak-kta')->name('cetak-kta');
Route::get('pengajuan-kta', [PengajuanKTAController::class, 'index'])->name('pengajuan-kta');

// *Admin auth
Route::view('masuk', 'auth.masuk')->name('masuk');
Route::view('daftar', 'auth.daftar')->name('daftar');


// *Admin
Route::view('admin/dashboard', 'admin.dashboard')->name('admin.dashboard');

// *anggota
Route::get('admin/anggota', [AnggotaController::class, 'index'])->name('admin.anggota.index');
Route::get('admin/anggota/detail-anggota', [AnggotaController::class, 'show'])->name('admin.anggota.show');
Route::get('admin/anggota/tambah-anggota', [AnggotaController::class, 'create'])->name('admin.anggota.create');
Route::get('admin/anggota/edit-anggota', [AnggotaController::class, 'edit'])->name('admin.anggota.edit');
Route::get('admin/anggota/verifikasi-kta', [AnggotaController::class, 'verifikasiKTA'])->name('admin.anggota.verifikasi-kta');

// *pengurus
Route::view('admin/pengurus', 'admin.pengurus.index')->name('admin.pengurus.index');
Route::view('admin/pengurus/tambah-pengurus', 'admin.pengurus.create')->name('admin.pengurus.create');
Route::view('admin/pengurus/edit-pengurus', 'admin.pengurus.edit')->name('admin.pengurus.edit');