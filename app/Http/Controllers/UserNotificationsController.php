<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {
        return view('payment.received', [
            'user' => auth()->user()->name,
            'notifications' => auth()->user()->notifications
        ]);
    }
}
