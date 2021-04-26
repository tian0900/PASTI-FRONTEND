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
        $produks->nama_produk = $request->nama_produk;
        $produks->jenis_produk = $request->jenis_produk;
        $produks->harga_produk = $request->harga_produk;
        $produks->deskripsi_produk = $request->deskripsi_produk;

       
        if ($request->hasFile('gambar_produk')){
            $file= $request->file('gambar_produk')->getClientOriginalName();
            $request->file('gambar_produk')->move('imgproduk',$file);
            $produks->gambar_produk = $file;
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
        $file = $update->gambar_produk;

        if ($request->hasFile('gambar_produk')){
            $file= $request->file('gambar_produk')->getClientOriginalName();
            $request->file('gambar_produk')->move('imgproduk',$file);
            $update->gambar_produk = $file;
        } 
        
        $update->nama_produk= $request->nama_produk;
        $update->harga_produk = $request->harga_produk;
        $update->deskripsi_produk = $request->deskripsi_produk;
        $update->gambar_produk = $file;
        $update->jenis_produk = $request->jenis_produk;
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
