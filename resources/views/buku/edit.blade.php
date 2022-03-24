@extends('layouts.master')

@section('konten')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong class="card-title">Edit Data Buku</strong>
                </div>
                <div class="card-body">
                    <a href="{{ url('/buku')}}" class="btn btn-primary">Kembali</a>

                    <div style="text-align: left; margin-bottom: 15px">
                    </div>
                    <form method="post" action="{{ url('/buku/update/'.$buku->id) }}" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div style="text-align: left; margin-bottom: 20px">
                         <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Buku .."value="{{ $buku->nama}}">

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
                            <input type="text" name="tahun_terbit" class="form-control" placeholder=" Tahun Terbit .." value="{{ $buku->tahun_terbit}}">

                             @if($errors->has('tahun_terbit'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun_terbit')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 20px">
                        <label>Penulis</label>
                        <select class="form-select" name="id_penulis" aria-label="Default select example" class="form-control" value="{{ $buku->id_penulis}}">
                            <option selected>Pilih Penulis</option>
                            @foreach($penulis as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $buku->id_penulis ? 'selected' : '' }} >{{ $data->nama }}</option>
                            @endforeach
                        </select>

                            @if($errors->has('id_penulis'))
                                <div class="text-danger">
                                    {{ $errors->first('id_penulis')}}
                                </div>
                            @endif
                    </div>


                    <div style="text-align: left; margin-bottom: 20px">
                        <label>Penerbit</label>
                        <select class="form-select" name="id_penerbit" aria-label="Default select example" value="{{ $buku->id_penerbit}}">
                            <label>Penerbit</label>
                            <option selected>Pilih Penerbit</option>
                            @foreach($penerbit as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $buku->id_penerbit ? 'selected' : '' }} >{{ $data->nama }}</option>
                            @endforeach
                        </select>

                            @if($errors->has('id_penerbit'))
                                <div class="text-danger">
                                    {{ $errors->first('id_penerbit')}}
                                </div>
                            @endif
                    </div>

                    <div style="text-align: left; margin-bottom: 20px">
                        <label>Kategori</label>
                        <select class="form-select" name="id_kategori" aria-label="Default select example" value="{{ $buku->id_kategori}}">
                            <option selected>Pilih Kategori</option>
                        @foreach($kategori as $data)
                            <option value="{{ $data->id }}" {{ $data->id == $buku->id_kategori ? 'selected' : '' }} >{{ $data->nama }}</option>
                        @endforeach
                        </select>

                            @if($errors->has('id_kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('id_kategori')}}
                                </div>
                            @endif
                    </div>

                    <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Sinopsis</label>
                            <input type="text" name="sinopsis" class="form-control" placeholder="Sinopsis .." value="{{ $buku->sinopsis}}">

                            @if($errors->has('sinopsis'))
                                <div class="text-danger">
                                    {{ $errors->first('sinopsis')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <form action="{{ url('/buku/proses')}}"method="POST" enctype="multipart/form-data">
                    <div style="text-align: left; margin-bottom: : 20px">
                        <div class="form-group">
                            <label>Upload Foto Sampul</label>
                            <input type="file" name="sampul" value="{{ $buku->sampul}}" class="form-control">
                        </div>
                    
                            @if($errors->has('sampul'))
                                <div class="text-danger">
                                    {{ $errors->first('sampul')}}
                                </div>
                            @endif
                    </div>

                    <form action="{{ url('/buku/proses')}}"method="POST" enctype="multipart/form-data">
                        <div style="text-align: left; margin-top: 20px">
                        <div class="form-group">
                            <label>Upload File Berkas</label>
                            <input type="file" name="berkas" value="{{ $buku->berkas}}" class="form-control">
                        </div>


                            @if($errors->has('berkas'))
                                <div class="text-danger">
                                    {{ $errors->first('berkas')}}
                                </div>
                            @endif
                        </input>

                        <input type="submit" value="Upload" class="btn btn-primary" style="margin-top: 15px">

                        <div style="text-align: left; margin-top: 15px">
                            <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </div>
                </form>
            </form>
        </div>
    </div>
</div>
@endsection
