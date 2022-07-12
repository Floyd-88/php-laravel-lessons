<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke(Profile $profile)
    {
        $profileArr = request()->validate([
            'name' => 'string',
            'age' => 'int',
            'city' => 'string',
            'profession' => 'string',
            'about_me' => 'string',
            'ava' => '',
        ]);
        $profile->update($profileArr);
        return redirect()->route('profile.index', $profile->id);
    }
}
