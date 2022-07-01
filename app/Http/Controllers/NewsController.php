<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function showNews(){
    $news = News::find(1);
    dump($news->name_news);
    dump($news->aricles);
    dump($news->img);
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
}
