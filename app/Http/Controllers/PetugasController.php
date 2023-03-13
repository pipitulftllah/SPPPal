<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    public function index(){
        $petugas = DB::select('select * from petugas');
        return view('petugas',['petugas' => $petugas]);
    }

    public function create(Request $request)
    {

        return view('tambah-petugas');
    }

    public function store(Request $request)
    {
        DB::table('petugas')->insert([
            'id_petugas' => $request->id_petugas,
            'username' => $request->username,
            'password' => $request->password,
            'nama_petugas' => $request->nama_petugas,
            'id_login' => $request->id_login,
            'level' => $request->level,
        ]);
        return redirect('/petugas');
    }



    public function edit(Request $request, $id)
    {   $petugas = DB::table('petugas')->where('id_petugas',$id)->first();
        return view('edit-petugas',['id'=>$id,
        'petugas' => $petugas
    ]);
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        DB::table('petugas')->where('id_petugas' , $id)->update([
            'username' => $request->username,
            'password' => $request->password,
            'nama_petugas' => $request->nama_petugas,
            'id_login' => $request->id_login,
            'level' => $request->level,
        ]);
        return redirect('/petugas');
    }

    public function delete($id)
    {
        DB::table('petugas')->where('id_petugas', $id)->delete();
        return redirect('/petugas');
    }
}
