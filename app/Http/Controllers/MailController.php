<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contattaci(){

        return view('mail/contattaci');
    }

    public function store(Request $request){

        $email = $request->input('email');
        $username = $request->input('username');
        $userMessage = $request->input('message');
        
        Mail::to($email)->send(new ContactMail($email, $username, $userMessage));

        return redirect()->route('welcome')->with('message', 'Mail inviata con successo');
    }
}
