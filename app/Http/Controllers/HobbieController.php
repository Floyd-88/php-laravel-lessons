<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Hobbie;
use App\Models\TagHobbie;
use Illuminate\Http\Request;
use App\Models\CategoryHobbie;

class HobbieController extends Controller
{
    

    public function index() {
        $hobbie = Hobbie::all();
        return view('hobbie.index', compact('hobbie'));

        // $hobbie = Hobbie::find(1);
        // dd($hobbie->category_hobbie);

        // $category = Categoryhobbie::find(1);
        // dd($category->hobbies);

        // $tag = TagHobbie::find(2);
        // dd($tag->hobbie);

        // $tag = Hobbie::find(2);
        // dd($tag->hobbies);
    }

    public function create() {
        $category = CategoryHobbie::all();
        $tags = TagHobbie::all();
        return view('hobbie.create', compact('category', 'tags'));
    }

    public function store() {
        $hobbies = request()->validate([
            'name_hobbie' => 'string',
            'category_hobbie_id' => '',
            'tags' => '',
        ]);
        $tags = $hobbies['tags'];
        unset($hobbies['tags']);
        $hobbie = Hobbie::create($hobbies);
        $hobbie->hobbies()->attach($tags);
        // return $hobbies['category_hobbie_id'];
        return redirect()->route('hobbies.index');
    }

    public function show(Hobbie $hobbie) {
        return view('hobbie.show', compact('hobbie'));
    }

    public function edit(Hobbie $hobbie) {
        $category = CategoryHobbie::all();
        $tags = TagHobbie::all();
        return view('hobbie.edit', compact('hobbie'), compact('category', 'tags'));
    }

    public function update(Hobbie $hobbie) {
        $hobbieArr = request()->validate([
            'name_hobbie' => 'string',
            'category_hobbie_id' => 'int',
            'tags' => ''
        ]);
        $tags = $hobbieArr['tags'];
        unset($hobbieArr['tags']);
        $hobbie->update($hobbieArr);
        $hobbie->hobbies()->sync($tags);
        return redirect()->route('hobbies.show', $hobbie->id);
    }
    
    public function destroy(Hobbie $hobbie) {
        $hobbie->delete();
        return redirect()->route('hobbies.index');
    }





    // public function createHobbie() {
    //     $addHobbie = [
    //     ['name_hobbie' => 'смотреть фильмы'],
    //     ['name_hobbie' => 'читать комиксы'],
    //     ['name_hobbie' => 'гулять на улице'],
    //     ];

    //     foreach($addHobbie as $elem) {
    //         Hobbie::create($elem);
    //     }
    // }

    // public function showHobbie(){
    //     $hobbie = Hobbie::all();
  
    //     return view('hobbie', compact('hobbie'));
    // }

    // public function updateHobbie() {
    //     $updateStr = Hobbie::find(4);
        
    //     $updateStr->update(
    //         [
    //             'name_hobbie' => 'Играть в компьютерные игры',
    //         ]
    //         );
    // }

    // public function deleteHobbie() {
    //     $deleteStr = Hobbie::find(2);
    //     $deleteStr->delete();
    // }

    // public function firstOrCreateHobbie() {
    //     $hobbieArr = Hobbie::firstOrCreate([
    //         'name_hobbie' => 'читать комиксы',
    //     ], [
    //         'name_hobbie' => 'играть в настольные игры',
    //     ]);

    //     dump($hobbieArr);
    // }

    // public function updateOrCreateHobbie() {
    //     $hobbieArr = Hobbie::updateOrCreate([
    //         'name_hobbie' => 'читать комиксы',
    //     ], [
    //         'name_hobbie' => 'читать книги',
    //     ]);

    //     dump($hobbieArr);
    // }
}
