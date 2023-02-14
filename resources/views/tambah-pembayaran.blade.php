@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/pembayaran/store" method="post">
                    @csrf


                        <div class="form-group">
                            <input type="text" id="nama" name="id_pembayaran" class="form-control" placeholder="id_pembayaran">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="id_petugas" class="form-control" placeholder="id_petugas">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="nisn" class="form-control" placeholder="nisn">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="tgl_bayar" class="form-control" placeholder="tgl_bayar">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="bulan_dibayar" class="form-control" placeholder="bulan_dibayar">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="tahun_dibayar" class="form-control" placeholder="tahun_dibayar">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="id_spp" class="form-control" placeholder="id_spp">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="jumlah_bayar" class="form-control" placeholder="jumlah_bayar">
                        </div>

                        <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                        </div>
                    </form>


                        @endsection
