<?php
namespace App\Http\Controllers\Admin\Work;


use App\Models\Work;
use App\Http\Controllers\Work\BaseController;

class ShowController extends BaseController
{
    public function __invoke(Work $workShow)
    {
        return view('admin.work.show', compact('workShow'));
    }

   
}
