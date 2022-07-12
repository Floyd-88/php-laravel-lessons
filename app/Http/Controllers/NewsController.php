<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\TagNews;
use App\Models\CategoryNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::all();
        return view('news.index', compact('news'));

        // $news = News::find(1);
        // dd($news->category_news);

        // $category = CategoryNews::find(1);
        // dd($category->news);

        // $tag = News::find(1);
        // dd($tag->tag_news);

        // $news= TagNews::find(2);
        // dd($news->news);
    }

    public function create() {
        $category = CategoryNews::all();
        $tags = TagNews::all();
        return view('news.create', compact('category', 'tags'));
    }

    public function store() {
        $news = request()->validate([
            'name_news' => 'string',
            'discription' => 'string',
            'img' => '',
            'category_news_id' => '',
            'tags' => '',
        ]);
        $tags = $news['tags'];
        unset($news['tags']);
        $news = News::create($news);
        $news->tag_news()->attach($tags);
        return redirect()->route('news.index');
    }

    public function show(News $news) {
        return view('news.show', compact('news'));
        
    }

    public function edit(News $news) {
        $category = CategoryNews::all();
        $tags = TagNews::all();
        return view('news.edit', compact('news'), compact('category', 'tags'));        
    }

    public function update(News $news) {
        $newsArr = request()->validate([
            'name_news' => 'string',
            'discription' => 'string',
            'img' => '',
            'category_news_id' => 'int',
            'tags' => '',
        ]);
        $tags = $newsArr['tags'];
        unset($newsArr['tags']);
        $news->update($newsArr);
        $news->tag_news()->sync($tags);
        return redirect()->route('news.show', $news->id);
        
    }

    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('news.index');
    }



    // public function showNews(){
    // $news = News::all();
    
    // return view('news', compact('news'));
    // }

    // public function createNews() {
    //     $arrNews = [
    //     [
    //     'name_news' => 'я изучаю laravel',
    //     'aricles' => 'Я разбираюсь в том как добавдять данные в БД',
    //     ],
    //     [
    //     'name_news' => 'я продолжаю изучаю laravel',
    //     'aricles' => 'Я закрепляю тему как добавлять данные в БД',
    //     ],
    // ];

    // foreach ($arrNews as $item) {
    //     News::create($item);
    // }
    // }

    // public function updateNews() {
    //     $newsStr = News::find(3);

    //     $newsStr->update(
    //         [
    //             'name_news' => 'изучение update',
    //             'aricles' => 'Теперь я изучаю обновление данных в БД',
    //         ]
    //         );
    // }

    // public function deleteNews() {
    //     $newsStr = News::find(2);
    //     $newsStr->delete();
    // }

    // public function firstOrCreateNews() {
    //     $newsArr = News::firstOrCreate([
    //         'id' => '3'
    //     ], ['name_news' => 'изучение laravel часть 3',
    //         'aricles' => 'я изучаю обновление строк в БД']);

    //     dump($newsArr);
    // }

    // public function updateOrCreateNews() {
    //     $newsArr = News::updateOrCreate([
    //         'id' => '3'
    //     ], ['name_news' => 'изучение laravel часть 3',
    //         'aricles' => 'я изучаю обновление или создание строк в БД']);

    //     dump($newsArr);
    // }
}
