<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class ContactsController extends Controller
{

    public function index() {

        $contact = Contact::find(1);
        if(!empty($contact)) {
            return view('contact.index', compact('contact'));
        } else {
            return redirect()->route('contacts.create');
        }
    }

    public function create() {
        return view('contact.create');
    }

    public function store() {
        $contactArr = request()->validate([
            'country' => 'string',
            'city' => 'string',
            'email' => 'string',
            'phone' => 'string',
        ]);
        Contact::create($contactArr);
        return redirect()->route('contacts.index');
    }

    public function edit(Contact $contact) {
        return view('contact.edit', compact('contact'));
    }

    public function update(Contact $contact) {
        $contactArr = request()->validate([
            'country' => 'string',
            'city' => 'string',
            'email' => 'string',
            'phone' => 'string',
        ]);
        $contact->update($contactArr);
        return redirect()->route('contacts.index', $contact->id);
    }

    // public function showContacts(){
    //     $contact = Contact::find(1);

    //     return view('contact', compact('contact'));
    // } 

    // public function createContacts() {
    //     $addContacts = [
    //     ['country' => 'Russia',
    //     'city' => 'Stavropol',
    //     'email' => 'ila@mail.com',
    //     'phone' => '450-533'],
    //     ];

    //     foreach($addContacts as $elem) {
    //         Contact::create($elem);
    //     }
    // }
}
