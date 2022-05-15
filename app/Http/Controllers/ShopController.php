<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Keranjang;
use App\Models\Pemesanan;
use App\Models\PemesananDetail;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon; 

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
            ->where('users.user_id', '=', session('user_id'))
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
    public function delete($id_keranjang)
    {
        $response = Http::delete("http://localhost:8080/api/keranjangs/$id_keranjang");
        // $deleteproduks = Produk::find($produk_id);
        if ($response) {
            return redirect()->back();
        }
    }


    public function store(Request $request)
    {
        //                
        $checkout = Keranjang::where('id_customer', session('user_id'))->get();
        $pemesanan = new Pemesanan();
        $pemesanan->id_customer = session('user_id');
        $pemesanan->total_pembayaran = $request->total;
        $pemesanan->status = "Verifikasi";
        $file = $pemesanan->bukti_bayar;
        $pemesanan->tanggal_pemesanan =  1;

        if ($request->hasFile('bukti_bayar')) {
            $file = $request->file('bukti_bayar')->getClientOriginalName();
            $request->file('bukti_bayar')->move('buktibayar', $file);
            $pemesanan->bukti_bayar = $file;
        }
        if ($pemesanan->save()) {
            foreach ($checkout as $checkouts) {
                $orderdetail = new PemesananDetail();
                $orderdetail->kuantitas_pesan = $checkouts->kuantitas;
                $orderdetail->total_harga = $checkouts->total;
                $orderdetail->id_produk = $checkouts->id_produk;
                $orderdetail->id_pemesanan = $pemesanan->id_pemesanan;
                $orderdetail->save();
            }
            $deletecheckout = Keranjang::where('id_customer', session('user_id'));
            if ($deletecheckout->delete()) {
                return redirect('/');
            }
        }
        return redirect('/');
    }
}
