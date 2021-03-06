<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Models\TagHobbie;
use App\Models\CategoryHobbie;
use App\Http\Controllers\Hobbie\BaseController;

class EditController extends BaseController
{

    public function __invoke(Hobbie $hobbie)
{
    $category = CategoryHobbie::all();
    $tags = TagHobbie::all();
    return view('hobbie.edit', compact('hobbie'), compact('category', 'tags'));
}
  
}
