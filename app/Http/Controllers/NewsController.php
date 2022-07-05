<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function showNews(){
    $news = News::all();
    
    return view('news', compact('news'));
    }

    public function createNews() {
        $arrNews = [
        [
        'name_news' => 'я изучаю laravel',
        'aricles' => 'Я разбираюсь в том как добавдять данные в БД',
        ],
        [
        'name_news' => 'я продолжаю изучаю laravel',
        'aricles' => 'Я закрепляю тему как добавлять данные в БД',
        ],
    ];

    foreach ($arrNews as $item) {
        News::create($item);
    }
    }

    public function updateNews() {
        $newsStr = News::find(3);

        $newsStr->update(
            [
                'name_news' => 'изучение update',
                'aricles' => 'Теперь я изучаю обновление данных в БД',
            ]
            );
    }

    public function deleteNews() {
        $newsStr = News::find(2);
        $newsStr->delete();
    }

    public function firstOrCreateNews() {
        $newsArr = News::firstOrCreate([
            'id' => '3'
        ], ['name_news' => 'изучение laravel часть 3',
            'aricles' => 'я изучаю обновление строк в БД']);

        dump($newsArr);
    }

    public function updateOrCreateNews() {
        $newsArr = News::updateOrCreate([
            'id' => '3'
        ], ['name_news' => 'изучение laravel часть 3',
            'aricles' => 'я изучаю обновление или создание строк в БД']);

        dump($newsArr);
    }
}
