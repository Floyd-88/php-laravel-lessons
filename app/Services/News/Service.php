<?php
namespace App\Services\News;

use App\Models\News;

class Service 
{
    public function store($news) {
        $tags = $news['tags'];
        unset($news['tags']);
        $news = News::create($news);
        $news->tag_news()->attach($tags);
    }

    public function update($news, $newsArr) {
        $tags = $newsArr['tags'];
        unset($newsArr['tags']);
        $news->update($newsArr);
        $news->tag_news()->sync($tags);
    }
}
