<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Requests\Hobbie\StoreRequest;
use App\Http\Controllers\Hobbie\BaseController;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
{
    $hobbies = $request->validated();

    $this->service->store($hobbies);

    return redirect()->route('hobbies.index');
}
  
}
