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
}
