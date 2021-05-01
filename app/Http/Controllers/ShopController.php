<?php

namespace App\Http\Controllers;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShopController extends Controller
{
    //
    public function index($checkout_id){
        $checkout = Checkout::find($checkout_id);
        $pesan = DB::table('checkout')
        ->join('customer', 'checkout.customer_id','=','customer.customer_id')
        ->join('produk', 'produk.produk_id','=','checkout.produk_id')
        ->where('customer.customer_id','=',1)
        ->get();
        return view('shop',compact('pesan'));
    }
}
