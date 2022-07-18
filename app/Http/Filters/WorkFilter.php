<?php
namespace App\Http\Filters;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class WorkFilter extends AbstractFilter
{
    public const TITLE_WORK = 'title_work';
    public const DISCRIPTION_WORK = 'description_work';
    public const LINK = 'link';
    public const GRADE = 'grade'; 
    public const LANGUAGE_ID = 'language_id';


    public function getCallbacks():array {
        return [
            self::TITLE_WORK => [$this, 'title_work'],
            self::DISCRIPTION_WORK => [$this, 'description_work'],
            self::LINK => [$this, 'link'],
            self::GRADE => [$this, 'grade'],
            self::LANGUAGE_ID => [$this, 'language_id'],
        ];
    }

    public function title_work(Builder $builder, $value) {
        $builder->where('title_work', 'like', "%{$value}%");
    }
    public function description_work(Builder $builder, $value) {
        $builder->where('description_work', 'like', "%{$value}%");
    }
    public function link(Builder $builder, $value) {
        $builder->where('link', 'like', "%{$value}%");
    }
    public function grade(Builder $builder, $value) {
        $builder->where('grade', 'like', "%{$value}%");
    }
    public function language_id(Builder $builder, $value) {
        $builder->where('language_id', 'like', "%{$value}%");
    }
}