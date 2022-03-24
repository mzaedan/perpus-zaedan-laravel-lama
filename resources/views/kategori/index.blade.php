
@extends ('layouts.master')

@section('konten')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong class="card-title md-5">Daftar Kategori Buku</strong>
                </div>
                <div class="card-body">
                <a href="{{ url('/kategori/tambah')}}" class="btn btn-primary fa fa-plus">Tambah Data Kategori</a>
                <a href="{{ url('/kategori/export-pdf')}}" class="btn btn-danger fa fa-file-pdf" target="_blank">CETAK PDF</a>
                <a href="{{ url('/kategori/export-excel')}}" class="btn btn-success my-3 fa fa-file-excel" target="_blank">EXPORT EXCEL</a>

                </div>
                <div style="text-align:right; margin-bottom: 25px">
                <form action="{{ url('/kategori')}}" method="GET">
                    <input type="text" name="cari" placeholder="Cari Kategori.." value="{{ old('cari') }}">
                    <input type="submit" value="Cari">
                </form>
                </div>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                            <th style="text-align:center; width:40px">No</th>
                            <th style="text-align:center; width: 100px">Kategori Buku</th>
                            <th style="text-align:center; width: 50px">Jumlah Buku</th>
                            <th style="text-align:center; width:80px">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($allkategori as $kategori)
                            <tr>
                                <td style="text-align: center">{{ $i++ }}</td>
                                <td>{{ $kategori->nama }}</td>
                                <td style="text-align: center">{{ $kategori->getJumlahBuku() }}</td>
                                <td style="text-align: center">
                                    <a href="{{ url('/kategori/read/'.$kategori->id)}}" button type="button" class="btn btn-info fa fa-eye"></a>
                                    <a href="{{ url('/kategori/edit/'.$kategori->id)}}" class="btn btn-warning fa fa-edit"></a>
                                    <a href="{{ url('/kategori/hapus/'.$kategori->id)}}" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
