<?php

namespace App\Http\Controllers;

use App\Models\Hobbie;
use Illuminate\Http\Request;

class HobbieController extends Controller
{
    public function showHobbie(){
        $hobbie = Hobbie::all();
  
        return view('hobbie', compact('hobbie'));
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

    public function deleteHobbie() {
        $deleteStr = Hobbie::find(2);
        $deleteStr->delete();
    }

    public function firstOrCreateHobbie() {
        $hobbieArr = Hobbie::firstOrCreate([
            'name_hobbie' => 'читать комиксы',
        ], [
            'name_hobbie' => 'играть в настольные игры',
        ]);

        dump($hobbieArr);
    }

    public function updateOrCreateHobbie() {
        $hobbieArr = Hobbie::updateOrCreate([
            'name_hobbie' => 'читать комиксы',
        ], [
            'name_hobbie' => 'читать книги',
        ]);

        dump($hobbieArr);
    }
}
