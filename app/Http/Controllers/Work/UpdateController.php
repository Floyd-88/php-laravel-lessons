<?php
namespace App\Http\Controllers\Work;

use App\Models\Work;
use App\Http\Controllers\Work\BaseController;
use App\Http\Requests\Work\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Work $work)
{
    $workArr = $request->validated(); 
    $this->service->update($work, $workArr);
   
    return redirect()->route('work.show', $work->id);
}

   }
