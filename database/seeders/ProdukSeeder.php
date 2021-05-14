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
                'kategori' => 'Alat Kontrasepsi',
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
            ],
            [
                'nama' => 'Biocream 20gr',
                'kategori' => 'Salep',
                'harga' => 30000,
                'gambar' => 'biocream20gr.jpg'
            ],
            [
                'nama' => 'Antangin Cair',
                'kategori' => 'Sachet',
                'harga' => 29000,
                'gambar' => 'antangincair.jpg'
            ],
            [
                'nama' => 'Curcuma Syrup 60ml',
                'kategori' => 'Botol',
                'harga' => 6000,
                'gambar' => 'curcumasirup.jpg'
            ],
            [
                'nama' => 'Minyak Dewi Tunjong 40ml',
                'kategori' => 'Minyak Angin',
                'harga' => 35000,
                'gambar' => 'dewitunjong.jpg'
            ],
            [
                'nama' => 'Freshcare Green Tea 10ml',
                'kategori' => 'Minyak Angin',
                'harga' => 12000,
                'gambar' => 'freshcaregreentea.jpg'
            ],
            [
                'nama' => 'Freshcare Strong 10ml',
                'kategori' => 'Minyak Angin',
                'harga' => 12000,
                'gambar' => 'freshcarestrong.jpg'
            ],
            [
                'nama' => 'H-Booster Sirup 60ml',
                'kategori' => 'Sirup',
                'harga' => 17000,
                'gambar' => 'h-booster60ml.jpg'
            ],
            [
                'nama' => 'Herocyn Baby 100gr',
                'kategori' => 'Bedak',
                'harga' => 10000,
                'gambar' => 'herocynbaby.jpg'
            ],
            [
                'nama' => 'Herocyn Baby 200gr',
                'kategori' => 'Bedak',
                'harga' => 13000,
                'gambar' => 'herocynbaby200gr.jpg'
            ],
            [
                'nama' => 'Imboost Force Kapsul',
                'kategori' => 'Box',
                'harga' => 275000,
                'gambar' => 'imboostforcekapsul.jpg'
            ],
            [
                'nama' => 'Imboost Force Kid Sirup 60ml',
                'kategori' => 'Sirup',
                'harga' => 67000,
                'gambar' => 'imboostforcekidsirup.jpg'
            ],
            [
                'nama' => 'Komix Jahe',
                'kategori' => 'Sirup',
                'harga' => 40000,
                'gambar' => 'komixjahe.jpg'
            ],
            [
                'nama' => 'Komix Jeruk Nipis',
                'kategori' => 'Sirup',
                'harga' => 40000,
                'gambar' => 'komixjeruknipis.jpg'
            ],
            [
                'nama' => 'Lactacyd Baby 60ml',
                'kategori' => 'Botol',
                'harga' => 27000,
                'gambar' => 'lactacydbaby.jpg'
            ],
            [
                'nama' => 'Medicated Oil 12ml',
                'kategori' => 'Minyak Angin',
                'harga' => 17000,
                'gambar' => 'medicatedoil.jpg'
            ],
            [
                'nama' => 'Medicated Oil 20ml',
                'kategori' => 'Minyak Angin',
                'harga' => 24000,
                'gambar' => 'medicatedoil20ml.jpg'
            ],
            [
                'nama' => 'Pharmaton Formula',
                'kategori' => 'Box',
                'harga' => 240000,
                'gambar' => 'pharmatonformula.jpg'
            ],
            [
                'nama' => 'Po Chai Shui',
                'kategori' => 'Botol',
                'harga' => 45000,
                'gambar' => 'Po Cai.jfif'
            ],
            [
                'nama' => 'Scotts Orange 200ml',
                'kategori' => 'Sirup',
                'harga' => 34000,
                'gambar' => 'Scoots200ml.jfif'
            ],
            [
                'nama' => 'Scotts Orange 400ml',
                'kategori' => 'Sirup',
                'harga' => 55000,
                'gambar' => 'scootsorange200ml.jpg'
            ],
            [
                'nama' => 'Welmove Tablet',
                'kategori' => 'Box',
                'harga' => 205000,
                'gambar' => 'welmove.jfif'
            ],
            [
                'nama' => 'Antasida Syrup 60ml',
                'kategori' => 'Sirup',
                'harga' => 7000,
                'gambar' => 'Antasida60ml.jfif'
            ],
            [
                'nama' => 'Antasida Tablet',
                'kategori' => 'Box',
                'harga' => 12000,
                'gambar' => 'AntasidaTablet.jpg'
            ],
            [
                'nama' => 'Combantrin Tablet 125mg',
                'kategori' => 'Box',
                'harga' => 379000,
                'gambar' => 'combantrin125.jfif'
            ],
            [
                'nama' => 'Combantrin Tablet 250mg',
                'kategori' => 'Box',
                'harga' => 379000,
                'gambar' => 'combantrin250.jfif'
            ],
            [
                'nama' => 'Entrostop Tablet',
                'kategori' => 'Pack',
                'harga' => 79000,
                'gambar' => 'EntrostopTablet.jfif'
            ],
            [
                'nama' => 'Hufabion Tablet',
                'kategori' => 'Box',
                'harga' => 30000,
                'gambar' => 'HufabionTablet.png'
            ],
            [
                'nama' => 'Hufagesic Tablet',
                'kategori' => 'Box',
                'harga' => 24000,
                'gambar' => 'HufagesicTablet.jfif'
            ],
            [
                'nama' => 'Neurobion Tablet',
                'kategori' => 'Box',
                'harga' => 487000,
                'gambar' => 'neurobionTab.jpg'
            ],
            [
                'nama' => 'Panadol Tablet',
                'kategori' => 'Box',
                'harga' => 93000,
                'gambar' => 'PanadolTab.png'
            ],
            [
                'nama' => 'Promag Tablet',
                'kategori' => 'Box',
                'harga' => 81000,
                'gambar' => 'PromagTab.jfif'
            ],
            [
                'nama' => 'Sangobion Capsul',
                'kategori' => 'Box',
                'harga' => 369000,
                'gambar' => 'sangobion.jpg'
            ],
            [
                'nama' => 'Baby Cough 60ml',
                'kategori' => 'Sirup',
                'harga' => 6000,
                'gambar' => 'BabyCough.jpg'
            ],
            [
                'nama' => 'Insto Reguler',
                'kategori' => 'Pack',
                'harga' => 179000,
                'gambar' => 'instoReguler.jfif'
            ],
            [
                'nama' => 'Paramex',
                'kategori' => 'Box',
                'harga' => 105000,
                'gambar' => 'Paramex.jpg'
            ],
            [
                'nama' => 'Acyclovir Krim 5gr',
                'kategori' => 'Box',
                'harga' => 100000,
                'gambar' => 'AcyclovirKrim5gr.png'
            ],
            [
                'nama' => 'Amlodipine 5gr',
                'kategori' => 'Box',
                'harga' => 15000,
                'gambar' => 'Amlodipine 5gr.jpg'
            ],
            [
                'nama' => 'Bevalex Cream 5gr',
                'kategori' => 'Tube',
                'harga' => 13000,
                'gambar' => 'bevalex.jfif'
            ],
            [
                'nama' => 'Bioplacenton 15gr',
                'kategori' => 'Tube',
                'harga' => 39000,
                'gambar' => 'Bioplacenton 15gr.jpg'
            ],
            [
                'nama' => 'Gentalex Cream 5gr',
                'kategori' => 'Tube',
                'harga' => 7000,
                'gambar' => 'Gentalex Cream 5gr.jpg'
            ],
            [
                'nama' => 'OBH Combi Anak Madu 60ml',
                'kategori' => 'Botol',
                'harga' => 13000,
                'gambar' => 'OBH Combi Anak Madu 60ml.jpeg'
            ],
            [
                'nama' => 'OBH Combi Anak Strawberry',
                'kategori' => 'Botol',
                'harga' => 13000,
                'gambar' => 'OBH Combi Anak Strawberry 60ml.jpg'
            ],
            [
                'nama' => 'OBH Combi Plus 100ml',
                'kategori' => 'Botol',
                'harga' => 17000,
                'gambar' => 'OBH Combi Plus 100ml.jpg'
            ],
            [
                'nama' => 'OBH Combi Plus 60ml',
                'kategori' => 'Botol',
                'harga' => 13000,
                'gambar' => 'OBH Combi Plus 60ml.jfif'
            ],
            [
                'nama' => 'Pimtrakol Cherry 60ml',
                'kategori' => 'Botol',
                'harga' => 13000,
                'gambar' => 'Pimtrakol Cherry 60ml.jpg'
            ],
            [
                'nama' => 'Pimtrakol Lemon 60ml',
                'kategori' => 'Botol',
                'harga' => 13000,
                'gambar' => 'Pimtrakol Lemon 60ml.jfif'
            ],
            [
                'nama' => 'Tera F Kaplet',
                'kategori' => 'Box',
                'harga' => 45000,
                'gambar' => 'Tera F Kaplet.jpg'
            ],
            [
                'nama' => 'Becom C Kapsul',
                'kategori' => 'Box',
                'harga' => 186000,
                'gambar' => 'Becom C Capsul.jpg'
            ],
            [
                'nama' => 'Lactacyd Baby 150ml',
                'kategori' => 'Botol',
                'harga' => 67000,
                'gambar' => 'Lactacyd Baby 150ml.jfif'
            ],
            [
                'nama' => 'Lactacyd Baby 250ml',
                'kategori' => 'Botol',
                'harga' => 102000,
                'gambar' => 'Lactacyd Baby 250ml.jfif'
            ],
            [
                'nama' => 'Lactacyd Baby 60ml',
                'kategori' => 'Botol',
                'harga' => 40000,
                'gambar' => 'Lactacyd Baby 60ml.jfif'
            ],
            [
                'nama' => 'Herocyn 150gr',
                'kategori' => 'Bedak',
                'harga' => 17000,
                'gambar' => 'Herocyn 150gr.jfif'
            ],
            [
                'nama' => 'Herocyn 85gr',
                'kategori' => 'Bedak',
                'harga' => 13000,
                'gambar' => 'Herocyn 85gr.webp'
            ],
            [
                'nama' => 'Pagoda Pastiles Mint 20gr',
                'kategori' => 'Box',
                'harga' => 65000,
                'gambar' => 'Pagoda Pastiles Mint 20gr.jfif'
            ],
            [
                'nama' => 'Vermint',
                'kategori' => 'Botol',
                'harga' => 38000,
                'gambar' => 'Vermint.jpg'
            ],
            [
                'nama' => 'Vitacimin Lemon',
                'kategori' => 'Box',
                'harga' => 85000,
                'gambar' => 'Vitacimin Lemon.jpg'
            ],
            [
                'nama' => 'Xon-Ce',
                'kategori' => 'Box',
                'harga' => 77000,
                'gambar' => 'Xon-Ce.jfif'
            ],
            [
                'nama' => 'Neurobion Forte 5000mg',
                'kategori' => 'Box',
                'harga' => 895000,
                'gambar' => 'Neurobion Forte 5000mg.jfif'
            ],
            [
                'nama' => 'Diaform Box',
                'kategori' => 'Box',
                'harga' => 138000,
                'gambar' => 'Diaform Box.jfif'
            ],
            [
                'nama' => 'Durol Syrup',
                'kategori' => 'Sirup',
                'harga' => 26000,
                'gambar' => 'Durol Syrup.jfif'
            ],
            [
                'nama' => 'Lanamol',
                'kategori' => 'Box',
                'harga' => 31000,
                'gambar' => 'Lanamol.jfif'
            ],
            [
                'nama' => 'Novagesic 500mg',
                'kategori' => 'Box',
                'harga' => 21000,
                'gambar' => 'Novagesic 500mg.jpg'
            ],
            [
                'nama' => 'OBH Combi Berdahak 100ml',
                'kategori' => 'Botol',
                'harga' => 13000,
                'gambar' => 'OBH Combi Berdahak 100ml.jpg'
            ],
            [
                'nama' => 'Obimin',
                'kategori' => 'Botol',
                'harga' => 58000,
                'gambar' => 'Obimin.jfif'
            ],
            [
                'nama' => 'Pacetik',
                'kategori' => 'Botol',
                'harga' => 19000,
                'gambar' => 'Pacetik.jpg'
            ],
            [
                'nama' => 'Microlax Gel 5mg',
                'kategori' => 'Tube',
                'harga' => 23000,
                'gambar' => 'Microlax Gel 5mg.jfif'
            ],
            [
                'nama' => 'Salap 88',
                'kategori' => 'Tube',
                'harga' => 10000,
                'gambar' => 'Salap 88.jpg'
            ],
            [
                'nama' => 'Vitamin C IPI',
                'kategori' => 'Botol',
                'harga' => 5000,
                'gambar' => 'Vitamin C IPI.jfif'
            ],
            [
                'nama' => 'Rohto',
                'kategori' => 'Botol',
                'harga' => 10000,
                'gambar' => 'Rohto.jpg'
            ],
            [
                'nama' => 'Siladex Hijau 60ml',
                'kategori' => 'Botol',
                'harga' => 12000,
                'gambar' => 'Siladex Hijau 100ml.jfif'
            ],
            [
                'nama' => 'Siladex Hijau 100ml',
                'kategori' => 'Botol',
                'harga' => 16000,
                'gambar' => 'Siladex Hijau 60ml.webp'
            ],
            [
                'nama' => 'Siladex Merah 100ml',
                'kategori' => 'Botol',
                'harga' => 16000,
                'gambar' => 'Siladex Merah 100ml.jpg'
            ],
            [
                'nama' => 'Ultraflu',
                'kategori' => 'Box',
                'harga' => 67000,
                'gambar' => 'Ultraflu.jpg'
            ],
            [
                'nama' => 'Bodrex',
                'kategori' => 'Box',
                'harga' => 41000,
                'gambar' => 'Bodrex.jpg'
            ],
            [
                'nama' => 'Procold',
                'kategori' => 'Box',
                'harga' => 70000,
                'gambar' => 'Procold.jpg'
            ],
            [
                'nama' => 'Anakonidin 30ml',
                'kategori' => 'Botol',
                'harga' => 7000,
                'gambar' => 'Anakonidin 30ml.jpg'
            ],
            [
                'nama' => 'Decolgen',
                'kategori' => 'Box',
                'harga' => 43000,
                'gambar' => 'Decolgen.webp'
            ],
            [
                'nama' => 'Inza',
                'kategori' => 'Box',
                'harga' => 51000,
                'gambar' => 'Inza.jfif'
            ],
            [
                'nama' => 'OBH Combi Anak Apel 60ml',
                'kategori' => 'Box',
                'harga' => 13000,
                'gambar' => 'OBH Combi Anak Apel 60ml.jpg'
            ],
            [
                'nama' => 'OBH Combi Anak Jeruk 60ml',
                'kategori' => 'Box',
                'harga' => 13000,
                'gambar' => 'OBH Combi Anak Jeruk 60ml.jpg'
            ],
            [
                'nama' => 'Panadol Flu & Batuk',
                'kategori' => 'Box',
                'harga' => 123000,
                'gambar' => 'Panadol Flu & Batuk.jpg'
            ],
            [
                'nama' => 'Paramex Flu & Batuk',
                'kategori' => 'Box',
                'harga' => 45000,
                'gambar' => 'Paramex Flu & Batuk.webp'
            ],
            [
                'nama' => 'Siladex Biru 100ml',
                'kategori' => 'Sirup',
                'harga' => 16000,
                'gambar' => ''
            ],
            [
                'nama' => 'Siladex Biru 60ml',
                'kategori' => 'Sirup',
                'harga' => 13000,
                'gambar' => ''
            ],
            [
                'nama' => 'Termorex Plus 60ml',
                'kategori' => 'Sirup',
                'harga' => 13000,
                'gambar' => ''
            ]
        ]);
    }
}