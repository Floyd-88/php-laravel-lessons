<?php
namespace App\Http\Controllers\Work;


use App\Models\Work;
use App\Http\Controllers\Controller;
use App\Http\Requests\Work\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Work $work)
{
    $workArr = $request->validated(); 
    $tags = $workArr['tags'];
    unset($workArr['tags']);
    $work->update($workArr);
    $work->tag_works()->sync($tags);
    return redirect()->route('work.show', $work->id);
}

   }
