<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Admin\AnggotaController as AdminAnggota;
use App\Http\Controllers\Pages\AnggotaController as Anggota;
use App\Http\Controllers\Pages\PengajuanKTAController;
use App\Http\Controllers\Admin\PengurusController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Pages\CetakKTAController;
use App\Http\Controllers\Pages\PagesBlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Pages\PengurusController as LandingPengurusController;

Route::fallback(function () {
    return view("error.404");
});

Route::get('/blogs', [PagesBlogController::class, 'index'])->name('pages.blogs.index');
Route::get('/blogs/{title}', [PagesBlogController::class, 'show'])->name('pages.blogs.show');

Route::post('upload-files', [FileController::class, 'store'])->name('upload');
Route::post('v1/user/pengajuan-kta', [PengajuanKTAController::class, 'store'])->name('pengajuan-kta.upload');
Route::post('v1/user/cetak-kta', [CetakKTAController::class, 'store'])->name('cetak-kta.store');
Route::post('v1/admin/anggota/store', [AdminAnggota::class, 'store'])->name('admin.anggota.store');
Route::post('v1/admin/verifikasi-kta', [AdminAnggota::class, 'handleVerifikasiKTA'])->name('admin.anggota.verifikasi-kta.handle');


// *Pages
Route::view('/', 'pages.home')->name('home');
Route::view('produk-hukum', 'pages.produk-hukum')->name('produk-hukum');

Route::group(['prefix' => 'anggota'], function () {
    Route::get('/', [Anggota::class, 'index'])->name('anggota.index');
    Route::get('{pengurus}', [Anggota::class, 'show'])->name('anggota.show');
});



Route::get('/tim', [LandingPengurusController::class, 'index'])->name('tim.index');
Route::get('/tim-kopri', [LandingPengurusController::class, 'kopri'])->name('tim-kopri');


Route::view('blog', 'pages.blog')->name('blog');
Route::view('single-page', 'pages.single-page')->name('single-page');
Route::view('tentang', 'pages.tentang')->name('tentang');
Route::get('cetak-kta', [CetakKTAController::class, 'show'])->name('cetak-kta');
Route::get('cetak-kta/{kta_id}', [CetakKTAController::class, 'cetakKTA'])->name('cetak-kta.print');
Route::get('pengajuan-kta', [PengajuanKTAController::class, 'show'])->name('pengajuan-kta');
Route::view('visi-misi', 'pages.visi-misi')->name('visi-misi');

Route::get('/download-pdf/{kta_id}', [CetakKTAController::class, 'downloadPDF'])->name('download.pdf');



// *Admin auth
Route::view('masuk', 'auth.masuk')->name('masuk');
Route::view('daftar', 'auth.daftar')->name('daftar');


// *Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('dashboard', DashboardController::class)->name('admin.dashboard');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    // *anggota
    Route::get('anggota', [AdminAnggota::class, 'index'])->name('admin.anggota.index');
    Route::get('anggota/tambah-anggota', [AdminAnggota::class, 'create'])->name('admin.anggota.create');
    Route::get('anggota/edit-anggota', [AdminAnggota::class, 'edit'])->name('admin.anggota.edit');
    Route::get('anggota/verifikasi-kta', [AdminAnggota::class, 'verifikasiKTA'])->name('admin.anggota.verifikasi-kta');
    Route::delete('anggota/del/{anggota}', [AdminAnggota::class, 'destroy'])->name('admin.anggota.destroy');
    Route::get('anggota/{anggota}', [AdminAnggota::class, 'show'])->name('admin.anggota.show');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile.index');
    Route::put('profile/{user}', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
    Route::put('profile/password/{user}', [ProfileController::class,'updatePassword'])->name('admin.profile.password');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('pengurus', [PengurusController::class, 'index'])->name('admin.pengurus.index');
    Route::get('pengurus/create', [PengurusController::class, 'create'])->name('admin.pengurus.create');
    Route::post('pengurus', [PengurusController::class, 'store'])->name('admin.pengurus.store');
    Route::get('pengurus/{pengurus}/edit', [PengurusController::class, 'edit'])->name('admin.pengurus.edit');
    Route::put('pengurus/{pengurus}', [PengurusController::class, 'update'])->name('admin.pengurus.update');
    Route::delete('pengurus/{pengurus}', [PengurusController::class, 'destroy'])->name('admin.pengurus.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('tags', [TagController::class, 'index'])->name('admin.tags.index');
    Route::get('tags/create', [TagController::class, 'create'])->name('admin.tags.create');
    Route::post('tags', [TagController::class, 'store'])->name('admin.tags.store');
    Route::get('tags/{tag}/edit', [TagController::class, 'edit'])->name('admin.tags.edit');
    Route::put('tags/{tag}', [TagController::class, 'update'])->name('admin.tags.update');
    Route::delete('tags/{tag}', [TagController::class, 'destroy'])->name('admin.tags.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
    Route::get('blogs/{id}', [BlogController::class, 'show'])->name('admin.blogs.show');
});
