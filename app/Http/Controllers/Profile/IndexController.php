<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
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
