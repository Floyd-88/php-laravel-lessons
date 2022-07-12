<?php

namespace App\Models;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TagNews extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function news() {
        return $this->belongsToMany(News::class);
    }
}
