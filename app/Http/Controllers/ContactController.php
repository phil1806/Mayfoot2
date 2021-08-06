<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages.contact.create');
    }

    public function store(Request $request)
    {
       //Saisie des données venant du formulaire
       $data = $request->validate([
            'name'=>'required|min:3|max:20',
            'email'=>'required|email',
            'message'=>'required|min:5',
        ]);

        Mail::to('mayfoots@gmail.com')->send(new ContactMail($data));
         return redirect('contact')->with('message','Votre message a bien été envoyé');

    }
}

