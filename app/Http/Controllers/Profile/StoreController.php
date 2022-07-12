<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function __invoke()
    {
        $profileArr = request()->validate([
            'name' => 'string',
            'age' => 'int',
            'city' => 'string',
            'profession' => 'string',
            'about_me' => 'string',
            'ava' => '',
        ]);
        Profile::create($profileArr);
        return redirect()->route('profile.index');   
    }


}
