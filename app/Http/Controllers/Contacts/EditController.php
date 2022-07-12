<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Http\Controllers\Controller;

class EditController extends Controller
{

    public function __invoke(Contact $contact)
{
    return view('contact.edit', compact('contact'));
}
  
}
