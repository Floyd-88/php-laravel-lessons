<?php
namespace App\Http\Controllers\Admin\Hobbie;


use App\Models\Hobbie;
use App\Http\Controllers\Hobbie\BaseController;

class DestroyController extends BaseController
{
    public function __invoke(Hobbie $hobbieShow)
    {
        $hobbieShow->delete();
        return redirect()->route('admin.hobbie.index');
    }

    
}
