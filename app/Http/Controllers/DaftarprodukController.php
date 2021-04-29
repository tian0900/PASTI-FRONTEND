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
        $produks->nama = $request->nama;
        $produks->kategori = $request->kategori;
        $produks->harga = $request->harga;

       
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('imgproduk',$file);
            $produks->gambar = $file;
        } 
        $produks -> save();
        return redirect('daftarproduk');
        
    }

    public function edit($produk_id){
        $editproduks = Produk::find($produk_id);
       
        return view('admin.editproduk',compact('editproduks'));
    }

    public function update(Request $request, $produk_id){
        $update = Produk::find($produk_id);
        $file = $update->gambar;

        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('imgproduk',$file);
            $update->gambar = $file;
        } 
        
        $update->nama= $request->nama;
        $update->harga = $request->harga;
        $update->gambar = $file;
        $update->kategori = $request->kategori;
        $update -> save();
       
        return redirect('daftarproduk');         

    }

    public function delete($produk_id){
        $deleteproduks = Produk::find($produk_id);
        if( $deleteproduks->delete()){
           return redirect()->back();
        }
  
    }


}
