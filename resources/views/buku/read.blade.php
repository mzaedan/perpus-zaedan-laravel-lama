@extends('layouts.master')

@section('konten')

<div class="container">
    <div class="card-header">
        <h3 strong class="card-title" style="text-align:center;">Detail Data</h3>
    </div>
    <div class="card-body">
        <div style="margin-bottom:20px">
             <a href="{{ url('/anggota')}}" class="btn btn-primary">Kembali </a>
         </div>

         <table class="table table-bordered table-hover table-stripted">
            <tr>
                <th>Nama</th>
                <td>
                    <?= $model->nama;?>
                </td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td>
                    <?= $model->tahun_terbit;?>
                </td>
        </tr>
        <tr>
            <th>Penulis</th>
            <td>
                <?= @$model->penulis->nama; ?>    
            </td>
        </tr>
        <tr>
            <th>Penerbit</th>
            <td>
                <?= @$model->penerbit->nama; ?>
                    
            </td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>
                <?= @$model->kategori->nama; ?>
            </td>
        </tr>
         <tr>
            <th>Sinopsis</th>
            <td>
                <?= @$model->sinopsis; ?>
            </td>
        </tr>
        <tr>
            <th>Sampul</th>
            <td>
                <img width="100px" src="{{ url('/uploads/'.$model->sampul)}}"></td>
            </td>
        </tr>
            <tr>
            <th>Berkas File</th>
            <td>
                <embed type=application/pdf src="{{ url('/updates/'.$model->berkas)}}" width="500" height="250"></embed>
            </td>
        </tr>
        </table>
    </div>
</div>
@endsection