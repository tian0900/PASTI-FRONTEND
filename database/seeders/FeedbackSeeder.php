<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Feedback::insert([
            [
                'customer_id' => 1,
                'admin_id' => 1,
                'deskripsi' => 'Websitenya sangat memuaskan dan menarik'
            ],
            [
                'customer_id' => 2,
                'admin_id' => 1,
                'deskripsi' => 'Websitenya tidak menarik dan membosankan'
            ],
            [
                'customer_id' => 3,
                'admin_id' => 1,
                'deskripsi' => 'Websitenya sangat membantu'
            ]
        ]);
    }
}
