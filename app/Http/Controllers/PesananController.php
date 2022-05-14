<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Checkout;
use App\Models\Keranjang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PesananController extends Controller
{
    //

    public function index($produk_id)
    {
        // $produks = Produk::find($produk_id);
        // return view('pesanan',compact('produks'));
        $produk = Http::get("http://localhost:8080/api/produks/$produk_id");
        return view('pesanan', ['produk' => json_decode($produk)]);
    }

    public function store(Request $request)
    {
        Http::post("http://localhost:8080/api/keranjangs", [
            'id_customer' => session('user_id'),
            'id_produk' => $request->produk_id,
            'harga' => $request->harga,
            'stok' => $request->jumlah,
        ]);
        Http::put("http://localhost:8080/api/produks/stok/$request->produk_id", [
            'id_produk' => $request->produk_id,
            'kuantitas' => $request->jumlah,
        ]);

        return redirect()->back();
    }
}
