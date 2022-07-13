<?php
namespace App\Http\Controllers\Work;

use App\Models\Work;
use App\Http\Controllers\Work\BaseController;

class ShowController extends BaseController
{
    public function __invoke(Work $work)
    {
        return view('work.show', compact('work'));
    }

   
}
