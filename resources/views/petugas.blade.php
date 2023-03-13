@extends('welcome')

@section('content')


<br>

<div class="container-fluid py-4">
<a href="/petugas/create"class="btn btn-success">+ Tambah Petugas</a>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Petugas</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id petugas</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">username</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama petugas</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id login</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">level</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($petugas as $get)
                        <tr>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->id_petugas }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->username }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->nama_petugas }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->id_login }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->level }}</span>
                            </td>
                            <td>
                                <a href="/petugas/edit/{{ $get->id_petugas}}"class="btn btn-info">Edit</a>
                                <a href="/petugas/delete/{{ $get->id_petugas}}"class="btn btn-danger">Hapus</a>
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
