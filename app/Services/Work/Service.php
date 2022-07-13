<?php
namespace App\Services\Work;

use App\Models\Work;
use App\Models\Profile;

class Service 
{
    public function store($work) {
        $tags = $work['tags'];
        unset($work['tags']);
        $work = Work::create($work);
        $work->tag_works()->attach($tags);
    }

    public function update($work, $workArr) {
        $tags = $workArr['tags'];
    unset($workArr['tags']);
    $work->update($workArr);
    $work->tag_works()->sync($tags);
    }
}