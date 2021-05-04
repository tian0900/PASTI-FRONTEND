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
                'nama' => 'Antangin Herbal',
                'kategori' => 'Sirup',
                'harga' => 4000,
                'gambar' => 'Antanginherbal.jpg'
            ],
            [
                'nama' => 'Mamy Poko Pants',
                'kategori' => 'Popok Bayi',
                'harga' => 50000,
                'gambar' => 'MamyPokoPants.jpg'
            ],
            [
                'nama' => 'Paracetamol 500mg',
                'kategori' => 'Tablet',
                'harga' => 3000,
                'gambar' => 'Paracetamol500mg.jpg'
            ],
            [
                'nama' => 'OBH',
                'kategori' => 'Sirup',
                'harga' => 15000,
                'gambar' => 'obh.jpg'
            ],
            [
                'nama' => 'Sutra',
                'kategori' => 'AlatKontrasepsi',
                'harga' => 18000,
                'gambar' => 'sutra.jpg'
            ],
            [
                'nama' => 'Masker',
                'kategori' => 'Popok',
                'harga' => 2000,
                'gambar' => 'masker.jpg'
            ]
        ]);
    }
}