
@extends('layouts.master')

@section('konten')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

<div class="container">

        <div class="card-header text-center">
            <strong class="card-title md-5">Daftar Buku</strong>
        </div>
        <div class="card-body">

                <a href="{{ url('/buku/tambah')}}" class="btn btn-primary fa fa-plus">Tambah Buku Baru
                </a>
                <a href="{{ url('/buku/export-pdf')}}" class="btn btn-danger fa fa-file-pdf" target="_blank">CETAK PDF</a>
                <a href="{{ url('/buku/export-excel')}}" class="btn btn-success my-3 fa fa-file-excel" target="_blank">EXPORT EXCEL</a>

            <div style="text-align: right; margin-bottom: 30px">
                <form action="{{ url('/buku') }}" method="GET">
                    <input type="text" name="nama" placeholder="Cari buku .." value="{{ old('cari') }}">
                    <span class="fa fa-search"></span>
                    <input type="submit" value="Cari">
                </form>
            </div>

                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th style="text-align:center">Nama Buku</th>
                                <th style="text-align:center">Tahun Terbit</th>
                                <th style="text-align:center">Penulis</th>
                                <th style="text-align:center">Penerbit</th>
                                <th style="text-align:center">Kategori</th>
                                <th style="text-align:center">Sampul</th>
                                <th style="text-align:center;width:200px">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($allbuku as $buku)
                            <tr>
                                <td style="text-align: center">{{ @$i++ }}</td>
                                <td>{{ @$buku->nama }}</td>
                                <td>{{ @$buku->tahun_terbit }}</td>
                                <td>{{ @$buku->penulis->nama}}</td>
                                <td>{{ @$buku->penerbit->nama }}</td>
                                <td>{{ @$buku->kategori->nama }}</td>
                                <td><img width="100px" src="{{ url('/uploads/'.$buku->sampul)}}"></td>
                                <td style="text-align: center">
                                    <a href="{{ url('/buku/read/'.$buku->id)}}" button type="button" class="btn btn-info fa fa-eye"></a>
                                    <a href="{{ url('/buku/edit/'.$buku->id)}}" button type="button"class=" btn btn-warning fa fa-edit"></a>
                                    <a href="{{ url('/buku/hapus/'.$buku->id)}}" button type="button" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                 </div>
            </table>
        </div>
    </div>
</div>
@endsection
