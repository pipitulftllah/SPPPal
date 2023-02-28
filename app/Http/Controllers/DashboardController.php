<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboard-admin');
    }

    public function index1()
    {
    	return view('dashboard-petugas');
    }

    public function index2()
    {
    	return view('dashboard-siswa');
    }
}