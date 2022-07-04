<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function showContacts(){
        $contact = Contact::find(1);
        dump($contact->adres);
        dump($contact->email);
        dump($contact->phone);
    } 

    public function createContacts() {
        $addContacts = [
        ['country' => 'Russia',
        'city' => 'Stavropol',
        'email' => 'ila@mail.com',
        'phone' => '450-533'],
        ];

        foreach($addContacts as $elem) {
            Contact::create($elem);
        }
    }
}
