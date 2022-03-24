
@extends ('layouts.master')

@section('konten')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>Daftar Anggota</strong>
                </div>
                <div class="card-body">
                <a href="{{ url('/anggota/tambah')}}" class="btn btn-primary fa fa-plus">Tambah Data Anggota</a>
                <a href="{{ url('/anggota/export-pdf')}}" class="btn btn-danger fa fa-file-pdf" target="_blank">CETAK PDF</a>
                <a href="{{ url('/anggota/export-excel')}}" class="btn btn-success my-3 fa fa-file-excel" target="_blank">EXPORT EXCEL</a>


                <div class="row align-items-center">
                    <div class="col"><br/><br/>

                </div>
                <div style="text-align:right; margin-bottom: 30px">
                    <form action="{{ url('/anggota')}}" method="GET">
                    <input type="text" name="cari" placeholder="Cari Anggota.." value="{{ old('cari') }}">
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
                                <th style="text-align:center">Nama</th>
                                <th style="text-align:center">Alamat</th>
                                <th style="text-align:center">Telepon</th>
                                <th style="text-align:center">E-mail</th>
                                <th style="text-align:center">Status Aktif</th>
                                <th style="text-align:center;width: 160px">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($allanggota as $anggota)
                            <tr>
                                <td style="text-align: center">{{ @$i++ }}</td>
                                <td>{{ @$anggota->nama }}</td>
                                <td>{{ @$anggota->alamat }}</td>
                                <td style="text-align: center">{{ @$anggota->telepon }}</td>
                                <td>{{ @$anggota->email }}</td>
                                <td style="text-align: center">{{ @$anggota->status_aktif }}</td>
                                <td>
                                    <a href="{{ url('/anggota/read/'.$anggota->id)}}" button type="button" class="btn btn-info fa fa-eye"></a>
                                    <a href="{{ url('/anggota/edit/'.$anggota->id)}}" class="btn btn-warning fa fa-edit"></a>
                                    <a href="{{ url('/anggota/hapus/'.$anggota->id)}}" class="btn btn-danger fa fa-trash"></a>
                                    <br/>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection