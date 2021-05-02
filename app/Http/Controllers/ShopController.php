<?php

namespace App\Http\Controllers;
use App\Models\Checkout;
use App\Models\Orders;
use App\Models\User;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShopController extends Controller
{
    //
    public function index($checkout_id){
        $checkout = Checkout::find($checkout_id);
        $pesan = DB::table('checkout')
        ->select('users.name as namauser','users.*','checkout.*','produk.*')
        ->join('users', 'checkout.user_id','=','users.user_id')
        ->join('produk', 'produk.produk_id','=','checkout.produk_id')
        ->where('users.user_id','=',auth()->id())
        ->get();

        $bio =  Checkout::inRandomOrder()->limit(1)
        ->select('users.name as namauser','users.*','checkout.*')
        ->join('users', 'checkout.user_id','=','users.user_id')
        ->where('users.user_id','=',auth()->id())
        ->get();

        //  $joinpemesanan = DB::table('checkout')
        // ->join('checkout', 'users.user_id','=','checkout.user_id')
        // ->select(DB::raw('sum(checkout.totaldetail) as total')) 
        // ->groupBy('users.user_id')
        // ->get();
        
        if(count($pesan) == 0){
            return redirect('/');
        } else {
            
            return view('shop',compact('pesan','bio'));
        }
   
        
    }

    public function delete($checkout_id){
        $delete = Checkout::find($checkout_id);
        if( $delete->delete()){
           return redirect()->back();
        }
  
    }

    public function store(Request $request){
        //                

        $checkout = Checkout::where('user_id',auth()->id())->get();

        $temp = 0;
        foreach($checkout as $checkouts){
            $temp = $temp + $checkouts->total_detail;
        }
        $pemesanan= new Orders();
        $pemesanan->user_id = auth()->id() ;
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
            
            $deletecheckout = Checkout::where('user_id',auth()->id());
            if( $deletecheckout->delete()){
                return redirect('/');
            }
    }
        return redirect('/');

    }
}
