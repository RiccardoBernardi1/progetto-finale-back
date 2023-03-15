<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Controllers\Controller;
use App\Mail\NewOrder;
use App\Mail\NewOrderGuest;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(StoreOrderRequest $request)
    {
        
        $data = $request->validated();
        $new_order = new Order();
        $new_order-> name= $data['name'];
        $new_order-> total_price= $data['total_price'];
        $new_order-> email= $data['email'];
        $new_order-> telephone= $data['telephone'];
        $new_order-> address= $data['address'];
        $new_order->save();
        
        foreach($data['products'] as $product){
            $new_order->products()->attach($product['product']['id'],[
                'quantity'=>$product['quantity']
            ]);
        }

        Mail::to("info@delivebool.com")->send(new NewOrder($new_order));
        Mail::to("info@delivebool.com")->send(new NewOrderGuest($new_order));
        
        return response()->json(['message' => 'Ordine creato con successo.',$new_order->products(),$new_order->id]);
    }
}
