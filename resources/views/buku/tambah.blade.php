@extends('layouts.master')

@section('konten')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong class="card-title">Tambah Data Buku</strong>
                </div>


                <div class="card-body">
                    <a href="{{ url('/buku')}}" class="btn btn-primary">Kembali</a>
                    <div style="text-align: left; margin-bottom: 15px">
                </div>


                    <form method="post" action="{{ url('/buku/store') }}" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Buku ..">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control" placeholder=" Tahun Terbit .."></textarea>

                             @if($errors->has('tahun_terbit'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun_terbit')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 20px">
                    <div class="form-group">
                        <label>Pilih Penulis</label>
                        <select name="id_penulis" class="form-select">
                            <option selected>Pilih Penulis</option>
                            @foreach($penulis as $data)
                           <option value="{{ $data->id }}">{{$data->nama}}</option>
                            @endforeach
                        </select>

                            @if($errors->has('id_penulis'))
                                <div class="text-danger">
                                    {{ $errors->first('id_penulis')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                        <label>Penerbit</label>
                        <select name="id_penerbit" class="form-select">
                            <option selected>Pilih Penerbit</option>
                            @foreach($penerbit as $data)
                            <option value="{{ $data->id }}">{{$data->nama}}</option>
                            @endforeach
                        </select>

                            @if($errors->has('id_penerbit'))
                                <div class="text-danger">
                                    {{ $errors->first('id_penerbit')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="id_kategori" class="form-select">
                                <option selected>Pilih Kategori</option>
                                @foreach($kategori as $data)
                                <option value="{{ $data->id }}">{{$data->nama}}</option>
                                @endforeach
                            </select>

                            @if($errors->has('id_kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('id_kategori')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Sinopsis</label>
                            <input type="text" name="sinopsis" class="form-control" placeholder="Sinopsis ..">

                            @if($errors->has('sinopsis'))
                                <div class="text-danger">
                                    {{ $errors->first('sinopsis')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <form action="{{ url('/buku/proses')}}"method="POST" enctype="multipart/form-data">
                        <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <b>Upload Foto Sampul</b>
                            <input type="file" name="sampul" class="form-control">
                        </div>

                            @if($errors->has('sampul'))
                                <div class="text-danger">
                                    {{ $errors->first('sampul')}}
                                </div>
                            @endif
                        </div>

                    <form action="{{ url('/buku/proses')}}"method="POST" enctype="multipart/form-data">
                        <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <b>Upload File Berkas</b>
                            <input type="file" name="berkas" class="form-control">
                        </div>

                            @if($errors->has('berkas'))
                                <div class="text-danger">
                                    {{ $errors->first('berkas')}}
                                </div>
                            @endif
                        </div>

                        <input type="submit" value="Upload" class="btn btn-primary" style="margin-bottom: 15px">

                    <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
