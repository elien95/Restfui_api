<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //\App\Models\User::factory(50)->create();
       $this->call(UserSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(LessonTagSeeder::class);
      
    }
}
