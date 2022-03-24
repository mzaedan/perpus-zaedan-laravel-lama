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

                    <form method="post" action="{{ url('/peminjaman/update')}}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Peminjaman .."value="{{ $peminjaman->nama }}">

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
                            <input type="text" name="id_buku" class="form-control" placeholder="Id Buku .."value="{{ $peminjaman->id_buku }}">

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
                            <input type="text" name="id_anggota" class="form-control" placeholder="Id Anggota .."value="{{ $peminjaman->id_anggota }}">

                            @if($errors->has('id_anggota'))
                                <div class="text-danger">
                                    {{ $errors->first('id_buku')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_pinjam" class="form-control" placeholder="Tanggal Peminjaman .."value="{{ $peminjaman->tanggal_pinjam }}">

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
                            <input type="date" name="tanggal_kembali" class="form-control" placeholder="Tanggal Pengembalian .."value="{{ $peminjaman->tanggal_kembali }}">

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