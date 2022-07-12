<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{

    public function __invoke()
{
    $hobbies = request()->validate([
        'name_hobbie' => 'string',
        'category_hobbie_id' => '',
        'tags' => '',
    ]);
    $tags = $hobbies['tags'];
    unset($hobbies['tags']);
    $hobbie = Hobbie::create($hobbies);
    $hobbie->hobbies()->attach($tags);
    // return $hobbies['category_hobbie_id'];
    return redirect()->route('hobbies.index');
}
  
}
