<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

// *Pages
Route::view('/', 'pages.home')->name('home');
Route::view('produk-hukum', 'pages.produk-hukum')->name('produk-hukum');
Route::view('anggota', 'pages.anggota')->name('anggota');
Route::view('tim', 'pages.tim')->name('tim');
Route::view('blog', 'pages.blog')->name('blog');
Route::view('single-page', 'pages.single-page')->name('single-page');
Route::view('tentang', 'pages.tentang')->name('tentang');
Route::view('Cetak', 'pages.cetak-kta')->name('cetak-kta');
Route::view('pengajuan', 'pages.pengajuan-kta')->name('pengajuan-kta');

// *Admin auth
Route::view('masuk', 'auth.masuk')->name('masuk');
Route::view('daftar', 'auth.daftar')->name('daftar');


// *Admin
Route::view('admin/dashboard', 'admin.dashboard')->name('admin.dashboard');

// *anggota
Route::view('admin/anggota', 'admin.anggota.index')->name('admin.anggota.index');
Route::view('admin/anggota/verifikasi-kta', 'admin.anggota.verifikasi-kta')->name('admin.anggota.verifikasi-kta');
Route::view('admin/anggota/tambah-anggota', 'admin.anggota.create')->name('admin.anggota.create');
Route::view('admin/anggota/edit-anggota', 'admin.anggota.edit')->name('admin.anggota.edit');
Route::view('admin/anggota/detail-anggota', 'admin.anggota.show')->name('admin.anggota.show');

// *pengurus
Route::view('admin/pengurus', 'admin.pengurus.index')->name('admin.pengurus.index');
Route::view('admin/pengurus/tambah-pengurus', 'admin.pengurus.create')->name('admin.pengurus.create');
Route::view('admin/pengurus/edit-pengurus', 'admin.pengurus.edit')->name('admin.pengurus.edit');