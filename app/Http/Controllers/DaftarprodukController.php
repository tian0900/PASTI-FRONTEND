<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class DaftarprodukController extends Controller
{
    //
    public function index(){
        $produks = Produk::all();
        return view('admin.daftarproduk',compact('produks'));
    }
    public function tambah(){
        return view('admin.tambahproduk');
    }

    public function store(Request $request){
        $produks = new Produk();
        $produks->Nama_Produk = $request->Nama_Produk;
        $produks->Jenis_Produk = $request->Jenis_Produk;
        $produks->Harga_Produk = $request->Harga_Produk;
        $produks->Produk_Deskripsi = $request->Produk_Deskripsi;

       
        if ($request->hasFile('Gambar_Produk')){
            $file= $request->file('Gambar_Produk')->getClientOriginalName();
            $request->file('Gambar_Produk')->move('imgproduk',$file);
            $produks->Gambar_Produk = $file;
        } 
        $produks -> save();
        return redirect('daftarproduk');
        
    }

    public function edit($ProdukID){
        $editproduks = Produk::find($ProdukID);
       
        return view('admin.editproduk',compact('editproduks'));
    }

    public function update(Request $request, $ProdukID){
        $update = Produk::find($ProdukID);
        $file = $update->Gambar_Produk;

        if ($request->hasFile('Gambar_Produk')){
            $file= $request->file('Gambar_Produk')->getClientOriginalName();
            $request->file('Gambar_Produk')->move('imgproduk',$file);
            $update->Gambar_Produk = $file;
        } 
        
        $update->Nama_Produk= $request->Nama_Produk;
        $update->Harga_Produk = $request->Harga_Produk;
        $update->Produk_Deskripsi = $request->Produk_Deskripsi;
        $update->Gambar_Produk = $file;
        $update->Jenis_Produk = $request->Jenis_Produk;
        $update -> save();
       
        return redirect('daftarproduk');         

    }

    public function delete($ProdukID){
        $deleteproduks = Produk::find($ProdukID);
        if( $deleteproduks->delete()){
           return redirect()->back();
        }
  
    }


}
