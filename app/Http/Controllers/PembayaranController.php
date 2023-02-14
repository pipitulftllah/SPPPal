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
}
