@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/siswa/store" method="post">
                    @csrf


                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">NISN</label>
                            <input type="text" id="nama" name="nisn" class="form-control" placeholder="nisn">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">NIS</label>
                            <input type="text" id="nama" name="nis" class="form-control" placeholder="nis">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="nama">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Kelas</label>
                            <input type="text" id="nama" name="id_kelas" class="form-control" placeholder="id_kelas">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" id="nama" name="alamat" class="form-control" placeholder="alamat">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                            <input type="text" id="nama" name="no_telp" class="form-control" placeholder="no_telp">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Spp</label>
                            <input type="text" id="nama" name="id_spp" class="form-control" placeholder="id_spp">
                        </div>


                        <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                        </div>
                    </form>


                        @endsection
