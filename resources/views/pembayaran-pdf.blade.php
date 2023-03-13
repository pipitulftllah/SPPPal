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
        <h5>PEMBAYARAN REPORT PDF</h4>

    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Tanggal Bayar</th>
                <th>Bulan Dibayar</th>
                <th>Tahun Dibayar</th>
                <th>ID Spp</th>
                <th>Jumlah Bayar</th>
            </tr>
        </thead>
        <tbody>
    <tr>
                           <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $data->id_pembayaran }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $data->nisn }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $data->tgl_bayar }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $data->bulan_dibayar }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $data->tahun_dibayar }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $data->id_spp }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-sm font-weight-bold mb-0">{{ $data->jumlah_bayar }}</span>
                            </td>
                            
                            
    </tr>
    
    </tbody>

    </table>