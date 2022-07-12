<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke(Hobbie $hobbie)
{
    $hobbieArr = request()->validate([
        'name_hobbie' => 'string',
        'category_hobbie_id' => 'int',
        'tags' => ''
    ]);
    $tags = $hobbieArr['tags'];
    unset($hobbieArr['tags']);
    $hobbie->update($hobbieArr);
    $hobbie->hobbies()->sync($tags);
    return redirect()->route('hobbies.show', $hobbie->id);
}

   }
