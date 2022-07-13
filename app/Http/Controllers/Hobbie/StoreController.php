<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Controllers\Controller;
use App\Http\Requests\Hobbie\StoreRequest;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
{
    $hobbies = $request->validated();
    $tags = $hobbies['tags'];
    unset($hobbies['tags']);
    $hobbie = Hobbie::create($hobbies);
    $hobbie->hobbies()->attach($tags);
    // return $hobbies['category_hobbie_id'];
    return redirect()->route('hobbies.index');
}
  
}
