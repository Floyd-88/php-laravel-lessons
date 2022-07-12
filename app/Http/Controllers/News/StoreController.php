<?php
namespace App\Http\Controllers\News;


use App\Models\News;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{

    public function __invoke()
{
    $news = request()->validate([
        'name_news' => 'string',
        'discription' => 'string',
        'img' => '',
        'category_news_id' => '',
        'tags' => '',
    ]);
    $tags = $news['tags'];
    unset($news['tags']);
    $news = News::create($news);
    $news->tag_news()->attach($tags);
    return redirect()->route('news.index');
}
  
}
