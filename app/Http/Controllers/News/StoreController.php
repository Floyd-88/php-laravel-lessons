<?php
namespace App\Http\Controllers\News;


use App\Models\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreRequest;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
{
    $news = $request->validated();
    $tags = $news['tags'];
    unset($news['tags']);
    $news = News::create($news);
    $news->tag_news()->attach($tags);
    return redirect()->route('news.index');
}
  
}
