@extends('welcome')

@section('content')

<div class="content">
<div class="container-fluid py-4">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/petugas/update/{{$id}}" method="post">
                    @csrf

                    <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" id="nama" name="username" class="form-control" placeholder="username" value="{{ $petugas->username }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                            <input type="text" id="nama" name="nama_petugas" class="form-control" placeholder="nama_petugas" value="{{ $petugas->nama_petugas }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Level</label>
                            <input type="text" id="nama" name="level" class="form-control" placeholder="level" value="{{ $petugas->level }}">
                        </div>


                        <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        </div>
                    </form>


                        @endsection
