<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contacts\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Contact $contact)
{
    $contactArr = $request->validated();
    $contact->update($contactArr);
    return redirect()->route('contacts.index', $contact->id);
}

   }
