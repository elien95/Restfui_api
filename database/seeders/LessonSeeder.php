<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Factory(App\Lesson::class, 100)->create();
        \App\Models\Lesson::factory()->count(100)->create();

    }
}
