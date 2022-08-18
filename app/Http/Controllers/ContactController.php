<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;



    class ContactController extends Controller {



   public function submit(ContactRequest $req) {

    $contact = new Contact();
    $contact->name=$req->input('name');
    $contact->email=$req->input('email');
    $contact->subject=$req->input('subject');
    $contact->message=$req->input('message');

     $contact->save();

     return redirect()->route('home')->with('success, Dei Nachricht wurde gesendet');
   }
}
