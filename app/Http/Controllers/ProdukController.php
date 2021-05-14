<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    //galeri = DB::table('galeri')->paginate(15);
    public function index(Request $request){
        if ($request ->has('cari')) {
            $produk = Produk::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $produk = DB::table('produk')->get();
        }
        return view('produk',['produk' =>$produk]);
    }
}
