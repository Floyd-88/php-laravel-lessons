<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TagWork extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function works() {
        return $this->belongsToMany(Work::class);
    }
}
