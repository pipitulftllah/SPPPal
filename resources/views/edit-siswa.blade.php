@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/siswa/update/{{$id}}" method="post">
                    @csrf


                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">NISN</label>
                            <input type="text" id="nama" name="nisn" class="form-control" placeholder="nisn" value="{{ $siswa->nisn }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">NIS</label>
                            <input type="text" id="nama" name="nis" class="form-control" placeholder="nis" value="{{ $siswa->nis }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="nama" value="{{ $siswa->nama }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Kelas</label>
                            <input type="text" id="nama" name="id_kelas" class="form-control" placeholder="id_kelas" value="{{ $siswa->id_kelas }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" id="nama" name="alamat" class="form-control" placeholder="alamat" value="{{ $siswa->alamat }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                            <input type="text" id="nama" name="no_telp" class="form-control" placeholder="no_telp" value="{{ $siswa->no_telp }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Spp</label>
                            <input type="text" id="nama" name="id_spp" class="form-control" placeholder="id_spp" value="{{ $siswa->id_spp }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Login</label>
                            <input type="text" id="nama" name="id_login" class="form-control" placeholder="id_login" value="{{ $siswa->id_login }}">
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        </div>
                    </form>


                        @endsection
