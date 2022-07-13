<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\Profile\UpdateRequest;
use App\Http\Controllers\Profile\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Profile $profile)
    {
        $profileArr = $request->validated();
        $this->service->update($profile, $profileArr);
        
        return redirect()->route('profile.index', $profile->id);
    }
}
