<?php
namespace App\Http\Controllers\Admin\News;


use App\Models\News;
use App\Http\Filters\NewsFilter;
use App\Http\Requests\News\FilterRequest;
use App\Http\Controllers\News\BaseController;

class IndexController extends BaseController
{
public function __invoke(FilterRequest $request)
{
    $data = $request->validated();
    $filter = app()->make(NewsFilter::class, ['queryParams' => array_filter($data)]);
    $news = News::filter($filter)->paginate(10);
    return view('admin.news.index', compact('news'));

    // $news = News::find(1);
    // dd($news->category_news);

    // $category = CategoryNews::find(1);
    // dd($category->news);

    // $tag = News::find(1);
    // dd($tag->tag_news);

    // $news= TagNews::find(2);
    // dd($news->news);
}
   
}
