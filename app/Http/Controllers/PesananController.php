<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PesananController extends Controller
{
    //

    public function index($produk_id){
        // $produks = Produk::find($produk_id);
        // return view('pesanan',compact('produks'));
        $produk = Http::get("http://localhost:8080/api/produks/$produk_id");
        return view('pesanan',['produk' =>json_decode($produk)]);
    }

    public function store(Request $request){
        $checkout = new  Checkout();
        $checkout->produk_id = $request->produk_id;
        $checkout->jumlah = $request->jumlah;
        $checkout->total_detail = $request->jumlah * $request->harga;
        $checkout->user_id = auth()->id();
        $checkout->save();

        return redirect()->back();
    }
}
