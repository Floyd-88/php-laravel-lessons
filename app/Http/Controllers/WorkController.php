<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function showWork(){
    $work = Work::where('title_work', 'Работа №1')->first();
        dump($work->description_work);
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
        $workStr = Work::find(4);

        $workStr->update(
            [
                'title_work' => 'Новая работа №4',
                'description_work' => 'Обновление моей четвертой работы',
            ]
            );
    }
}
