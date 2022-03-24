@extends('layouts.master')

@section('konten')

<div class="container">
    <div class="card-header">
        <h4 class="card-title" style="text-align: center;">Detail Peminjaman</h4>
    </div>
    <div class="card-body">
        <div style="margin-bottom:20px">
             <a href="{{ url('/buku')}}" class="btn btn-primary">Kembali </a>
         </div>

         <table class="table table-bordered table-hover table-stripted">
            <tr>
                <th>Nama</th>
                <td>
                    <?=$model->nama;?>
                </td>
            </tr>
            <tr>
                <th>Id Buku</th>
                <td>
                    <?=$model->id_buku;?>
                </td>
        </tr>
        <tr>
            <th>Id Anggota</th>
            <td>
                <?=$model->id_anggota; ?>    
            </td>
        </tr>
        <tr>
            <th>Tanggal Pinjam</th>
            <td>
                <?= $model->tangal_pinjam; ?>
                    
            </td>
        </tr>
        <tr>
            <th>Tanggal Kembali</th>
            <td>
                <?=$model->tanggal_kembali; ?>
            </td>
        </tr>
        <tr>
        </table>
    </div>
</div>
@endsection