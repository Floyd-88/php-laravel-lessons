<?php
namespace App\Http\Controllers\Work;



use App\Models\TagWork;
use App\Models\Language;
use App\Http\Controllers\Work\BaseController;

class CreateController extends BaseController
{
    public function __invoke()
{
    $category = Language::all();
    $tags = TagWork::all();
    return view('work.create', compact('category', 'tags'));
}

   
}
