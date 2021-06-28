<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Factory(App\Tag::class, 10)->create();
        \App\Models\Tag::factory()->count(10)->create();

    }
}
