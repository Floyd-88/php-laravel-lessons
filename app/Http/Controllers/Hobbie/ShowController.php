<?php
namespace App\Http\Controllers\Hobbie;


use App\Models\Tag;
use App\Models\Hobbie;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke(Hobbie $hobbie)
    {
        return view('hobbie.show', compact('hobbie'));
    }

   
}
