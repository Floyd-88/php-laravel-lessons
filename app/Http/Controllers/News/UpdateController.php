<?php
namespace App\Http\Controllers\News;


use App\Models\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, News $news)
{
    $newsArr = $request->validated();
    $tags = $newsArr['tags'];
    unset($newsArr['tags']);
    $news->update($newsArr);
    $news->tag_news()->sync($tags);
    return redirect()->route('news.show', $news->id);
}

   }
