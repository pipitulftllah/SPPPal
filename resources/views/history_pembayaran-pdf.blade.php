<!DOCTYPE html>
<html>

<head>
    <title>CETAK PEMBAYARAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>

    <div style="display: flex;justify-content:space-between;flex-direction:row;">
        <div>
            <img class="mb-4" src="https://smkn4bogor.sch.id/assets/dist/img/logoSMKN4.svg"
            alt="" width="72" height="65">
        </div>
        <div>
            {{-- <h3>SMKN 4 KOTA BOGOR</h3> --}}
        </div>
        <div></div>
    </div>
    <center>
        <h5>History Pembayaran REPORT PDF</h4>

    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>NISN</th>
                <th>Tanggal Bayar</th>
                <th>Nama Petugas</th>
                <th>Untuk Bulan</th>
                <th>Untuk Tahun</th>
                <th>Nominal</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pembayaran as $data)
    <tr>
        <td>{{$data->id_pembayaran}}</td>
        <td>{{$data->siswa->nama}}</td>
        <td>{{$data->siswa->kelas->nama_kelas}}</td>
        <td>{{$data->nisn}}</td>
        <td>{{$data->tgl_bayar}}</td>
        <td>{{$data->petugas->name}}</td>
        <td>{{$data->bulan_dibayar}}</td>
        <td>{{$data->tahun_dibayar}}</td>
        <td>{{$data->jumlah_bayar}}</td>
    </tr>
    @endforeach
    
    </tbody>

    </table>