<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Requests\Hobbie\StoreRequest;
use App\Http\Resources\Hobbie\HobbieResource;
use App\Http\Controllers\Hobbie\BaseController;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
{
    $hobbies = $request->validated();

    $hobbies = $this->service->store($hobbies);
    return new HobbieResource($hobbies);
    
    // return redirect()->route('hobbies.index');
} 
}
