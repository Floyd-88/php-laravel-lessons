<?php
namespace App\Http\Controllers\News;

use App\Models\News;
use App\Http\Controllers\News\BaseController;

class DestroyController extends BaseController
{
    public function __invoke(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }

    
}
