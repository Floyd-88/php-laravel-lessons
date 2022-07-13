<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Http\Requests\Contacts\StoreRequest;
use App\Http\Controllers\Contacts\BaseController;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
{
    $contactArr = $request->validated();
    $this->service->store($contactArr);
    
    return redirect()->route('contacts.index'); 
}
  
}
