<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 50)->create();
        //App\Models\User::factory(50)->create();
        \App\Models\User::factory()->count(50)->create();

    }
}
