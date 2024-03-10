<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/', 'welcome')->name('home');

// *Pages
Route::view('/', 'pages.home')->name('home');
Route::view('tim', 'pages.tim')->name('tim');
Route::view('blog', 'pages.blog')->name('blog');
Route::view('Cetak', 'pages.cetak-kta')->name('cetak-kta');
Route::view('pengajuan', 'pages.pengajuan-kta')->name('pengajuan-kta');
Route::view('single-page', 'pages.single-page')->name('single-page');
Route::view('about', 'pages.about')->name('about');
Route::view('database', 'pages.database')->name('database');
Route::view('produk-hukum', 'pages.produk-hukum')->name('produk-hukum');

<<<<<<< HEAD
// *Admin auth
Route::view('masuk', 'auth.masuk')->name('masuk');
Route::view('daftar', 'auth.daftar')->name('daftar');


// *Admin
Route::view('admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
=======
// // *Admin
// Route::view('admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
>>>>>>> pain

// // *database
// Route::view('admin/database/anggota-PMII', 'admin.database.index')->name('admin.database.index');
// Route::view('admin/database/verivikasi-kta', 'admin.database.verivikasi-kta')->name('admin.database.verivikasi-kta');
// Route::view('admin/database/tambah-anggota', 'admin.database.create')->name('admin.database.create');
// Route::view('admin/database/edit-anggota', 'admin.database.edit')->name('admin.database.edit');
// Route::view('admin/database/detail-anggota', 'admin.database.show')->name('admin.database.show');

<<<<<<< HEAD
// *pengurus
Route::view('admin/pengurus/data-Pengurus', 'admin.pengurus.index')->name('admin.pengurus.index');
Route::view('admin/pengurus/tambah-Pengurus', 'admin.pengurus.create')->name('admin.pengurus.create');
Route::view('admin/pengurus/edit-Pengurus', 'admin.pengurus.edit')->name('admin.pengurus.edit');
=======
// // *pengurus
// Route::view('admin/struktur-organisasi/data-Pengurus', 'admin.struktur-organisasi.index')->name('admin.struktur-organisasi.index');
// Route::view('admin/struktur-organisasi/tambah-Pengurus', 'admin.struktur-organisasi.create')->name('admin.struktur-organisasi.create');
// Route::view('admin/struktur-organisasi/edit-Pengurus', 'admin.struktur-organisasi.edit')->name('admin.struktur-organisasi.edit');
>>>>>>> pain



Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/database/anggota-PMII', [AdminController::class, 'showDatabaseIndex'])->name('database.index');
    Route::get('/database/verifikasi-kta', [AdminController::class, 'showVerifikasiKta'])->name('database.verifikasi-kta');
    Route::get('/database/tambah-anggota', [AdminController::class, 'showCreateAnggota'])->name('database.create');
    Route::get('/database/edit-anggota', [AdminController::class, 'showEditAnggota'])->name('database.edit');
    Route::get('/database/detail-anggota', [AdminController::class, 'showDetailAnggota'])->name('database.show');
    Route::get('/struktur-organisasi/data-Pengurus', [AdminController::class, 'showStrukturOrganisasiIndex'])->name('struktur-organisasi.index');
    Route::get('/struktur-organisasi/tambah-Pengurus', [AdminController::class, 'showCreatePengurus'])->name('struktur-organisasi.create');
    Route::get('/struktur-organisasi/edit-Pengurus', [AdminController::class, 'showEditPengurus'])->name('struktur-organisasi.edit');
});

