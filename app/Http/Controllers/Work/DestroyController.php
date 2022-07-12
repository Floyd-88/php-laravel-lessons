<?php
namespace App\Http\Controllers\Work;



use App\Models\Work;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(Work $work)
    {
        $work->delete();
        return redirect()->route('work.index');
    }

    
}
