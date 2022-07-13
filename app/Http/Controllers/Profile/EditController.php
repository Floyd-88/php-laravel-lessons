<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Profile\BaseController;

class EditController extends BaseController
{

    public function __invoke(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }
}
