<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

class ContactController extends Controller
{
   public function submit(Request $req) {
    $validation = $req->validate([

        'subject' => 'required|min:5|max:50',
        'message' => 'required|min:5|max:500',
        'email' => 'required|min:5|max:50',


    ]);
   }
}
