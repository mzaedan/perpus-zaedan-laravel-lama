@extends('layouts.master')
@section('konten')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong class="card-title md-5">Daftar User</strong>
                </div>
                <div class="card-body">
                <a href="{{ url('/user/tambah')}}" class="btn btn-primary fa fa-plus">Tambah Data User</a>
                <a href="{{ url('/user/export-pdf')}}" class="btn btn-danger fa fa-file-pdf" target="_blank">CETAK PDF</a>
                <a href="{{ url('/user/export-excel')}}" class="btn btn-success my-3 fa fa-file-excel" target="_blank">EXPORT EXCEL</a>


                <div class="row align-items-center">
                    <div class="col"><br/><br/>

                </div>
                <div style="text-align:right; margin-bottom: 20px">
                <form action="{{ url('/user')}}" method="GET">
                <input type="text" name="cari" placeholder="Cari User .." value="{{ old('cari') }}">
                <span class="fa fa-search"></span>
                <input type="submit" value="Cari">
                </form>
            </div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th style="text-align:center">User Name</th>
                                <th style="text-align:center">Password</th>
                                <th style="text-align:center">Anggota</th>
                                <th style="text-align:center">Petugas</th>
                                <th style="text-align:center">id_user_role</th>
                                <th style="text-align:center">status</th>
                                <th style="text-align:center;width: 170px">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($alluser as $user)
                            <tr>
                                <td th style="text-align:center">{{ @$i++ }}</td>
                                <td>{{ @$user->username }}</td>
                                <td>{{ @$user->password }}</td>
                                <td>{{ @$user->anggota->nama }}</td>
                                <td>{{ @$user->petugas->nama }}</td>
                                <td>{{ @$user->id_user_role }}</td>
                                <td>{{ @$user->status }}</td>
                                <td>
                                    <a href="{{ url('/user/read/'.$user->id)}}" class="btn btn-info fa fa-eye"></a>
                                    <a href="{{ url('/user/edit/'.$user->id)}}" class="btn btn-warning fa fa-edit"></a>
                                    <a href="{{ url('/user/hapus/'.$user->id)}}" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
