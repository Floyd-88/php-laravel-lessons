<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Http\Controllers\Contacts\BaseController;

class CreateController extends BaseController
{
    public function __invoke()
{
    return view('contact.create');
}

   
}
