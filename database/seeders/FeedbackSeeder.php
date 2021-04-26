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
                'nama' => 'Marcellino',
                'deskripsi' => 'Websitenya sangat memuaskan dan menarik'
            ],
            [
                'nama' => 'Samuel',
                'deskripsi' => 'Websitenya tidak menarik dan membosankan'
            ],
            [
                'nama' => 'Nesty Tampubolon',
                'deskripsi' => 'Websitenya sangat membantu'
            ]
        ]);
    }
}
