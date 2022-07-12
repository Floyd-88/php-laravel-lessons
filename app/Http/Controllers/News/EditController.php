<?php
namespace App\Http\Controllers\News;


use App\Models\News;
use App\Models\TagNews;
use App\Models\CategoryNews;
use App\Http\Controllers\Controller;

class EditController extends Controller
{

    public function __invoke(News $news)
{
    $category = CategoryNews::all();
    $tags = TagNews::all();
    return view('news.edit', compact('news'), compact('category', 'tags'));   
}
  
}
