<?php

namespace App\Http\Controllers;

use App\Models\Hobbie;
use Illuminate\Http\Request;

class HobbieController extends Controller
{
    public function showHobbie(){
        $hobbie = Hobbie::all();
        foreach($hobbie as $elem) {
            dump($elem->name_hobbie);
        }        
    }

    public function createHobbie() {
        $addHobbie = [
        ['name_hobbie' => 'смотреть фильмы'],
        ['name_hobbie' => 'читать комиксы'],
        ['name_hobbie' => 'гулять на улице'],
        ];

        foreach($addHobbie as $elem) {
            Hobbie::create($elem);
        }
    }

    public function updateHobbie() {
        $updateStr = Hobbie::find(4);
        
        $updateStr->update(
            [
                'name_hobbie' => 'Играть в компьютерные игры',
            ]
            );
    }
}
