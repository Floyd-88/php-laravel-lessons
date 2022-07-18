<?php
namespace App\Http\Filters;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class NewsFilter extends AbstractFilter
{
    public const NAME_NEWS = 'name_news';
    public const DISCRIPTION = 'discription';
    public const IMG = 'img';
    public const CATEGORY_NEWS_ID = 'category_news_id';

    public function getCallbacks():array {
        return [
            self::NAME_NEWS => [$this, 'name_news'],
            self::DISCRIPTION => [$this, 'discription'],
            self::IMG => [$this, 'img'],
            self::CATEGORY_NEWS_ID => [$this, 'category_news_id'],
        ];
    }

    public function name_news(Builder $builder, $value) {
        $builder->where('name_news', 'like', "%{$value}%");
    }
    public function discriptionv(Builder $builder, $value) {
        $builder->where('discriptionv', 'like', "%{$value}%");
    }
    public function img(Builder $builder, $value) {
        $builder->where('img', 'like', "%{$value}%");
    }
    public function category_news_id(Builder $builder, $value) {
        $builder->where('category_news_id', 'like', "%{$value}%");
    }
}