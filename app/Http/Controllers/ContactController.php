<?php


namespace App\Http\Controllers;


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
        Mail::to(\request('email'))->send(new ContactMe('Laravel'));

//         Mail::raw('It works!', function ($message) {
//                 $message->to(request('email'), '$username');
//                 $message->subject('Its Working!');
//             });
         //3. redirect to contact page
         return redirect('/contact')
            ->with('success', 'Email Sent!');
    }
}
