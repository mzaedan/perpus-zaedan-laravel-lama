<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th style="text-align:center">Nama </th>
            <th style="text-align:center">Jumlah Buku </th>
            <th style="text-align:center;width:100px">Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($allkategori as $kategori) { ?>
        <tr>
            <td>{{ @$i++ }}</td>
            <td>{{ @$buku->nama }}</td>
        </tr>
        <?php } ?>
    </tbody>
</table>