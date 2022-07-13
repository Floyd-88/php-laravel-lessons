<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Controllers\Controller;
use App\Http\Requests\Hobbie\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Hobbie $hobbie)
{
    $hobbieArr = $request->validated();
    $tags = $hobbieArr['tags'];
    unset($hobbieArr['tags']);
    $hobbie->update($hobbieArr);
    $hobbie->hobbies()->sync($tags);
    return redirect()->route('hobbies.show', $hobbie->id);
}

   }
