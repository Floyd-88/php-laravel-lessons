<?php
namespace App\Http\Controllers\News;


use App\Models\TagNews;
use App\Models\CategoryNews;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
{
    $category = CategoryNews::all();
        $tags = TagNews::all();
        return view('news.create', compact('category', 'tags'));
}

   
}
