<?php
namespace App\Http\Controllers\Admin\Hobbie;

use App\Models\Tag;
use App\Models\Hobbie;
use App\Http\Controllers\Hobbie\BaseController;

class ShowController extends BaseController
{
    public function __invoke(Hobbie $hobbieShow)
    {
       
        return view('admin.hobbie.show', compact('hobbieShow'));
    }

   
}
