<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th style="text-align:center">Nama Penerbit</th>
            <th style="text-align:center">Alamat</th>
            <th style="text-align:center">Telepon</th>
            <th style="text-align:center">E-mail</th>
            <th style="text-align:center;width:100px">Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($allpetugas as $petugas) { ?>
        <tr>
            <td>{{ @$i++ }}</td>
            <td>{{ @$petugas->nama }}</td>
            <td>{{ @$petugas->alamat }}</td>
            <td>{{ @$petugas->telepon}}</td>
            <td>{{ @$petugas->email }}</td>
        </tr>
        <?php } ?>
    </tbody>
</table>