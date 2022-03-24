@extends('layouts.master')

@section('konten')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <strong>EDIT DATA KATEGORI</strong>
                </div>

                <div class="card-body">
                    <div style="text-align: left; margin-bottom: :25px">
                    <a href="{{ url('/kategori')}}" class="btn btn-primary">Kembali</a>
                    </div>

                    <form method="post" action="/kategori/update/{{ $kategori->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div style="text-align: left; margin-bottom: 10px">
                        <label>Penerbit</label>
                        <select class="form-select" aria-label="Default select example">
                            <label>Penerbit</label>
                            <option selected>Pilih Kategori</option>
                            <option value="1">Novel</option>
                            <option value="2">Pendidikan</option>
                            <option value="3">Dongeng</option>
                            <option value="4">Ensiklopedi</option>
                            <option value="5">Komik</option>
                        </select>

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
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection