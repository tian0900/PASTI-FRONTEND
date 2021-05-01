<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Admin::insert([
            [
                'email' => 'onra@gmail.com',
                'password' => 'onra123',
                'nama' => 'Onra Imanuel'
            ]
        ]);
    }
}
