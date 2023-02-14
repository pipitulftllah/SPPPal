@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/siswa/update/{{$id}}" method="post">
                    @csrf


                        <div class="form-group">
                            <input type="text" id="nama" name="nisn" class="form-control" placeholder="nisn">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="nis" class="form-control" placeholder="nis">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="nama">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="id_kelas" class="form-control" placeholder="id_kelas">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="alamat" class="form-control" placeholder="alamat">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="no_telp" class="form-control" placeholder="no_telp">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="id_spp" class="form-control" placeholder="id_spp">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="id_login" class="form-control" placeholder="id_login">
                        </div>

                        <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                        </div>
                    </form>


                        @endsection
