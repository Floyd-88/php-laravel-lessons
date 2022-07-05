<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class ContactsController extends Controller
{
    public function showContacts(){
        $contact = Contact::find(1);

        return view('contact', compact('contact'));
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
