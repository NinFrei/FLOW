<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;



class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        $contact = new Contact();
        $contact->name=$req->input('name');
        $contact->email=$req->input('email');
        $contact->subject=$req->input('subject');
        $contact->message=$req->input('message');

        $contact->save();

        //return view('contact');

        return redirect()->route('contact')->with('success','Die Nachricht wurde gesendet');
    }


    public function allData() {
        $contact = new Contact;
        //return view ('message',['data' => $contact->all()]);
        return view ('messages',['data' => $contact->orderBy('id','asc')->get()]);
        //dd($contact->all());
    }

    public function showOneMessage($id) {
        $contact = new Contact;
        return view ('one-message',['data' => $contact->find($id)]);
    }

    public function updateMessage($id) {
        $contact = new Contact;
        return view ('update-message',['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req) {

        $contact = Contact::find($id);
        $contact->name=$req->input('name');
        $contact->email=$req->input('email');
        $contact->subject=$req->input('subject');
        $contact->message=$req->input('message');

        $contact->save();

        //return view('contact');

        return redirect()->route('contact-data-one', $id)->with('success','Die Nachricht wurde aktualisiert');
    }

    public function deleteMessage($id) {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success','Die Nachricht wurde gelöscht');

    }



}

