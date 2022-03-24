<!DOCTYPE html>
<html>
<head>
    <title>Web Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="../../../style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="wrap">
		<div class="header">
			<h2 style="text-align:center;">WEB PERPUSTAKAAN</h2>
			<p  style="text-align:center;">Perpustakaan Berbasis Web Sederhana</p>
		</div>

		<div class="menu">

			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/home')}}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/blog/tentang')}}">Tentang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/blog/kontak')}}">Kontak</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/buku')}}">Buku</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/penerbit')}}">Penerbit</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/penulis')}}">Penulis</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/anggota')}}">Anggota</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/kategori')}}">Kategori</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/petugas')}}">Petugas</a>
				</li>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/peminjaman')}}">Peminjaman</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ url('/user')}}">User</a>
				</li>
			</ul>
    </div>

	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3 style="text-align: center;"> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>

</body>
</html>
