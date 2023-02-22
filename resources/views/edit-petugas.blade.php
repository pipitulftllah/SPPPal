@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/petugas/update/{{$id}}" method="post">
                    @csrf

                    <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" id="nama" name="username" class="form-control" placeholder="username" value="{{ $petugas->username }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text" id="nama" name="password" class="form-control" placeholder="password" value="{{ $petugas->password }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                            <input type="text" id="nama" name="nama_petugas" class="form-control" placeholder="nama_petugas" value="{{ $petugas->nama_petugas }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Level</label>
                            <select class="form-select" name="level" aria-label="Default select example">
                            <option selected>Level</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                           </select>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Login</label>
                            <input type="text" id="nama" name="id_login" class="form-control" placeholder="id_login" value="{{ $petugas->id_login }}">

                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        </div>
                    </form>


                        @endsection
