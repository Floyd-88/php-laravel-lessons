<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\TagNews;
use App\Models\CategoryNews;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryNews::factory(10)->create();
        $tags = TagNews::factory(10)->create();
        $news = News::factory(100)->create();

        foreach($news as $elem) {
            $tagsId = $tags->random(5)->pluck('id');
            $elem->tag_news()->attach($tagsId);
        }
    }
}
