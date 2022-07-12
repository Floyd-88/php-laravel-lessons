<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\TagWork;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WorkController extends Controller
{

    public function index() {

        $work = Work::all();
        return view('work.index', compact('work'));

        // $work = Work::find(2);
        // dd($work->language);

        // $language = Language::find(2);
        // dd($language->works);

        // $tag = Work::find(1);
        // dd($tag->tag_works);

        // $works = TagWork::find(2);
        // dd($works->works);
    }

    public function create() {
        $category = Language::all();
        $tags = TagWork::all();
        return view('work.create', compact('category', 'tags'));
    }

    public function store() {
        $work = request()->validate([
            'title_work' => 'string',
            'description_work' => 'string',
            'link' => '',
            'grade' => '',
            'language_id' => 'int',
            'tags'=> '',
        ]);
        $tags = $work['tags'];
        unset($work['tags']);

        $work = Work::create($work);
        $work->tag_works()->attach($tags);
        return redirect()->route('work.index');
    }

    public function show(Work $work) {
        return view('work.show', compact('work'));
    }

    public function edit(Work $work) {
        $category = Language::all();
        $tags = TagWork::all();
        return view('work.edit', compact('work'), compact('category', 'tags'));
    }

    public function update(Work $work) {
        $workArr = request()->validate([
            'title_work' => 'string',
            'description_work' => 'string',
            'link' => '',
            'grade' => '',
            'language_id' => 'int',
            'tags'=> '',
        ]); 
        $tags = $workArr['tags'];
        unset($workArr['tags']);
        $work->update($workArr);
        $work->tag_works()->sync($tags);
        return redirect()->route('work.show', $work->id);
    }

    public function destroy(Work $work) {
        $work->delete();
        return redirect()->route('work.index');
    }






    // public function showWork(){
    // $work = Work::all();
        
    // return view('work', compact('work'));
    // }

    // public function createWork() {
    //     $arrWork = [
    //         [
    //         'title_work' => 'Работа №5',
    //         'description_work' => 'Моя пятая работа',
    //         ],
    //         [
    //         'title_work' => 'Работа №6',
    //         'description_work' => 'Моя шестая работа',
    //         ],
    //         [
    //         'title_work' => 'Работа №7',
    //         'description_work' => 'Моя седьмая работа',
    //         ],
    //         [
    //         'title_work' => 'Работа №8',
    //         'description_work' => 'Моя восьмая работа',
    //         ],
    //     ];

    //     foreach($arrWork as $elem) {
    //         Work::create($elem);
    //     }
    // }

    // public function updateWork() {
    //     $workStr = Work::find(5);

    //     $workStr->update(
    //         [
    //             'grade' => '4',
    //         ]
    //         );
    // }

    // public function deleteWork() {
    //     $workStr = Work::withTrashed()->find(2);
    //     $workStr->restore();
    // }

    // public function firstOrCreateWork() {
    //     $workArr = Work::firstOrCreate(  [
    //         'title_work' => 'Работа №9',
    //     ], 
    //     [
    //         'title_work' => 'Работа №9',
    //         'description_work' => 'Моя девятая работа'
    //     ]);
    //     dump($workArr);
    // }

    // public function updateOrCreateWork() {
    //     $workArr = Work::updateOrCreate(  [
    //         'title_work' => 'Работа №9',
    //     ], 
    //     [
    //         'title_work' => 'Работа №10',
    //         'description_work' => 'Моя десятая работа'
    //     ]);
    //     dump($workArr);
    // }
}
