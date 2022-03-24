<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data Penulis</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <strong>EDIT DATA PENULIS</strong>
                </div>
                <div class="card-body">
                    <a href="{{ url('/penulis')}}" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="{{ url('/penulis/update/'.$penulis->id) }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                    <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Penerbit .."value="{{ $penulis->nama }}">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat Penerbit .."value=" {{ $penulis->alamat }}">

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" name="telepon" class="form-control" placeholder="Telepon Penerbit.."value=" {{ $penulis->telepon }}">

                             @if($errors->has('telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('telepon')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail Penerbit .."value=" {{ $penulis->telepon }}">

                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>