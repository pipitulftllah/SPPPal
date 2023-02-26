@extends('welcome')

@section('content')


<br>

<a href="/pembayaran-spp/create"class="btn btn-success">+ Tambah Data</a>
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
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Siswa</th>        
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nisn</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nis</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Detail</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($siswa as $get)
                        <tr>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->nama }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->nisn }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->nis }}</span>
                            </td>

                            @foreach($kelas as $get)
              
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->nama_kelas }}</span>
                            </td>
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
