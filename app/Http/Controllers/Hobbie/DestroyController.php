<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Controllers\Hobbie\BaseController;

class DestroyController extends BaseController
{
    public function __invoke(Hobbie $hobbie)
    {
        $hobbie->delete();
        return redirect()->route('hobbies.index');
    }

    
}
