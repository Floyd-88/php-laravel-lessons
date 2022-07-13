<?php
namespace App\Http\Controllers\News;

use App\Models\News;
use App\Http\Controllers\News\BaseController;

class ShowController extends BaseController
{
    public function __invoke(News $news)
    {
        return view('news.show', compact('news'));
    }

   
}
