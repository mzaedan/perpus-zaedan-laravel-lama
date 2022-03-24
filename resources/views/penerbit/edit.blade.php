@extends('layouts.master')

@section('konten')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <strong>EDIT DATA ANGGOTA</strong>
                </div>
                <div class="card-body">
                    <a href="{{ url('/anggota')}}" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="{{ url('/penerbit/update/'.$penerbit->id) }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div style="text-align: left; margin-bottom: 15px">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Anggota .."value="{{ $penerbit->nama }}">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 15px">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat Anggota .."value=" {{ $penerbit->alamat }}">

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 15px">
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" name="telepon" class="form-control" placeholder="Telepon Anggota.."value=" {{ $penerbit->telepon }}">

                             @if($errors->has('telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('telepon')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 15px">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail Anggota .."value=" {{ $penerbit->telepon }}">

                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align: left; margin-bottom: 15px">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
@endsection