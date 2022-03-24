<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('layouts.master');
});
//Buku
Route::get('/buku', 'App\Http\Controllers\BukuController@index');
Route::get('/buku/tambah', 'App\Http\Controllers\BukuController@tambah');
Route::post('/buku/store', 'App\Http\Controllers\BukuController@store');
Route::get('/buku/edit/{id}', 'App\Http\Controllers\BukuController@edit');
Route::put('/buku/update/{id}', 'App\Http\Controllers\BukuController@update');
Route::get('/buku/hapus/{id}', 'App\Http\Controllers\BukuController@delete');
Route::get('/buku/cari','App\Http\Controllers\BukuController@cari');
Route::get('/buku/read/{id}', 'App\Http\Controllers\BukuController@read');
Route::get('/buku/export-pdf', 'App\Http\Controllers\BukuController@exportPdf');
Route::get('/buku/export-excel', 'App\Http\Controllers\BukuController@exportExcel');
Route::post('/buku/proses', 'App\Http\Controllers\BukuController@upload');
Route::get('/buku/trash', 'App\Http\Controllers\BukuController@trash');
Route::get('/buku/kembalikan/{id}', 'App\Http\Controllers\BukuController@kembalikan');
//blog
Route::get('/home', 'App\Http\Controllers\BlogController@index');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
Route::get('/blog/buku', 'App\Http\Controllers\BlogController@buku');
Route::get('/blog/penerbit', 'App\Http\Controllers\BlogController@penerbit');
//penerbit
Route::get('/penerbit', 'App\Http\Controllers\PenerbitController@index');
Route::get('/penerbit/tambah', 'App\Http\Controllers\PenerbitController@tambah');
Route::post('/penerbit/store', 'App\Http\Controllers\PenerbitController@store');
Route::get('/penerbit/edit/{id}', 'App\Http\Controllers\PenerbitController@edit');
Route::put('/penerbit/update/{id}', 'App\Http\Controllers\PenerbitController@update');
Route::get('/penerbit/hapus/{id}', 'App\Http\Controllers\PenerbitController@delete');
Route::get('/penerbit/cari','App\Http\Controllers\PenerbitController@cari');
Route::get('/penerbit/read/{id}', 'App\Http\Controllers\PenerbitController@read');
Route::get('/penerbit/export-pdf', 'App\Http\Controllers\PenerbitController@exportPdf');
Route::get('/penerbit/export-excel', 'App\Http\Controllers\PenerbitController@exportExcel');
//penulis
Route::get('/penulis', 'App\Http\Controllers\PenulisController@index');
Route::get('/penulis/tambah', 'App\Http\Controllers\PenulisController@tambah');
Route::post('/penulis/store', 'App\Http\Controllers\PenulisController@store');
Route::get('/penulis/edit/{id}', 'App\Http\Controllers\PenulisController@edit');
Route::put('/penulis/update/{id}', 'App\Http\Controllers\PenulisController@update');
Route::get('/penulis/hapus/{id}', 'App\Http\Controllers\PenulisController@delete');
Route::get('/penulis/cari','App\Http\Controllers\PenulisController@cari');
Route::get('/penulis/read/{id}', 'App\Http\Controllers\PenulisController@read');
Route::get('/penulis/export-pdf', 'App\Http\Controllers\PenulisController@exportPdf');
Route::get('/penulis/export-excel', 'App\Http\Controllers\PenulisController@exportExcel');
//Anggota
Route::get('/anggota', 'App\Http\Controllers\AnggotaController@index');
Route::get('/anggota/tambah', 'App\Http\Controllers\AnggotaController@tambah');
Route::post('/anggota/store', 'App\Http\Controllers\AnggotaController@store');
Route::get('/anggota/edit/{id}', 'App\Http\Controllers\AnggotaController@edit');
Route::put('/anggota/update/{id}', 'App\Http\Controllers\AnggotaController@update');
Route::get('/anggota/hapus/{id}', 'App\Http\Controllers\AnggotaController@delete');
Route::get('/anggota/cari','App\Http\Controllers\AnggotaController@cari');
Route::get('/anggota/read/{id}', 'App\Http\Controllers\AnggotaController@read');
Route::get('/anggota/export-pdf', 'App\Http\Controllers\AnggotaController@exportPdf');
Route::get('/anggota/export-excel', 'App\Http\Controllers\AnggotaController@exportExcel');
//Kategori
Route::get('/kategori', 'App\Http\Controllers\KategoriController@index');
Route::get('/kategori/tambah', 'App\Http\Controllers\kategoriController@tambah');
Route::post('/kategori/store', 'App\Http\Controllers\kategoriController@store');
Route::get('/kategori/edit/{id}', 'App\Http\Controllers\kategoriController@edit');
Route::put('/kategori/update/{id}', 'App\Http\Controllers\kategoriController@update');
Route::get('/kategori/hapus/{id}', 'App\Http\Controllers\kategoriController@delete');
Route::get('/kategori/cari','App\Http\Controllers\KategoriController@cari');
Route::get('/kategori/read/{id}', 'App\Http\Controllers\KategoriController@read');
Route::get('/kategori/export-pdf', 'App\Http\Controllers\KategoriController@exportPdf');
Route::get('/kategori/export-excel', 'App\Http\Controllers\KategoriController@exportExcel');
//Petugas
Route::get('/petugas', 'App\Http\Controllers\PetugasController@index');
Route::get('/petugas/tambah', 'App\Http\Controllers\PetugasController@tambah');
Route::post('/petugas/store', 'App\Http\Controllers\PetugasController@store');
Route::get('/petugas/edit/{id}', 'App\Http\Controllers\PetugasController@edit');
Route::put('/petugas/update/{id}', 'App\Http\Controllers\PetugasController@update');
Route::get('/petugas/hapus/{id}', 'App\Http\Controllers\PetugasController@delete');
Route::get('/petugas/cari','App\Http\Controllers\PetugasController@cari');
Route::get('/petugas/read/{id}', 'App\Http\Controllers\PetugasController@read');
Route::get('/petugas/export-pdf', 'App\Http\Controllers\PetugasController@exportPdf');
Route::get('/petugas/export-excel', 'App\Http\Controllers\PetugasController@exportExcel');
//Peminjaman
Route::get('/peminjaman', 'App\Http\Controllers\PeminjamanController@index');
Route::get('/peminjaman/tambah', 'App\Http\Controllers\PeminjamanController@tambah');
Route::post('/peminjaman/store', 'App\Http\Controllers\PeminjamanController@store');
Route::get('/peminjaman/edit/{id}', 'App\Http\Controllers\PeminjamanController@edit');
Route::put('/peminjaman/update/{id}', 'App\Http\Controllers\PeminjamanController@update');
Route::get('/peminjaman/hapus/{id}', 'App\Http\Controllers\PeminjamanController@delete');
Route::get('/peminjaman/cari','App\Http\Controllers\PeminjamanController@cari');
Route::get('/peminjaman/read/{id}', 'App\Http\Controllers\PeminjamanController@read');
Route::get('/peminjaman/export-pdf', 'App\Http\Controllers\PeminjamanController@exportPdf');
Route::get('/peminjaman/export-excel', 'App\Http\Controllers\PeminjamanController@exportExcel');

//User
Route::get('/user', 'App\Http\Controllers\UserController@index');
Route::get('/user/tambah', 'App\Http\Controllers\UserController@tambah');
Route::post('/user/store', 'App\Http\Controllers\UserController@store');
Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@edit');
Route::put('/user/update/{id}', 'App\Http\Controllers\UserController@update');
Route::get('/user/hapus/{id}', 'App\Http\Controllers\UserController@delete');
Route::get('/user/cari','App\Http\Controllers\UserController@cari');
Route::get('/user/read/{id}', 'App\Http\Controllers\UserController@read');
Route::get('/user/export-pdf', 'App\Http\Controllers\UserController@exportPdf');
Route::get('/user/export-excel', 'App\Http\Controllers\UserController@exportExcel');
//Admin
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
