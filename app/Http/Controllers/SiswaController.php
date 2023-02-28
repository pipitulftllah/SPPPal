<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class SiswaController extends Controller
{
    public function index(){
        $siswa = DB::select('select * from siswa');
        return view('siswa',['siswa' => $siswa]);
    }

    public function bayar($id)
    {
        $siswa = DB::table('siswa')->where('nisn',$id)->first();
        return view('siswa-bayar',['siswa'=>$siswa]);
    }
    
    public function prosesBayar(Request $request,$id)
    {
        
        $siswa = DB::table('siswa')->where('nisn',$id)->first();
        $spp = DB::table('spp')->where('tahun',$request->tahun_dibayar)->first();

        
    
        foreach ($request->bulan_dibayar as $key => $value) {
        // dd($value);            
        DB::table('pembayaran')->insert([
           
            'id_petugas' => Auth::user()->id,
            'nisn' => $siswa->nisn,
            'tgl_bayar' => Carbon::now(),
            'bulan_dibayar' => $value,
            'tahun_dibayar' => $request->tahun_dibayar,
            'id_spp' => $spp->id_spp,
            'jumlah_bayar' => $spp->nominal,
        ]);

        }

        return redirect()->back();
    }

    public function create(Request $request)
    {

        return view('tambah-siswa');
    }

    public function store(Request $request)
    {
        DB::table('siswa')->insert([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
            'id_login' => $request->id_login
        ]);
        return redirect('/siswa');
    }



    public function edit(Request $request, $id)
    {   $siswa = DB::table('siswa')->where('nisn',$id)->first();
        return view('edit-siswa',['id'=>$id,
        'siswa' => $siswa
    ]);
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        DB::table('siswa')->where('nisn' , $id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
            'id_login' => $request->id_login
        ]);
        return redirect('/siswa');
    }

    public function delete($id)
    {
        DB::table('siswa')->where('nisn', $id)->delete();
        return redirect('/siswa');
    }
}
