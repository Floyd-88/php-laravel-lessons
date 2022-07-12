<?php
namespace App\Http\Controllers\News;



use App\Models\News;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke(News $news)
    {
        return view('news.show', compact('news'));
    }

   
}
