<?php
namespace App\Http\Controllers\Work;



use App\Models\Work;
use App\Http\Controllers\Work\BaseController;

class DestroyController extends BaseController
{
    public function __invoke(Work $work)
    {
        $work->delete();
        return redirect()->route('work.index');
    }

    
}
