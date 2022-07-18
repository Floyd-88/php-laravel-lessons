<?php
namespace App\Http\Controllers\Admin\News;


use App\Models\News;
use App\Http\Controllers\News\BaseController;

class DestroyController extends BaseController
{
    public function __invoke(News $newsShow)
    {
        $newsShow->delete();
        return redirect()->route('admin.news.index');
    }

    
}
