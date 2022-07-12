<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{

    public function __invoke(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }
}
