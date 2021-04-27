<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Customer::insert([
            [
                'nama' => 'Marcellino Lumban Gaol',
                'username' => 'marcellino',
                'password' => 'marcell123',
                'alamat' => 'Laguboti',
                'no_telepon' => '081234567890' 
            ],
            [
                'nama' => 'Christian Laurens Sihotang',
                'username' => 'tian',
                'password' => 'tian123',
                'alamat' => 'Balige',
                'no_telepon' => '081345678902' 
            ],
            [
                'nama' => 'Samuel Prayoga Tampubolon',
                'username' => 'samuel',
                'password' => 'samuel123',
                'alamat' => 'Tarutung',
                'no_telepon' => '0813456789235' 
            ],
            [
                'nama' => 'Nesty Gloria Tampubolon',
                'username' => 'nesty ',
                'password' => 'nesty123',
                'alamat' => 'Tampubolon',
                'no_telepon' => '081345678900' 
            ]
        ]);
    }
}
