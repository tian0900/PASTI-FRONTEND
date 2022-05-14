<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DaftarpemesananController extends Controller
{
    //
    public function index(){
        $order = DB::table('pemesanans')
        ->join('users', 'pemesanans.id_customer','=','users.user_id')
        ->get();
        return view('admin.daftarpemesanan',compact('order'));
    }

    public function update(Request $request, $id_pemesanan){
        $update = Pemesanan::find($id_pemesanan);
        $update->keterangan = $request->keterangan;
        $update -> save();
        return redirect()->back();         

    }
}
