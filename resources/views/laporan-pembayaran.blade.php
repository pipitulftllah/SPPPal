@extends('welcome')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('laporan.index') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="tgl_bayar" class="form-label">Tanggal Bayar</label>
                            <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar"
                                placeholder="isi tgl_bayar">
</div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>






    @if ($method == 'POST')
        <div class="container-fluid py-4">

            {{-- @if (Session::has('message'))
            <br>
            <div class="alert alert-{{ session('status') }} text-white">
                {{ session('message') }}
            </div>
        @endif --}}
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Pembayaran table</h6>
                        </div>
                        <div class="d-flex justify-content-end me-5">
                            <a href="{{ route('laporan.cetak-pdf', [ 'tgl_bayar' => $tgl_bayar]) }}"
                                target="_blank" class="btn btn-danger">Cetak</a>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                NO PEMBAYARAN</th>
                                            
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                NAMA SISWA</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                TGL AWAL</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                TGL AKHIR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="align-middle ">
                                                    <span class="text-secondary text-xs ms-3 font-weight-bold">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#datakaryawan"
                                                            data-id="{{ $item->id_pembayaran }}">
                                                            {{ $item->id_pembayaran }}
                                                        </button>
                                                    </span>
                                                </td>
                                            
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $item->siswa->nama }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $item->tgl_bayar }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $item->tgl_bayar }}</span>
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

    @endif
@endsection
