<?php
namespace App\Http\Controllers\Work;

use App\Models\Work;
use App\Http\Controllers\Work\BaseController;
use App\Http\Requests\Work\StoreRequest;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
{
    $work = $request->validated();
    $this->servise->store($work);
    
    return redirect()->route('work.index');
}
  
}
