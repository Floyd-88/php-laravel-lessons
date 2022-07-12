<?php

namespace App\Models;

use App\Models\TagHobbie;
use App\Models\CategoryHobbie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hobbie extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function category_hobbie() {
        return $this->belongsTo(CategoryHobbie::class);
    }

    public function hobbies() {
        return $this->belongsToMany(TagHobbie::class);
    }
}
