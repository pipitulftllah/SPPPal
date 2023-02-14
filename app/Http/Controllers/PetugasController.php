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
}
