<?php

namespace App\Models;

use App\Models\TagNews;
use App\Models\CategoryNews;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function category_news() {
        return $this->belongsTo(CategoryNews::class);
    }

    public function tag_news() {
        return $this->belongsToMany(TagNews::class);
    }
}
