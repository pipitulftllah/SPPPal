<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index(){
        $pembayaran = DB::select('select * from pembayaran');
        return view('pembayaran',['pembayaran' => $pembayaran]);
    }

    public function create(Request $request)
    {

        return view('tambah-pembayaran');
    }

    public function store(Request $request)
    {
        DB::table('pembayaran')->insert([
            'id_pembayaran' => $request->id_pembayaran,
            'id_petugas' => $request->id_petugas,
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
    {
        return view('edit-pembayaran',['id'=>$id]);
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        DB::table('pembayaran')->where('nisn' , $id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
            'id_login' => $request->id_login,
        ]);
        return redirect('/pembayaran');
    }

    public function delete($id)
    {
        DB::table('pembayaran')->where('id_pembayaran', $id)->delete();
        return redirect('/pembayaran');
    }
}
