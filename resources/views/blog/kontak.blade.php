<!-- Menghubungkan dengan view template master -->
@extends('layouts.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p style="text-align: center;">Ini Adalah Halaman Kontak</p>

	<table  align="center" border="1" >
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>perpustakaan@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0896-0676-7404</td>
		</tr>
	</table>

@endsection
