<?php

namespace App\Http\Controllers;
use App\Models\Checkout;
use App\Models\Orders;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShopController extends Controller
{
    //
    public function index($checkout_id){
        $checkout = Checkout::find($checkout_id);
        $pesan = DB::table('checkout')
        ->select('customer.nama as namacustomer','customer.*','checkout.*')
        ->join('customer', 'checkout.customer_id','=','customer.customer_id')
        ->join('produk', 'produk.produk_id','=','checkout.produk_id')
        ->where('customer.customer_id','=',1)
        ->get();
        return view('shop',compact('pesan'));
    }

    public function delete($checkout_id){
        $delete = Checkout::find($checkout_id);
        if( $delete->delete()){
           return redirect()->back();
        }
  
    }

    public function store(Request $request){
        //                

        $checkout = Checkout::where('customer_id',1)->get();

        $temp = 0;
        foreach($checkout as $checkouts){
            $temp = $temp + $checkouts->total_detail;
        }
        $pemesanan= new Orders();
        $pemesanan->customer_id =  1;
        $pemesanan->admin_id =  1;
        $pemesanan->total = $temp;
        $pemesanan->keterangan = "Verifikasi";
        $file = $pemesanan->bukti_bayar;

        if ($request->hasFile('bukti_bayar')){
            $file= $request->file('bukti_bayar')->getClientOriginalName();
            $request->file('bukti_bayar')->move('buktibayar',$file);
            $pemesanan->bukti_bayar = $file;
        } 
        if( $pemesanan->save()){
            
            foreach($checkout as $checkouts){
                $orderdetail = new Orderdetail();
                $orderdetail->jumlah= $checkouts->jumlah;
                $orderdetail->total_detail = $checkouts->total_detail;
                $orderdetail->produk_id = $checkouts->produk_id;
                $orderdetail->orders_id = $pemesanan->orders_id;
                $orderdetail->save();

            }  
            
            $deletecheckout = Checkout::where('customer_id',1);
            if( $deletecheckout->delete()){
            }
    }
        return redirect()->back();

    }
}
