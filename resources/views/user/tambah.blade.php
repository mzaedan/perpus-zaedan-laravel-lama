@extends('layouts.master')
@section('konten')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>EDIT DATA USER</strong>

                </div>
                <div class="card-body">
                    <a href="{{ url('/user')}}" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/user/store">

                        {{ csrf_field() }}

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan username ..">

                            @if($errors->has('username'))
                                <div class="text-danger">
                                    {{ $errors->first('username')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align:left; margin-bottom: 20px">  
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Masukan Password.."></textarea>

                             @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Id Anggota</label>
                            <input type="text" name="id_anggota" class="form-control" placeholder="Id Anggota ..">

                            @if($errors->has('id_anggota'))
                                <div class="text-danger">
                                    {{ $errors->first('id_anggota')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Id Petugas</label>
                            <input type="text" name="id_petugas" class="form-control" placeholder="Id Petugas ..">

                            @if($errors->has('id_petugas'))
                                <div class="text-danger">
                                    {{ $errors->first('id_petugas')}}
                                </div>
                            @endif
                        </div>
                    </div>

                         <div style="text-align:left; margin-bottom: 20px">
                         <div class="form-group">
                            <label>Id User Role</label>
                            <input type="text" name="id_user_role" class="form-control" placeholder="Id User Role ..">

                            @if($errors->has('id_user_role'))
                                <div class="text-danger">
                                    {{ $errors->first('id_user_role')}}
                                </div>
                            @endif
                        </div>
                    </div>

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" placeholder="Status ..">

                            @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
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