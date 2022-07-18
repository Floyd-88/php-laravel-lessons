<?php
namespace App\Http\Controllers\Admin\Hobbie;


use App\Models\Hobbie;
use App\Http\Requests\Hobbie\UpdateRequest;
use App\Http\Controllers\Hobbie\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Hobbie $hobbie)
{
    $hobbieArr = $request->validated();
    $this->service->update($hobbie, $hobbieArr);
   
    return redirect()->route('admin.hobbie.show', $hobbie->id);
}

   }
