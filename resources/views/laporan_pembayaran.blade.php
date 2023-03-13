@extends('welcome')

@section('content')
    <br>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Laporan Pembayaran</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form action="" method="get">
                            <div class="mb-3">
                                <input type="date" name="tgl_bayar" id="" class="form-control">
                            </div>

                            <button class="btn btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Laporan Pembayaran</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="d-flex justify-content-end">
                            @if (isset($_GET['tgl_bayar']))
                                <a href="{{ route('pembayaran.cetak-laporan-pembayaran', ['tgl_bayar'=>$_GET['tgl_bayar']]) }}"  target="_blank" class="btn btn-success">cetak</a>

                            @else
                            <a href="{{ route('pembayaran.cetak-laporan-pembayaran', ['tgl_bayar'=>'all']) }}"  target="_blank" class="btn btn-success">cetak</a>

                            @endif
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Siswa</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kelas</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nisn</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal Bayar</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Petugas</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Untuk Bulan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Untuk Tahun</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nominal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($pembayaran as $get)
                                        <tr>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-sm font-weight-bold mb-0">{{ $get->id_pembayaran }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="text-sm font-weight-bold mb-0">{{ !is_null($get->siswa) ? $get->siswa->nama : '' }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="text-sm font-weight-bold mb-0">{{ !is_null($get->siswa) ? $get->siswa->kelas->nama_kelas : '' }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-sm font-weight-bold mb-0">{{ $get->nisn }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-sm font-weight-bold mb-0">{{ $get->tgl_bayar }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-sm font-weight-bold mb-0">{{ $get->petugas->name }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-sm font-weight-bold mb-0">{{ $get->bulan_dibayar }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-sm font-weight-bold mb-0">{{ $get->tahun_dibayar }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-sm font-weight-bold mb-0">Rp. {{ number_format($get->jumlah_bayar, 0, ',', '.') }}</span>
                                            </td>


                                            <td>
                                                <a href="{{ route('pembayaran.cetak-pdf', ['id' => $get->id_pembayaran]) }}"
                                                    target="_blank" class="btn btn-warning">Cetak</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
