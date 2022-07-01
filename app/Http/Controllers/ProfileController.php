<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile(){
    $profile = Profile::find(1);
    dump($profile->name);
    dump($profile->age);
    dump($profile->city);
    dump($profile->about_me);
    dump($profile->ava);;
    }
}
