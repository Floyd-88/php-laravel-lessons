<?php

namespace Database\Seeders;

use App\Models\Work;
use App\Models\TagWork;
use App\Models\Language;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::factory(10)->create();
        $tags = TagWork::factory(10)->create();
        $works = Work::factory(100)->create();

        foreach($works as $work) {
            $tagsId = $tags->random(5)->pluck('id');
            $work->tag_works()->attach($tagsId);
        }
    }
}
