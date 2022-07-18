<?php
namespace App\Http\Controllers\Admin\Work;


use App\Models\Work;
use App\Models\TagWork;
use App\Models\Language;
use App\Http\Controllers\Work\BaseController;

class EditController extends BaseController
{

    public function __invoke(Work $workEdit)
{
    $category = Language::all();
        $tags = TagWork::all();
        return view('admin.work.edit', compact('workEdit'), compact('category', 'tags'));
}
  
}
