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
}
