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
        </div>
        <div>
            {{-- <h3>SMKN 4 KOTA BOGOR</h3> --}}
        </div>
        <div></div>
    </div>
    <center>
        <h5>PEMBAYARAN REPORT PDF</h4>

    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>ID Pembayaran</th>
                <th>NISN</th>
                <th>Tanggal Bayar</th>
                <th>Bulan Dibayar</th>
                <th>Tahun Dibayar</th>
                <th>Jumlah Bayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id_pembayaran}}</td>
                <td>{{$item->nisn}}</td>
                <td>{{$item->tgl_bayar}}</td>
                <td>{{$item->bulan_dibayar}}</td>
                <td>{{$item->tahun_dibayar}}</td>
                <td>{{$item->jumlah_bayar}}</td>
            </tr>

            @endforeach
    </tbody>

    </table>
