<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Factory(App\LessonTag::class, 500)->create();
        \App\Models\LessonTag::factory()->count(500)->create();

    }
}
