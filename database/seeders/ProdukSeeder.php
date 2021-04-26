<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Produk::insert([
            [
                'nama_produk' => 'Antangin Herbal',
                'jenis_produk' => 'Sirup',
                'harga_produk' => 4000 ,
                'deskripsi_produk' => 'Untuk meredakan masuk angin, meriang, rasa mual',
                'gambar_produk' => 'Antanginherbal.jpg'
            ],
            [
                'nama_produk' => 'Mamy Poko Pants',
                'jenis_produk' => 'Popok Bayi',
                'harga_produk' => 50000,
                'deskripsi_produk' => 'Popok Bayi tipe celana 9-14 kg',
                'gambar_produk' => 'MamyPokoPants.jpg'
            ],
            [
                'nama_produk' => 'Paracetamol 500mg',
                'jenis_produk' => 'Tablet',
                'harga_produk' => 3000,
                'deskripsi_produk' => 'Pereda rasa nyeri dan rasa sakit',
                'gambar_produk' => 'Paracetamol500mg.jpg'
            ]
        ]);
    }
}
