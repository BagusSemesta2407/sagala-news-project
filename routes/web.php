<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{

    //Controller Admin
    KategoriController,
};
use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Auth;
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
Route::resource('kategori-berita', KategoriController::class);

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

Route::get('/masterAkun', function () {
    return view('masterAkun.index');
});

Route::get('/komentar', function () {
    return view('komentar.index');
});