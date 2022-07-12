<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(Hobbie $hobbie)
    {
        $hobbie->delete();
        return redirect()->route('hobbies.index');
    }

    
}
