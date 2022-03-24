@extends('layouts.master')

@section('konten')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>EDIT DATA PEMINJAMAN</strong>

                </div>
                <div class="card-body">
                    <a href="{{ url('/peminjaman')}}" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="{{ url('/peminjaman/store')}}">

                        {{ csrf_field() }}

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Peminjam..">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Id Buku</label>
                            <input type="text" name="id_buku" class="form-control" placeholder="Id Buku..."></textarea>

                             @if($errors->has('id_buku'))
                                <div class="text-danger">
                                    {{ $errors->first('id_buku')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Id Anggota</label>
                            <input type="text" name="id_anggota" class="form-control" placeholder="Id Anggota...">

                            @if($errors->has('id_anggota'))
                                <div class="text-danger">
                                    {{ $errors->first('id_anggota')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_pinjam" class="form-control" placeholder="Tanggal Peminjaman ...">

                            @if($errors->has('tanggal_pinjam'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_pinjam')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_kembali" class="form-control" placeholder="Tanggal Pengembalian ...">

                            @if($errors->has('tanggal_kembali'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_kembali')}}
                                </div>
                            @endif
                        </div>
                    </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                     </form>
                </div>
            </div>
        </div>
@endsection