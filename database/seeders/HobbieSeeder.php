<?php

namespace Database\Seeders;

use App\Models\Hobbie;
use App\Models\TagHobbie;
use App\Models\CategoryHobbie;
use Illuminate\Database\Seeder;

class HobbieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryHobbie::factory(10)->create();
        $tags = TagHobbie::factory(10)->create();
        $hobbies = Hobbie::factory(100)->create();
        foreach($hobbies as $hobbie) {
            $tagsId = $tags->random(5)->pluck('id');
            $hobbie->hobbies()->attach($tagsId);
        }
    }
}
