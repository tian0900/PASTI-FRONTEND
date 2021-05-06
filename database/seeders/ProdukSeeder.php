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
            ],
            [
                'nama' => 'Arkavit C Kaplet ',
                'kategori' => 'Tablet',
                'harga' => 2000,
                'gambar' => 'arkavitc.jpg'
            ],
            [
                'nama' => 'Betadine Salep 20gr',
                'kategori' => 'Salep',
                'harga' => 2000,
                'gambar' => 'betadine20g.jpg'
            ],
            [
                'nama' => 'Enkasari 120ml',
                'kategori' => 'Botol',
                'harga' => 2000,
                'gambar' => 'enkasari.jfif'
            ],
            [
                'nama' => 'Kejibeling Kapsul',
                'kategori' => 'Tablet',
                'harga' => 2000,
                'gambar' => 'kejibeling.jpg'
            ],
            [
                'nama' => 'Kembang Bulan ',
                'kategori' => 'Kapsul',
                'harga' => 2000,
                'gambar' => 'kembangbulan.jfif'
            ],
            [
                'nama' => 'Listerin Cool Mint 250ml',
                'kategori' => 'Botol',
                'harga' => 2000,
                'gambar' => 'listerincoolmint250ml.jpg'
            ],
            [
                'nama' => 'Listerin Fresh Brush 100ml',
                'kategori' => 'Botol',
                'harga' => 2000,
                'gambar' => 'listerinfreshbrust100ml.jfif'
            ],
            [
                'nama' => 'Zambuk',
                'kategori' => 'Salep',
                'harga' => 2000,
                'gambar' => 'zambuk.png'
            ],
            [
                'nama' => 'Becom C Kapsul',
                'kategori' => 'Kapsul',
                'harga' => 2000,
                'gambar' => 'becomc.jpg'
            ],
            [
                'nama' => 'Curcuma Tablet',
                'kategori' => 'Tablet',
                'harga' => 2000,
                'gambar' => 'curcuma.jpg'
            ],
            [
                'nama' => 'Ever E Box',
                'kategori' => 'Tablet',
                'harga' => 2000,
                'gambar' => 'evere.jfif'
            ]
        ]);
    }
}