<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DaftarpemesananController extends Controller
{
    //
    public function index(){
        $order = DB::table('orders')
        ->join('customer', 'orders.customer_id','=','customer.customer_id')
        ->get();
        return view('admin.daftarpemesanan',compact('order'));
    }
}
