<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{

    public function __invoke()
{
    $contactArr = request()->validate([
        'country' => 'string',
        'city' => 'string',
        'email' => 'string',
        'phone' => 'string',
    ]);
    Contact::create($contactArr);
    return redirect()->route('contacts.index'); 
}
  
}
