<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\FidelaController;

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

//Route :: get ( identifier, action)

Route::get('halo', function () {
	return "<marquee>Halo, Selamat datang di tutorial laravel www.malasngoding.com</marquee>";
});

Route::get('blog', function () {
	return view('blog');
});

// Route::get('dosen', 'DosenController@index');

// Route::get('/pegawai/{nama}', 'PegawaiController@index');

// Route::get('/formulir', 'PegawaiController@formulir');
// Route::post('/formulir/proses', 'PegawaiController@proses');

Route::controller(DosenController::class)->group(function () {
    Route::get('dosen', 'index');
});

Route::controller(PegawaiController::class)->group(function () {
    Route::get('/pegawaicari/{nama}', 'index');
    Route::get('/formulir', 'formulir');
    Route::post('/formulir/proses', 'proses');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'home');
    //Route::get('/blog/fidela', 'fidela');
    // Route::get('/blog/kontak', 'kontak');
    // Route::get('/blog/tentang', 'tentang');
});

Route::controller(PegawaiDBController::class)->group(function () {
    Route::get('/pegawai', 'index');
    Route::get('/pegawai/tambah', 'tambah');
    Route::post('/pegawai/store', 'store');
    Route::get('/pegawai/edit/{id}', 'edit');
    Route::post('/pegawai/update', 'update');
    Route::get('/pegawai/hapus/{id}', 'hapus');
    Route::get('/pegawai/cari', 'cari');
});

// Route::controller(FidelaController::class)->group(function () {
//     Route::get('/fidela', 'fidela');
//     Route::get('/fidela/tambah', 'tambah');
//     Route::post('/fidela/store', 'store');
//     Route::get('/fidela/edit/{id}', 'edit');
//     Route::post('/fidela/update', 'update');
//     Route::get('/fidela/hapus/{id}', 'hapus');
// });
