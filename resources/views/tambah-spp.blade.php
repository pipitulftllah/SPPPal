@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/spp/store" method="post">
                    @csrf


                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Spp</label>
                            <input type="text" id="nama" name="id_spp" class="form-control" placeholder="id_spp">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Tahun</label>
                            <input type="text" id="nama" name="tahun" class="form-control" placeholder="tahun">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nominal</label>
                            <input type="text" id="nama" name="nominal" class="form-control" placeholder="nominal">

                        </div>

                        <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                        </div>
                    </form>


                        @endsection
