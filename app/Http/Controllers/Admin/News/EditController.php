<?php
namespace App\Http\Controllers\Admin\News;


use App\Models\News;
use App\Models\TagNews;
use App\Models\CategoryNews;
use App\Http\Controllers\News\BaseController;

class EditController extends BaseController
{

    public function __invoke(News $newsEdit)
{
    $category = CategoryNews::all();
    $tags = TagNews::all();
    return view('admin.news.edit', compact('newsEdit'), compact('category', 'tags'));   
}
  
}
