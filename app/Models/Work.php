<?php

namespace App\Models;

use App\Models\TagWork;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\Filterable;

class Work extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;
    

    protected $guarded = false;

    public function language() {
        return $this->belongsTo(Language::class);
    }

    public function tag_works() {
        return $this->belongsToMany(TagWork::class);
    }
}
