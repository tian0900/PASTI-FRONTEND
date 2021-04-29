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
                'deskripsi' => 'Websitenya sangat memuaskan dan menarik'
            ],
            [
                'deskripsi' => 'Websitenya tidak menarik dan membosankan'
            ],
            [
                'deskripsi' => 'Websitenya sangat membantu'
            ]
        ]);
    }
}
