<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
public function __invoke()
{
    $hobbie = Hobbie::all();
    return view('hobbie.index', compact('hobbie'));

    // $hobbie = Hobbie::find(1);
    // dd($hobbie->category_hobbie);

    // $category = Categoryhobbie::find(1);
    // dd($category->hobbies);

    // $tag = TagHobbie::find(2);
    // dd($tag->hobbie);

    // $tag = Hobbie::find(2);
    // dd($tag->hobbies);
}
   
}
