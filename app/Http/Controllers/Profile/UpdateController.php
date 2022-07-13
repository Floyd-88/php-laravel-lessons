<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Profile $profile)
    {
        $profileArr = $request->validated();
        $profile->update($profileArr);
        return redirect()->route('profile.index', $profile->id);
    }
}
