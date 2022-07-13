<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contacts\StoreRequest;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
{
    $contactArr = $request->validated();
    Contact::create($contactArr);
    return redirect()->route('contacts.index'); 
}
  
}
