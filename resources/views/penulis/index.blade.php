
@extends('layouts.master')

@section('konten')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong class="card-title md-5">Daftar Penulis</strong>
                </div>
                <div class="card-body">
                <a href="{{ url('/penulis/tambah')}}" class="btn btn-primary fa fa-plus">Tambah Data Penulis</a>
                <a href="{{ url('/penulis/export-pdf')}}" class="btn btn-danger fa fa-file-pdf" target="_blank">CETAK PDF</a>
                <a href="{{ url('/penulis/export-excel')}}" class="btn btn-success my-3 fa fa-file-excel" target="_blank">EXPORT EXCEL</a>
            </div>

                <div style="text-align:right; margin-bottom: 30px">
                    <form action="{{ url('/penulis') }}" method="GET">
                    <input type="text" name="cari" placeholder="Cari Penulis.." value="{{ old('cari') }}">
                    <input type="submit" value="Cari">
                    </form>
                </div>
             
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th style="text-align:center">Nama Penulis</th>
                                <th style="text-align:center">Alamat</th>
                                <th style="text-align:center">Telepon</th>
                                <th style="text-align:center">E-mail</th>
                                <th style="text-align:center">Jumlah Buku</th>
                                <th style="text-align:center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($allpenulis as $penulis)
                            <tr>
                                <td style="text-align: center">{{ @$i++ }}</td>
                                <td>{{ @$penulis->nama }}</td>
                                <td>{{ @$penulis->alamat }}</td>
                                <td style="text-align: center">{{ @$penulis->telepon }}</td>
                                <td>{{ @$penulis->email }}</td>
                                <td style="text-align: center">{{ @$penulis->getjumlahbuku() }}</td>
                                <td>
                                    <a href="{{ url('/penulis/read/'.$penulis->id)}}" class="btn btn-info fa fa-eye"></a>
                                    <a href="{{ url('/penulis/edit/'.$penulis->id)}}" class="btn btn-warning fa fa-edit"></a>
                                    <a href="{{ url('/penulis/hapus/'.$penulis->id)}}" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection