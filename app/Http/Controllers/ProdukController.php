<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    //galeri = DB::table('galeri')->paginate(15);
    public function index(){
        $produk = DB::table('produk')->paginate(15);
        return view('produk',['produk' =>$produk]);
    }
}
