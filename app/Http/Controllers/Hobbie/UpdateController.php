<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Requests\Hobbie\UpdateRequest;
use App\Http\Controllers\Hobbie\BaseController;
use App\Http\Resources\Hobbie\HobbieResource;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Hobbie $hobbie)
{
    $hobbieArr = $request->validated();
    $hobbie = $this->service->update($hobbie, $hobbieArr);
   
    // return redirect()->route('hobbies.show', $hobbie->id);
    return new HobbieResource($hobbie);
}

   }
