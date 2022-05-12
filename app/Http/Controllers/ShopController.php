<?php

namespace App\Http\Controllers;
use App\Models\Checkout;
use App\Models\Orders;
use App\Models\User;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class ShopController extends Controller
{
    //
    public function index($checkout_id){
        $checkout = Checkout::find($checkout_id);

        // Menampilkan daftar produk
        $pesan = DB::table('checkout')
        ->select('users.name as namauser','users.*','checkout.*','produk.*')
        ->join('users', 'checkout.user_id','=','users.user_id')
        ->join('produk', 'produk.produk_id','=','checkout.produk_id')
        ->where('users.user_id','=',auth()->id())
        ->get();

        // Menampilkan data diri
        $bio =  Checkout::inRandomOrder()->limit(1)
        ->select('users.name as namauser','users.*','checkout.*')
        ->join('users', 'checkout.user_id','=','users.user_id')
        ->where('users.user_id','=',auth()->id())
        ->get();

        // Menampilkan jumlah total harga
         $join = DB::table('checkout')
        ->select(DB::raw('SUM(total_detail) as total')) 
        ->groupBy('user_id')
        ->where('user_id','=',Auth::user()->user_id)
        ->get();

        
        // Menampilkan halaman apabila sudah memesan
        if(count($pesan) == 0){
            return redirect('/');
        } else {
            
            return view('shop',compact('pesan','bio','join'));
        }
   
        
    }
// Menghapus daftar produk yang telah di pesan
    public function delete($user_id){
    
        $delete = Checkout::where('user_id',auth()->id());
            if( $delete->delete()){
                return redirect('/');
            }
  
    }

    
    public function store(Request $request){
        //                
        $checkout = Checkout::where('user_id',auth()->id())->get();
       
        $pemesanan= new Orders();
        $pemesanan->user_id = auth()->id() ;
        $pemesanan->admin_id =  1;
        $pemesanan->total = $request->total;
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
