<?php
namespace App\Http\Controllers\News;


use App\Models\News;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke(News $news)
{
    $newsArr = request()->validate([
        'name_news' => 'string',
        'discription' => 'string',
        'img' => '',
        'category_news_id' => 'int',
        'tags' => '',
    ]);
    $tags = $newsArr['tags'];
    unset($newsArr['tags']);
    $news->update($newsArr);
    $news->tag_news()->sync($tags);
    return redirect()->route('news.show', $news->id);
}

   }
