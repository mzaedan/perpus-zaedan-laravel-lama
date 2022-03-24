<!-- Menghubungkan dengan view template master -->
@extends('layouts.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')


	<p style="text-align: center;">Selamat Datang</p>
	<p style="text-align: center;">Ini Adalah Halaman Tentang</p>
	<div id="container"></div>

@endsection