<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $profile = Profile::where('name', 'Илья')->first();
        if(!empty($profile)) {
            return view('profile.index', compact('profile'));
        } else {
            return redirect()->route('profile.create');
        }
           
    }

    public function create() {
        return view('profile.create');
    }

    public function store() {
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

    public function edit(Profile $profile) {
        return view('profile.edit', compact('profile'));
    }

    public function update(Profile $profile) {
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

    // public function showProfile(){
    // $profile = Profile::find(1);
    // return view('profile', compact('profile'));
    // }

    // public function updateProfile() {
    //     $profileStr = Profile::find(1);
    //     $profileStr->update(['profession' => 'programmer']);
    // }
}
