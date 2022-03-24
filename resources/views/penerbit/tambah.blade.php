
@extends ('layouts.master')

@section ('konten')

        <div class="container">
            <div class="card card-default">
                <div class="card-header text-center">
                    <strong>EDIT DATA PENERBIT</strong>

                </div>
                <div class="card-body">
                    <div style="text-align: left; margin-bottom: 15px">
                    <a href="{{ url('/penerbit')}}" class="btn btn-primary">Kembali</a>
                </div>
                    
                    <form method="post" action="{{ url('/penerbit/store') }}">

                        {{ csrf_field() }}

                        <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Penerbit ..">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat Penerbit.."></textarea>

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" name="telepon" class="form-control" placeholder="Telepon ..">

                            @if($errors->has('telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('telepon')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail Penerbit ..">

                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
                        </div>
                    </div>

                     <div style="text-align: left; margin-bottom: 20px">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
@endsection