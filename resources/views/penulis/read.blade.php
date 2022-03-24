@extends('layouts.master')

@section('konten')

<div class="container">
    <div class="card-header">
        <h3 class="card-title" style="text-align: center;">Detail Buku Penulis</h3>
    </div>
    <div class="card-body">
        <div style="margin-bottom:20px">
             <a href="{{ url('/penerbit')}}" class="btn btn-primary">Kembali </a>
         </div>

        <table class="table table-bordered table-hover table-stripted">
        <thead>
            <tr>
                <th style="text-align:center;">No</th>
                <th style="text-align:center;">Nama Buku</th>
                <th style="text-align:center;">Tahun Terbit</th>
                <th style="text-align:center;">Penulis</th>
                <th style="text-align:center;">Penerbit</th>
                <th style="text-align:center;">Kategori</th>
                <th style="text-align:center;">Sinopsis</th>
                <th style="text-align:center;">Sampul</th>
                <th style="text-align:center;">Berkas</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($model->buku as $buku)
            <tr>
                <td style="text-align: center;">{{@$i++}}</td>
                <td>{{@$buku->nama}}</td>
                <td>{{@$buku->tahun_terbit}}</td>
                <td>{{@$buku->penulis->nama}}</td>
                <td>{{@$buku->penerbit->nama}}</td>
                <td>{{@$buku->kategori->nama}}</td>
                <td>{{@$buku->sinopsis}}</td>
                <td><img width="100px" src="{{ url('/uploads/'.@$buku->sampul)}}"></td>
                <td><embed type=application/pdf src="{{ url('/updates/'.@$buku->berkas)}}" width="500" height="250"></embed>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection