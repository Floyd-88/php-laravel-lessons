<?php
namespace App\Http\Controllers\News;

use App\Models\News;
use App\Http\Requests\News\StoreRequest;
use App\Http\Controllers\News\BaseController;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
{
    $news = $request->validated();
    $this->service->store($news);
  
    return redirect()->route('news.index');
}
  
}
