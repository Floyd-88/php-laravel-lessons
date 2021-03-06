<?php
namespace App\Http\Controllers\Work;

use App\Models\Work;
use App\Models\TagWork;
use App\Models\Language;
use App\Http\Controllers\Work\BaseController;

class EditController extends BaseController
{

    public function __invoke(Work $work)
{
    $category = Language::all();
        $tags = TagWork::all();
        return view('work.edit', compact('work'), compact('category', 'tags'));
}
  
}
