@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/petugas/store" method="post">
                    @csrf


                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Petugas</label>
                            <input type="text" id="nama" name="id_petugas" class="form-control" placeholder="id_petugas">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" id="nama" name="username" class="form-control" placeholder="username">
                        </div>


                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                            <input type="text" id="nama" name="nama_petugas" class="form-control" placeholder="nama_petugas">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Level</label>
                        <select class="form-select" name="level" aria-label="Default select example">
                        <option selected>Level</option>
                        <option value="admin">admin</option>
                        <option value="petugas">petugas</option>
                        </select>
                        </div>

                        <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                        </div>
                    </form>

                        @endsection
