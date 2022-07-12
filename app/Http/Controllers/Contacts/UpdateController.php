<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke(Contact $contact)
{
    $contactArr = request()->validate([
        'country' => 'string',
        'city' => 'string',
        'email' => 'string',
        'phone' => 'string',
    ]);
    $contact->update($contactArr);
    return redirect()->route('contacts.index', $contact->id);
}

   }
