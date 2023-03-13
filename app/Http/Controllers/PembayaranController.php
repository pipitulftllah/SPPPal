<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\{Pembayaran};

class PembayaranController extends Controller
{
    public function index(){
        $pembayaran = Pembayaran::all();
        return view('pembayaran',['pembayaran' => $pembayaran]);
    }

    public function index1(){
        $pembayaran = Pembayaran::all();
        return view('history_pembayaran',['pembayaran' => $pembayaran]);
    }



    public function laporan()
    {
        return view('laporan');
    }

    public function history_pembayaran(Request $request, $id)
    {

        $data = Pembayaran::where('id_pembayaran', $id)->get();

        $pdf = PDF::loadview('history_pembayaran-pdf',['data'=> $data]);
        return $pdf->stream();
    }



    public function create(Request $request)
    {

        return view('tambah-pembayaran');
    }

    public function store(Request $request)
    {
        DB::table('pembayaran')->insert([
            'id_pembayaran' => $request->id_pembayaran,
            'nisn' => $request->nisn,
            'tgl_bayar' => $request->tgl_bayar,
            'bulan_dibayar' => $request->bulan_dibayar,
            'tahun_dibayar' => $request->tahun_dibayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);
        return redirect('/pembayaran');
    }



    public function edit(Request $request, $id)
    {   $pembayaran = DB::table('pembayaran')->where('id_pembayaran',$id)->first();
        return view('edit-pembayaran',['id'=>$id,
        'pembayaran' => $pembayaran
    ]);
    }



    public function update(Request $request, $id)
    {
        // dd($request->all());
        DB::table('pembayaran')->where('id_pembayaran' , $id)->update([
            'nisn' => $request->nisn,
            'tgl_bayar' => $request->tgl_bayar,
            'bulan_dibayar' => $request->bulan_dibayar,
            'tahun_dibayar' => $request->tahun_dibayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);
        return redirect('/pembayaran');
    }

    public function delete($id)
    {
        DB::table('pembayaran')->where('id_pembayaran', $id)->delete();
        return redirect('/pembayaran');
    }

    public function cetakPdf($id)
    {

        $data = Pembayaran::where('id_pembayaran', $id)->first();

        $pdf = PDF::loadview('pembayaran-pdf',['data'=> $data]);
        return $pdf->stream();
    }

    public function cetakPdf1($id)
    {   $data = DB::table('pembayaran')->where('id_pembayaran', $id)->first();

        $pdf = PDF::loadview('history_pembayaran-pdf',['data'=> $data]);
        return $pdf->stream();
    }

    public function cetakPdf2($id)
    {   $data = DB::table('pembayaran')->where('tgl_bayar', $id)->first();

        $pdf = PDF::loadview('laporan_pembayaran-pdf',['data'=> $data]);
        return $pdf->stream();
    }

    public function laporanPembayaran(Request $request)
    {

        if (isset($_GET['tgl_bayar'])) {
            $data = Pembayaran::where('tgl_bayar',$_GET['tgl_bayar'])->get();

        } else {
            $data = Pembayaran::get();

        }
    	return view('laporan_pembayaran',['pembayaran'=>$data]);
    }

    public function cetakLaporanPdf(Request $request,$tgl_bayar)
    {
     
        if ($tgl_bayar != 'all') {
     
            $data = Pembayaran::where('tgl_bayar',$tgl_bayar)->get();

        } else {
            $data = Pembayaran::get();

        }


        $pdf = PDF::loadview('laporan-pembayaran-pdf',['data'=> $data]);
        return $pdf->stream();

    }

}
