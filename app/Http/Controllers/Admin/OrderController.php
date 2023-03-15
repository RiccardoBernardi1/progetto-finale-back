<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\Typology;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(!Auth::user()->company){
            $typologies=Typology::all();
            return view('admin.companies.create',compact('typologies'));
        };
        $userOrders=[];
        $company=Auth::user()->company;
        
        foreach(Order::all() as $order){
            $orderCompany=$order->products->first()->company_id;
            if($company->id==$orderCompany){
                array_push($userOrders,$order);
            }
        }
        $userOrders=array_reverse($userOrders);
        return view('admin.orders.index', compact('userOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $previousurl=url()->previous();
        return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $previousurl=url()->previous();
        return redirect($previousurl);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {   
        $previousurl=url()->previous();
        if(Auth::user()->company->id!=$order->products->first()->company_id){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        return view('admin.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $previousurl=url()->previous();
        return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
    }
}
