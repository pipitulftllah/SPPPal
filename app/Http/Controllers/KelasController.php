<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index(){
        $kelas = DB::select('select * from kelas');
        return view('kelas',['kelas' => $kelas]);
    }

    public function create(Request $request)
    {

        return view('tambah-kelas');
    }

    public function store(Request $request)
    {
        DB::table('kelas')->insert([
            'id_kelas' => $request->id_kelas,
            'nama_kelas' => $request->nama_kelas,
            'id_kk' => $request->id_kk,
        ]);
        return redirect('/kelas');
    }



    public function edit(Request $request, $id)
    {
        return view('edit-kelas',['id'=>$id]);
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        DB::table('kelas')->where('id_kelas' , $id)->update([
            'nama_kelas' => $request->nama_kelas,
            'id_kk' => $request->id_kk,
        ]);
        return redirect('/kelas');
    }

    public function delete($id)
    {
        DB::table('kelas')->where('id_kelas', $id)->delete();
        return redirect('/kelas');
    }
}
