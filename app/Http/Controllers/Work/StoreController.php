<?php
namespace App\Http\Controllers\Work;


use App\Models\Work;
use App\Http\Controllers\Controller;
use App\Http\Requests\Work\StoreRequest;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
{
    $work = $request->validated();
    $tags = $work['tags'];
    unset($work['tags']);

    $work = Work::create($work);
    $work->tag_works()->attach($tags);
    return redirect()->route('work.index');
}
  
}
