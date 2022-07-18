<?php
namespace App\Http\Filters;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class HobbieFilter extends AbstractFilter 
{
    public const NAME_HOBBIE = 'name_hobbie';
    public const CATEGORY_HOBBIE_ID = 'category_hobbie_id';

    public function getCallbacks():array {
        return [
            self::NAME_HOBBIE => [$this, 'name_hobbie'],
            self::CATEGORY_HOBBIE_ID => [$this, 'category_hobbie_id'],
        ];
    }
    public function name_hobbie(Builder $builder, $value) {
        $builder->where('name_hobbie', 'like', "%{$value}%");
    }
    public function category_hobbie_id(Builder $builder, $value) {
        $builder->where('category_hobbie_id', 'like', "%{$value}%");
    }
}