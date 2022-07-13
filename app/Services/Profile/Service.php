<?php
namespace App\Services\Profile;

use App\Models\Profile;

class Service 
{
    public function store($profileArr) {
        Profile::create($profileArr);
    }

    public function update($profile, $profileArr) {
        $profile->update($profileArr);
    }
}