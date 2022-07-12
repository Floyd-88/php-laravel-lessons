<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
{
    return view('contact.create');
}

   
}
