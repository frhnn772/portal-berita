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
    return view('welcome');
});

// Route::resource('produk',\App\Http\Controllers\ProdukController::class);

Route::get('/', 'App\Http\Controllers\BeritaController@index');
Route::get('/data', 'App\Http\Controllers\BeritaController@data');
Route::get('/galeri', 'App\Http\Controllers\BeritaController@galeri');
Route::post('tambah_berita', 'App\Http\Controllers\BeritaController@tambah')->name('berita.tambah');
Route::get('data', 'App\Http\Controllers\BeritaController@data')->name('berita.data');
Route::get('ubah/{id}', 'App\Http\Controllers\BeritaController@ubah');
Route::post('ubah_berita/{berita}', 'App\Http\Controllers\BeritaController@ubah_berita')->name('berita.ubah');
Route::get('hapus/{berita}', 'App\Http\Controllers\BeritaController@hapus')->name('berita.hapus');