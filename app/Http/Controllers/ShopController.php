<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Orders;
use App\Models\User;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Keranjang;

class ShopController extends Controller
{
    //
    public function index($id_keranjang)
    {
        $keranjangs = Keranjang::find($id_keranjang);

        // Menampilkan daftar produk
        $pesan = DB::table('keranjangs')
            ->select('users.name as namauser', 'users.*', 'keranjangs.*', 'produks.*')
            ->join('users', 'keranjangs.id_customer', '=', 'users.user_id')
            ->join('produks', 'produks.produk_id', '=', 'keranjangs.id_produk')
            ->where('users.user_id', '=', session('user_id'))
            ->get();

        // Menampilkan data diri
        $bio = Keranjang::inRandomOrder()->limit(1)
            ->select('users.name as namauser', 'users.*', 'keranjangs.*')
            ->join('users', 'keranjangs.id_customer', '=', 'users.user_id')
            ->where('users.user_id', '=',session('user_id'))
            ->get();

        // Menampilkan jumlah total harga
        $join = DB::table('keranjangs')
            ->select(DB::raw('SUM(total) as total'))
            ->groupBy('id_customer')
            ->where('id_customer', '=', session('user_id'))
            ->get();

        // Menampilkan halaman apabila sudah memesan

        return view('shop', compact('pesan', 'bio', 'join'));
    }
    // Menghapus daftar produk yang telah di pesan
    public function delete($user_id)
    {

        $delete = Checkout::where('user_id', auth()->id());
        if ($delete->delete()) {
            return redirect('/');
        }
    }


    public function store(Request $request)
    {
        //                
        $checkout = Checkout::where('user_id', auth()->id())->get();

        $pemesanan = new Orders();
        $pemesanan->user_id = auth()->id();
        $pemesanan->admin_id =  1;
        $pemesanan->total = $request->total;
        $pemesanan->keterangan = "Verifikasi";
        $file = $pemesanan->bukti_bayar;

        if ($request->hasFile('bukti_bayar')) {
            $file = $request->file('bukti_bayar')->getClientOriginalName();
            $request->file('bukti_bayar')->move('buktibayar', $file);
            $pemesanan->bukti_bayar = $file;
        }
        if ($pemesanan->save()) {

            foreach ($checkout as $checkouts) {
                $orderdetail = new Orderdetail();
                $orderdetail->jumlah = $checkouts->jumlah;
                $orderdetail->total_detail = $checkouts->total_detail;
                $orderdetail->produk_id = $checkouts->produk_id;
                $orderdetail->orders_id = $pemesanan->orders_id;
                $orderdetail->save();
            }

            $deletecheckout = Checkout::where('user_id', auth()->id());
            if ($deletecheckout->delete()) {
                return redirect('/');
            }
        }
        return redirect('/');
    }
}
