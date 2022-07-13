<?php
namespace App\Http\Controllers\Work;

use App\Models\Work;
use App\Http\Controllers\Work\BaseController;

class IndexController extends BaseController
{
public function __invoke()
{
    $work = Work::all();
    return view('work.index', compact('work'));

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
