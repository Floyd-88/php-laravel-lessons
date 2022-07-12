<?php
namespace App\Http\Controllers\Work;


use App\Models\Work;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{

    public function __invoke()
{
    $work = request()->validate([
        'title_work' => 'string',
        'description_work' => 'string',
        'link' => '',
        'grade' => '',
        'language_id' => 'int',
        'tags'=> '',
    ]);
    $tags = $work['tags'];
    unset($work['tags']);

    $work = Work::create($work);
    $work->tag_works()->attach($tags);
    return redirect()->route('work.index');
}
  
}
