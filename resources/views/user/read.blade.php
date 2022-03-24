@extends('layouts.master')

@section('konten')

<div class="container">
    <div class="card-header">
        <h3 class="card-title " style="text-align: center;">Detail User</h3>
    </div>
    <div class="card-body">
        <div style="margin-bottom:20px">
             <a href="{{ url('/buku')}}" class="btn btn-primary">Kembali </a>
         </div>

         <table class="table table-bordered table-hover table-stripted">
            <tr>
                <th>User Name</th>
                <td>
                    <?=$model->username;?>
                </td>
            </tr>
            <tr>
                <th>password</th>
                <td>
                    <?=$model->password;?>
                </td>
        </tr>
        <tr>
            <th>Id Anggota</th>
            <td>
                <?=$model->anggota->nama; ?>    
            </td>
        </tr>
        <tr>
            <th>Id Petugas</th>
            <td>
                <?= $model->petugas->nama; ?>     
            </td>
        </tr>
         <tr>
            <th>Id User Role</th>
            <td>
                <?= $model->id_user_role; ?>
            </td>
        <tr>
            <th>Status</th>
            <td>
                <?= $model->status; ?>     
            </td>
        </tr>
        </tr>
        </table>
    </div>
</div>
@endsection