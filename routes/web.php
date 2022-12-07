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

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/kategori', function () {
    return view('kategoriBerita.index');
});
Route::get('/berita', function () {
    return view('berita.index');
});

Route::get('/formBerita', function () {
    return view('berita.form');
    return view('kategoriBerita.index');
});
Route::get('/formkategoriBerita', function () {
    return view('kategoriBerita.form');
    return view('kategoriBerita.index');
});