<?php
namespace App\Http\Controllers\Work;


use App\Models\Work;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke(Work $work)
{
    $workArr = request()->validate([
        'title_work' => 'string',
        'description_work' => 'string',
        'link' => '',
        'grade' => '',
        'language_id' => 'int',
        'tags'=> '',
    ]); 
    $tags = $workArr['tags'];
    unset($workArr['tags']);
    $work->update($workArr);
    $work->tag_works()->sync($tags);
    return redirect()->route('work.show', $work->id);
}

   }
