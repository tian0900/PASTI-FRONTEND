<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    //

    public function index($produk_id){
        $produks = Produk::find($produk_id);
        return view('pesanan',compact('produks'));
    }
}
