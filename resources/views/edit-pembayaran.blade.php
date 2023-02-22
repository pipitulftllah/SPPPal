@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/pembayaran/update/{{$id}}" method="post">
                    @csrf


                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Pembayaran</label>
                            <input type="text" id="nama" name="id_pembayaran" class="form-control" placeholder="id_pembayaran" value="{{ $pembayaran->id_pembayaran }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Petugas</label>
                            <input type="text" id="nama" name="id_petugas" class="form-control" placeholder="id_petugas" value="{{ $pembayaran->id_petugas }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">NISN</label>
                            <input type="text" id="nama" name="nisn" class="form-control" placeholder="nisn" value="{{ $pembayaran->nisn }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Bayar</label>
                            <input type="text" id="nama" name="tgl_bayar" class="form-control" placeholder="tgl_bayar" value="{{ $pembayaran->tgl_bayar }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Bulan Dibayar</label>
                            <input type="text" id="nama" name="bulan_dibayar" class="form-control" placeholder="bulan_dibayar" value="{{ $pembayaran->bulan_dibayar }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Tahun Dibayar</label>
                            <input type="text" id="nama" name="tahun_dibayar" class="form-control" placeholder="tahun_dibayar" value="{{ $pembayaran->tahun_dibayar }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Spp</label>
                            <input type="text" id="nama" name="id_spp" class="form-control" placeholder="id_spp" value="{{ $pembayaran->id_spp }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Bayar</label>
                            <input type="text" id="nama" name="jumlah_bayar" class="form-control" placeholder="jumlah_bayar" value="{{ $pembayaran->jumlah_bayar }}">
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        </div>
                    </form>


                        @endsection
