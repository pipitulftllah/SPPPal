@extends('welcome')

@section('content')


<br>

<a href="/siswa"class="btn btn-success">+ Tambah Data</a>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pembayaran</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id_pembayaran</th>                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nisn</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tgl_bayar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">bulan_dibayar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tahun_dibayar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id_spp</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jumlah_bayar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($pembayaran as $get)
                        <tr>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->id_pembayaran }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->nisn }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->tgl_bayar }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->bulan_dibayar }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->tahun_dibayar }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->id_spp }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->jumlah_bayar }}</span>
                            </td>
                            <td>
                                <a href="/pembayaran/edit/{{ $get->id_pembayaran}}"class="btn btn-info">Edit</a>
                                <a href="/pembayaran/delete/{{ $get->id_pembayaran}}"class="btn btn-danger">Hapus</a>
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

@endsection
