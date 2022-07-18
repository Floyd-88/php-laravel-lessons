<?php
namespace App\Http\Controllers\Admin\Work;


use App\Models\Work;
use App\Http\Filters\WorkFilter;
use App\Http\Requests\Work\FilterRequest;
use App\Http\Controllers\Work\BaseController;

class IndexController extends BaseController
{
public function __invoke(FilterRequest $request)
{
    $data = $request->validated();
    $filter = app()->make(WorkFilter::class, ['queryParams' => array_filter($data)]);

    $work = Work::filter($filter)->paginate(10);
    return view('admin.work.index', compact('work'));

    // $work = Work::find(2);
    // dd($work->language);

    // $language = Language::find(2);
    // dd($language->works);

    // $tag = Work::find(1);
    // dd($tag->tag_works);

    // $works = TagWork::find(2);
    // dd($works->works);
}
   
}
