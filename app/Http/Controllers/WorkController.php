<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function showWork(){
    $work = Work::all();
        
    return view('work', compact('work'));
    }

    public function createWork() {
        $arrWork = [
            [
            'title_work' => 'Работа №5',
            'description_work' => 'Моя пятая работа',
            ],
            [
            'title_work' => 'Работа №6',
            'description_work' => 'Моя шестая работа',
            ],
            [
            'title_work' => 'Работа №7',
            'description_work' => 'Моя седьмая работа',
            ],
            [
            'title_work' => 'Работа №8',
            'description_work' => 'Моя восьмая работа',
            ],
        ];

        foreach($arrWork as $elem) {
            Work::create($elem);
        }
    }

    public function updateWork() {
        $workStr = Work::find(5);

        $workStr->update(
            [
                'grade' => '4',
            ]
            );
    }

    public function deleteWork() {
        $workStr = Work::withTrashed()->find(2);
        $workStr->restore();
    }

    public function firstOrCreateWork() {
        $workArr = Work::firstOrCreate(  [
            'title_work' => 'Работа №9',
        ], 
        [
            'title_work' => 'Работа №9',
            'description_work' => 'Моя девятая работа'
        ]);
        dump($workArr);
    }

    public function updateOrCreateWork() {
        $workArr = Work::updateOrCreate(  [
            'title_work' => 'Работа №9',
        ], 
        [
            'title_work' => 'Работа №10',
            'description_work' => 'Моя десятая работа'
        ]);
        dump($workArr);
    }
}
