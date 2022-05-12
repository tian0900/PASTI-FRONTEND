<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Http;

class DaftarprodukController extends Controller
{
    //
    public function index()
    {
        $produks = Http::get("http://localhost:8080/api/produks");
        return view('admin.daftarproduk', ['produks' => json_decode($produks)]);
    }

    public function tambah()
    {
        return view('admin.tambahproduk');
    }

    public function store(Request $request)
    {
        // $produks = new Produk();
        // $produks->nama = $request->nama;
        // $produks->kategori = $request->kategori;
        // $produks->harga = $request->harga;
        // $produks->stok = $request->stok;

        $this->validate(
            $request,
            [
                'nama' => 'required',
                'harga' => 'required|integer',
                'kategori' => 'required',
                'stok' => 'required|integer',
                'gambar' => 'required',
            ]
        );

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('imgproduk', $file);
            // $produks->gambar = $file;
        }
        // $produks -> save();

        Http::post('http://localhost:8080/api/produks', [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $file,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
        ]);
        return redirect('daftarproduk');
    }

    public function edit($produk_id)
    {
        // $editproduks = Produk::find($produk_id);

        $produk = Http::get("http://localhost:8080/api/produks/$produk_id");
        // return view('pesanan',['produk' =>json_decode($produk)]);
        return view('admin.editproduk', ['produk' => json_decode($produk)]);
    }

    public function update(Request $request, $produk_id)
    {
        $this->validate(
            $request,
            [
                'nama' => 'required',
                'harga' => 'required|integer',
                'kategori' => 'required',
                'stok' => 'required|integer',
            ]
        );
        // $update = Produk::find($produk_id);
        // $file = $update->gambar;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('imgproduk', $file);
            // $update->gambar = $file;
            Http::put("http://localhost:8080/api/produks/$produk_id", [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'gambar' => $file,
                'stok' => $request->stok,
                'kategori' => $request->kategori,
            ]);
        } else {
            Http::put("http://localhost:8080/api/produks/$produk_id", [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'kategori' => $request->kategori,
            ]);
        }

        // $update->nama = $request->nama;
        // $update->harga = $request->harga;
        // $update->gambar = $file;
        // $update->kategori = $request->kategori;
        // $update->save();



        return redirect('daftarproduk');
    }

    public function delete($produk_id)
    {
        $response = Http::delete("http://localhost:8080/api/produks/$produk_id");
        // $deleteproduks = Produk::find($produk_id);
        if ($response) {
            return redirect('daftarproduk');
        }
    }
}
