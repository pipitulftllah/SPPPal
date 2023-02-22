@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/pembayaran/store" method="post">
                    @csrf


                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Pembayaran</label>
                            <input type="text" id="nama" name="id_pembayaran" class="form-control" placeholder="id_pembayaran">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Petugas</label>
                            <input type="text" id="nama" name="id_petugas" class="form-control" placeholder="id_petugas">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">NISN</label>
                            <input type="text" id="nama" name="nisn" class="form-control" placeholder="nisn">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Bayar</label>
                            <input type="text" id="nama" name="tgl_bayar" class="form-control" placeholder="tgl_bayar">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Bulan Dibayar</label>
                            <input type="text" id="nama" name="bulan_dibayar" class="form-control" placeholder="bulan_dibayar">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Tahun Dibayar</label>
                            <input type="text" id="nama" name="tahun_dibayar" class="form-control" placeholder="tahun_dibayar">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Spp</label>
                            <input type="text" id="nama" name="id_spp" class="form-control" placeholder="id_spp">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Bayar</label>
                            <input type="text" id="nama" name="jumlah_bayar" class="form-control" placeholder="jumlah_bayar">
                        </div>

                        <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                        </div>
                    </form>


                        @endsection
