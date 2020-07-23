<?php


namespace App\Http\Controllers;


use App\Mail\Contact;
use App\Mail\ContactMe;
use http\Env\Request;
use Illuminate\Support\Facades\Mail;
use function GuzzleHttp\Promise\all;

class ContactController
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        //1. validate email
        \request()->validate([
            'email' => 'required|email',
        ]);
        //2. send email
        Mail::to(\request('email'))->send(new Contact());
        
         //3. redirect to contact page
         return redirect('/contact')
            ->with('success', 'Email Sent!');
    }
}
