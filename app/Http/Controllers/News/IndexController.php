<?php
namespace App\Http\Controllers\News;


use App\Models\News;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
public function __invoke()
{
    $news = News::all();
    return view('news.index', compact('news'));

    // $news = News::find(1);
    // dd($news->category_news);

    // $category = CategoryNews::find(1);
    // dd($category->news);

    // $tag = News::find(1);
    // dd($tag->tag_news);

    // $news= TagNews::find(2);
    // dd($news->news);
}
   
}
