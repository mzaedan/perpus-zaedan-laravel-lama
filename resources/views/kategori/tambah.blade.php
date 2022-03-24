@extends('layouts.master')

@section('konten')

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH DATA KATEGORI</strong>

                </div>
                <div style="text-align: left; margin-bottom: 15px">
                    <div class="card-body">
                    <a href="{{ url('/kategori')}}" class="btn btn-primary">Kembali</a>
                    </div>
                    
                    <form method="post" action="/kategori/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Anggota ...">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>

                        <div style="text-align: left; margin-top: 15px">
                            <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection