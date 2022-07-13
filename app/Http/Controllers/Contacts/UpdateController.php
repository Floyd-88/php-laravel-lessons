<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact;
use App\Http\Requests\Contacts\UpdateRequest;
use App\Http\Controllers\Contacts\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Contact $contact)
{
    $contactArr = $request->validated();
    $this->service->update($contact, $contactArr);
    
    return redirect()->route('contacts.index', $contact->id);
}

   }
