<?php

use Illuminate\Support\Facades\Route;

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

// *Admin
Route::view('admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
