<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Http\Controllers\Contacts\BaseController;

class EditController extends BaseController
{

    public function __invoke(Contact $contact)
{
    return view('contact.edit', compact('contact'));
}
  
}
