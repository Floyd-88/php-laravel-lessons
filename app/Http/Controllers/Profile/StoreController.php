<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $profileArr = $request->validated();
        Profile::create($profileArr);
        return redirect()->route('profile.index');   
    }


}
