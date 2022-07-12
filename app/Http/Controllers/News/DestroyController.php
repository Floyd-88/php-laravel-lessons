<?php
namespace App\Http\Controllers\News;


use App\Models\News;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }

    
}
