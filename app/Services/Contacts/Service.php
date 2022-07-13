<?php
namespace App\Services\Contacts;

use App\Models\Contact;

class Service 
{
    public function store($contactArr) {
        Contact::create($contactArr);
    }

    public function update($contact, $contactArr) {
        $contact->update($contactArr);
    }
}