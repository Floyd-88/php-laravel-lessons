<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Profile\BaseController;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $profile = Profile::where('name', 'Илья')->first();
        if(!empty($profile)) {
            return view('profile.index', compact('profile'));
        } else {
            return redirect()->route('profile.create');
        }
    }
}
