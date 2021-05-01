<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetailpemesananController extends Controller
{
    //
    public function index($orders_id){
        $orderdetail = Orderdetail::find($orders_id);
        $order = DB::table('orderdetail')
        ->join('orders', 'orders.orders_id','=','orderdetail.orders_id')
        ->join('produk', 'produk.produk_id','=','orderdetail.produk_id')
        ->get();
        return view('admin.detailpemesanan',compact('order','orderdetail'));
    }
}
