<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile(){
    $profile = Profile::find(1);
    return view('profile', compact('profile'));
    }

    public function updateProfile() {
        $profileStr = Profile::find(1);
        $profileStr->update(['profession' => 'programmer']);
    }
}
