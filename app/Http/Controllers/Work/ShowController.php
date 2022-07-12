<?php
namespace App\Http\Controllers\Work;


use App\Models\Work;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke(Work $work)
    {
        return view('work.show', compact('work'));
    }

   
}
