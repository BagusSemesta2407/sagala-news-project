<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{

    //Controller Admin
    KategoriController,
    BeritaController,
    UserController,
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
//Kategori Berita
Route::resource('kategori-berita', KategoriController::class);

//Berita
Route::resource('berita', BeritaController::class);

//User
Route::resource('user', UserController::class);

Route::get('/komentar', function () {
    return view('komentar.index');
});

Route::get('/home', function() {
    return view('user.home');
});