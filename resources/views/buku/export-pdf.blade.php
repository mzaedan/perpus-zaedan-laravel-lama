<!DOCTYPE html>
<html>
<head>
	<title>Export Laporan PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF</h4>
	</center>


<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th style="text-align:center">No</th>
            <th style="text-align:center">Nama</th>
            <th style="text-align:center">Tahun Terbit</th>
            <th style="text-align:center">Penerbit</th>
            <th style="text-align:center">Kategori</th>
           <!--  <th style="text-align:center;width:100px">Opsi</th> -->
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($allBuku as $buku) { ?>
        <tr>
          <td style="text-align:center">{{ @$i++ }}</td>
          <td>{{ @$buku->nama }}</td>
          <td style="text-align:center">{{ @$buku->tahun_terbit }}</td>
          <td style="text-align:center">{{ @$buku->penerbit->nama }}</td>
          <td style="text-align:center">{{ @$buku->kategori->nama }}</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
