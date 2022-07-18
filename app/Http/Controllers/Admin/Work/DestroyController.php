<?php
namespace App\Http\Controllers\Admin\Work;




use App\Models\Work;
use App\Http\Controllers\Work\BaseController;

class DestroyController extends BaseController
{
    public function __invoke(Work $workShow)
    {
        $workShow->delete();
        return redirect()->route('admin.work.index');
    }

    
}
