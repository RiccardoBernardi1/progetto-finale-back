<?php

namespace App\Http\Controllers;

use App\Mail\NewOrder;
use App\Mail\NewOrderGuest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewOrderGuestController extends Controller
{
    public function store(Request $request){

        $data = $request->all();

        $new_order = new Order();
        $new_order->fill($data);
        $new_order->save();

        Mail::to("info@delivebool.com")->send(new NewOrderGuest($new_order));

    }
}
