<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SppController extends Controller
{
    public function index(){
        $spp = DB::select('select * from spp');
        return view('spp',['spp' => $spp]);
    }

    public function create(Request $request)
    {

        return view('tambah-spp');
    }

    public function store(Request $request)
    {
        DB::table('spp')->insert([
            'id_spp' => $request->id_spp,
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);
        return redirect('/spp');
    }



    public function edit(Request $request, $id)
    {
        return view('edit-spp',['id'=>$id]);
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        DB::table('spp')->where('id_spp' , $id)->update([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);
        return redirect('/spp');
    }

    public function delete($id)
    {
        DB::table('spp')->where('id_spp', $id)->delete();
        return redirect('/spp');
    }
}
