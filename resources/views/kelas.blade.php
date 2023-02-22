@extends('welcome')

@section('content')


<br>

<a href="/kelas/create"class="btn btn-success">+ Add New Data</a>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Kelas</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id_kelas</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama_kelas</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kompetensi_keahlian</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($kelas as $get)
                        <tr>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->id_kelas }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->nama_kelas }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $get->kompetensi_keahlian }}</span>
                            </td>
                            <td>
                                <a href="/kelas/edit/{{ $get->id_kelas}}"class="btn btn-info">Update</a>
                                <a href="/kelas/delete/{{ $get->id_kelas}}"class="btn btn-danger">Delete</a>
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
