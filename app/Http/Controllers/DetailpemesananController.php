<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use App\Models\Orderdetail;
use App\Models\PemesananDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetailpemesananController extends Controller
{
    //
    public function index($id_pemesanan){
        $orderdetail = PemesananDetail::find($id_pemesanan);
        $order = DB::table('pemesanan_details')
        ->join('pemesanans', 'pemesanans.id_pemesanan','=','pemesanan_details.id_pemesanan')
        ->join('produks', 'produks.produk_id','=','pemesanan_details.id_produk')
        ->where('pemesanan_details.id_pemesanan','=',$id_pemesanan)
        ->get();
        return view('admin.detailpemesanan',compact('order','orderdetail'));
    }
}
