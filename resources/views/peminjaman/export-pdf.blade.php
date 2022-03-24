<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th style="text-align:center">Nama </th>
            <th style="text-align:center">Id Buku</th>
            <th style="text-align:center">Id Anggota</th>
            <th style="text-align:center">Tanggal Pinjam</th>
            <th style="text-align:center">Tanggal Kembali</th>
            <th style="text-align:center;width:100px">Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($allpeminjaman as $peminjaman) { ?>
        <tr>
            <td>{{ @$i++ }}</td>
            <td>{{ @$peminjaman->nama }}</td>
            <td>{{ @$peminjaman->id_buku }}</td>
            <td>{{ @$peminjaman->id_anggota}}</td>
            <td>{{ @$peminjaman->tanggal_pinjam }}</td>
            <td>{{ @$peminjaman->tanggal_kembali }}</td>
        </tr>
        <?php } ?>
    </tbody>
</table>