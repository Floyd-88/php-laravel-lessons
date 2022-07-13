<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Profile\BaseController;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('profile.create');
    }
}
