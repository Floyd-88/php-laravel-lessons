<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\WorkSeeder;
use Database\Seeders\HobbieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HobbieSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(WorkSeeder::class);
        }
        // User::factory(10)->create();


}
