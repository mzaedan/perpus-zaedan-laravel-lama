<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th style="text-align:center">User Name</th>
            <th style="text-align:center">Password</th>
            <th style="text-align:center">Anggota</th>
            <th style="text-align:center">Petugas</th>
            <th style="text-align:center">Id User Role</th>
            <th style="text-align:center">Status</th>
            <th style="text-align:center;width:100px">Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($alluser as $user) { ?>
        <tr>
            <td>{{ @$i++ }}</td>
            <td>{{ @$User->nama }}</td>
            <td>{{ @$User->alamat }}</td>
            <td>{{ @$User->telepon}}</td>
            <td>{{ @$User->email }}</td>
        </tr>
        <?php } ?>
    </tbody>
</table>