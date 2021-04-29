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
                'email' => 'marcellino@gmail.com',
                'password' => 'marcell123',
                'usia' => 18,
                'gender' => 'L',
                'alamat' => 'Laguboti',
                'no_telepon' => '081234567890' 
            ],
            [
                'nama' => 'Christian Laurens Sihotang',
                'email' => 'tian@gmail.com',
                'password' => 'tian123',
                'usia' => 18,
                'gender' => 'L',
                'alamat' => 'Balige',
                'no_telepon' => '081345678902' 
            ],
            [
                'nama' => 'Samuel Prayoga Tampubolon',
                'email' => 'samuel@gmail.com',
                'password' => 'samuel123',
                'usia' => 18,
                'gender' => 'L',
                'alamat' => 'Tarutung',
                'no_telepon' => '0813456789235' 
            ],
            [
                'nama' => 'Nesty Gloria Tampubolon',
                'email' => 'nesty ',
                'password' => 'nesty123',
                'usia' => 18,
                'gender' => 'P',
                'alamat' => 'Tampubolon',
                'no_telepon' => '081345678900' 
            ]
        ]);
    }
}
