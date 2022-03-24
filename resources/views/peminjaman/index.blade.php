@extends('layouts.master')

@section('konten')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong class="card-title md-5">Daftar Peminjaman</strong>
                </div>
                <div class="card-body">
                <a href="{{ url('/peminjaman/tambah')}}" class="btn btn-primary fa fa-plus">Masukan Data Anda</a>
                <a href="{{ url('/peminjaman/export-pdf')}}" class="btn btn-danger fa fa-file-pdf" target="_blank">CETAK PDF</a>
                <a href="{{ url('/peminjaman/export-excel')}}" class="btn btn-success my-3 fa fa-file-excel" target="_blank">EXPORT EXCEL</a>


                <div class="row align-items-center">
                    <div class="col"><br/><br/>

                </div>
                <div style="text-align:right; margin-bottom: 30px">
                <form action="{{ url('/peminjaman')}}" method="GET">
                <input type="text" name="cari" placeholder="Cari buku .." value="{{ old('cari') }}">
                <span class="fa fa-search"></span>
                <input type="submit" value="Cari">
                </form>
                </div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th style="text-align:center; width: 180px">Nama Peminjam</th>
                                <th style="text-align:center">Buku</th>
                                <th style="text-align:center">Anggota</th>
                                <th style="text-align:center">Tanggal Pinjam</th>
                                <th style="text-align:center">Tanggal Kembali</th>
                                <th style="text-align:center; width: 180px">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($allpeminjaman as $peminjaman)
                            <tr>
                                <td style="text-align: center">{{ @$i++ }}</td>
                                <td>{{ @$peminjaman->nama }}</td>
                                <td>{{ @$peminjaman->id_buku }}</td>
                                <td>{{ @$peminjaman->id_anggota }}</td>
                                <td>{{ @$peminjaman->tanggal_pinjam }}</td>
                                <td>{{ @$peminjaman->tanggal_kembali }}</td>
                                <td>
                                    <a href="{{ url('/peminjaman/read/'.$peminjaman->id)}}" class="btn btn-info fa fa-eye"></a>
                                    <a href="{{ url('/peminjaman/edit/'.$peminjaman->id)}}" class="btn btn-warning fa fa-edit"></a>
                                    <a href="{{ url('/peminjaman/hapus/'.$peminjaman->id)}}" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection