<?php
namespace App\Http\Controllers\News;

use App\Models\TagNews;
use App\Models\CategoryNews;
use App\Http\Controllers\News\BaseController;

class CreateController extends BaseController
{
    public function __invoke()
{
    $category = CategoryNews::all();
        $tags = TagNews::all();
        return view('news.create', compact('category', 'tags'));
}

   
}
