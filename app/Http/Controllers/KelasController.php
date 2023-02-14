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
}
