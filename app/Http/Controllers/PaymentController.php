<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show()
    {
        return view('payment.create');
    }

    public function store()
    {
        //\request()->user()->notify(new PaymentReceived(900));
        event(new ProductPurchased('food'));
        return redirect(route('received'));
    }
}
