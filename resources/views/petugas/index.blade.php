@extends('layouts.master')

@section('konten')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong class="card-title md-5">Daftar Petugas</strong>
                </div>
                <div class="card-body">
                <a href="{{ url('/petugas/tambah')}}" class="btn btn-primary fa fa-plus">Tambah Data Petugas</a>
                <a href="{{ url('/petugas/export-pdf')}}" class="btn btn-danger fa fa-file-pdf" target="_blank">CETAK PDF</a>
                <a href="{{ url('/petugas/export-excel')}}" class="btn btn-success my-3 fa fa-file-excel" target="_blank">EXPORT EXCEL</a>


                <div class="row align-items-center">
                    <div class="col"><br/><br/>

                </div>
                <div style="text-align:right; margin-bottom: 10px">
                    <form action="{{ url('/petugas')}}" method="GET">
                    <input type="text" name="cari" placeholder="Cari Penerbit .." value="{{ old('cari') }}">
                    <span class="fa fa-search"></span>
                    <input type="submit" value="Cari">
                </div>
                    </form>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th style="text-align:center">Nama Petugas</th>
                                <th style="text-align:center">Alamat</th>
                                <th style="text-align:center">Telepon</th>
                                <th style="text-align:center">E-mail</th>
                                <th style="text-align:center;width: 160px">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($allpetugas as $petugas)
                            <tr>
                                <td style="text-align: center">{{ $i++ }}</td>
                                <td>{{ $petugas->nama }}</td>
                                <td>{{ $petugas->alamat }}</td>
                                <td style="text-align: center">{{ $petugas->telepon }}</td>
                                <td>{{ $petugas->email }}</td>
                                <td>
                                    <a href="{{ url('/petugas/read/'.$petugas->id)}}" class="btn btn-info fa fa-eye"></a>
                                    <a href="{{ url('/petugas/edit/'.$petugas->id)}}" class="btn btn-warning fa fa-edit"></a>
                                    <a href="{{ url('/petugas/hapus/'.$petugas->id)}}" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection