<?php
namespace App\Http\Controllers\Admin\Hobbie;


use App\Models\Hobbie;
use App\Models\TagHobbie;
use App\Models\CategoryHobbie;
use App\Http\Controllers\Hobbie\BaseController;

class EditController extends BaseController
{

    public function __invoke(Hobbie $hobbieEdit)
{
    $category = CategoryHobbie::all();
    $tags = TagHobbie::all();
    return view('admin.hobbie.edit', compact('hobbieEdit'), compact('category', 'tags'));
}
  
}
