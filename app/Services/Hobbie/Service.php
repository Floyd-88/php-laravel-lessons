<?php
namespace App\Services\Hobbie;

use App\Models\Hobbie;

class Service 
{
    public function store($hobbies) {

        $tags = $hobbies['tags'];
        unset($hobbies['tags']);
        $hobbie = Hobbie::create($hobbies);
        $hobbie->hobbies()->attach($tags);
        // return $hobbies['category_hobbie_id'];
    }

    public function update($hobbie, $hobbieArr) {
        $tags = $hobbieArr['tags'];
        unset($hobbieArr['tags']);
        $hobbie->update($hobbieArr);
        $hobbie->hobbies()->sync($tags);
    }
}