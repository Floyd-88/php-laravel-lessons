<?php
namespace App\Http\Controllers\Admin\News;


use App\Models\News;
use App\Http\Controllers\News\BaseController;

class ShowController extends BaseController
{
    public function __invoke(News $newsShow)
    {
        return view('admin.news.show', compact('newsShow'));
    }

   
}
