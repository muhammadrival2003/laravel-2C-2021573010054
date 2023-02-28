<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/profil/coba', function () {
    echo '<h2 style="text-align: center">Hello World</h2>';
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return ("Tampilkan data mahasiswa bernama $nama");
});

Route::get('/stok_barang/{jenis?}/{merek?}', function ($a='smartphone', $b='samsung') {
    return ("Cek sisa stok untuk $a $b");
});

Route::get('/user/{id}', function ($id) {
    return ("Tampilkan user dengan id = $id");
})->where('id','[0-9]+');

Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi kami</h1>';
});
Route::redirect('/contact-us','/hubungi-kami');

Route::prefix('/admin')->group(function(){
    Route::get('/mahasiswa', function () {
        echo "<h1>Daftar Mahasiswa</h1>";
    });
    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen</h1>";
    });
    Route::get('/karyawan', function () {
        echo "<h1>Daftar Karyawan</h1>";
    });
});

Route::fallback(function () {
    return 'Maaf, alamat tidak ditemukan';
});