<?php
namespace App\Http\Controllers\Admin\News;


use App\Models\News;
use App\Http\Requests\News\UpdateRequest;
use App\Http\Controllers\News\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, News $news)
{
    $newsArr = $request->validated();
    $this->service->update($news, $newsArr);
    return redirect()->route('admin.news.show', $news->id);
}

   }
