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
            <th style="text-align:center">Nama Penerbit</th>
            <th style="text-align:center">Alamat</th>
            <th style="text-align:center">Telepon</th>
            <th style="text-align:center">Email</th>
            <th style="text-align:center">Jumlah Buku</th>
           <!--  <th style="text-align:center;width:100px">Opsi</th> -->
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($allPenerbit as $penerbit) { ?>
        <tr>
          <td style="text-align:center">{{ @$i++ }}</td>
          <td>{{ @$penerbit->nama }}</td>
          <td>{{ @$penerbit->alamat }}</td>
          <td style="text-align:center">{{ @$penerbit->telepon}}</td>
          <td style="text-align:center">{{ @$penerbit->email }}</td>
          <td style="text-align:center">{{ @$penerbit->getJumlahBuku() }}</td>
        </tr>
        <?php } ?>
    </tbody>
</table>