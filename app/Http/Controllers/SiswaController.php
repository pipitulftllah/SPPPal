<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){
        $siswa = DB::select('select * from siswa');
        return view('siswa',['siswa' => $siswa]);
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
            'id_login' => $request->id_login,
        ]);
        return redirect('/siswa');
    }



    public function edit(Request $request, $id)
    {
        return view('edit-siswa',['id'=>$id]);
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
            'id_login' => $request->id_login,
        ]);
        return redirect('/siswa');
    }

    public function delete($id)
    {
        DB::table('siswa')->where('nisn', $id)->delete();
        return redirect('/siswa');
    }
}
