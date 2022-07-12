<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
public function __invoke()
{
    $contact = Contact::find(1);
    if(!empty($contact)) {
        return view('contact.index', compact('contact'));
    } else {
        return redirect()->route('contacts.create');
    }
}
   
}
