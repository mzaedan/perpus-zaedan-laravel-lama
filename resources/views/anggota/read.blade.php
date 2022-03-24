@extends('layouts.master')

@section('konten')

<div class="container">
    <div class="card-header">
        <h3 strong class="card-title" style="text-align:center;">Detail Anggota</h3>
    </div>
    <div class="card-body">
        <div style="margin-bottom:20px">
             <a href="{{ url('/anggota')}}" class="btn btn-primary">Kembali </a>
         </div>

         <table class="table table-bordered table-hover table-stripted">
            <tr>
                <th>Nama</th>
                <td>
                    <?=$model->nama;?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>
                    <?=$model->alamat;?>
                </td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>
                <?=$model->telepon; ?>    
            </td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td>
                <?= $model->email; ?>
                    
            </td>
        </tr>
        <tr>
            <th>Status Aktif</th>
            <td>
                <?= $model->status_aktif; ?>
            </td>
        </tr>
        </table>
    </div>
</div>
@endsection