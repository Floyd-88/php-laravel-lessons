<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\TagHobbie;
use App\Models\CategoryHobbie;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
{
    $category = CategoryHobbie::all();
    $tags = TagHobbie::all();
    return view('hobbie.create', compact('category', 'tags'));
}

   
}
