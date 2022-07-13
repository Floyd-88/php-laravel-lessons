<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\Profile\StoreRequest;
use App\Http\Controllers\Profile\BaseController;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $profileArr = $request->validated();
        $this->service->store($profileArr); 
        return redirect()->route('profile.index');   
    }


}
