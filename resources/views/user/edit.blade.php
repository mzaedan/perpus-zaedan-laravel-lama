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

                    <form method="post" action="/user/update/{{ $user1->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div style="text-align:left; margin-bottom: 20px">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username .."value="{{ $user1->username }}">

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
                            <input type="text" name="password" class="form-control" placeholder="Password .."value=" {{ $user1->password }}">

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
                            <input type="text" name="id_anggota" class="form-control" placeholder="Id Anggota..."value=" {{ $user1->id_anggota }}">

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
                            <input type="text" name="id_petugas" class="form-control" placeholder="Id Petugas ..."value=" {{ $user1->id_petugas }}">

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
                            <input type="text" name="id_user_role" class="form-control" placeholder="Id User Role ..."value=" {{ $user1->id_user_role }}">

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
                            <input type="text" name="status" class="form-control" placeholder="status ..."value=" {{ $user1->status }}">

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