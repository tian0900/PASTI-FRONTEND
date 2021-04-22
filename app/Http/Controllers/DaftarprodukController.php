<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarprodukController extends Controller
{
    //
    public function index(){
        return view('admin.daftarproduk');
    }
    public function tambah(){
        return view('admin.tambahproduk');
    }
}
