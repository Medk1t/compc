<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $Order = OrderResources::collection(Order::all());

        return $Order;
    }

    public function create()
    {
        //
    }

    public function edit(Seller $seller)
    {
        //
    }

    public function update(Request $request, Order $Order)
    {
        if($request->id==null)
        {
            $Order = new Order;
        
            $Order->date;
            $Order->client_id;
            $Order->price;
            $Order->seat_id;
        
            $Order->save();
            return true;
        }
        
    }

    public function store(Request $request)
    {
        if ($request->id == null)
        {
            $Order = new Order;
            $Order->date;
            $Order->client;
            $Order->price;
            $Order->seat_id;
            
            $Order->save();
            return $Order;
        }
    }

    public function show($id)
    {
        $Order = Order::find($id);
        return $sellers;
    }

    public function destroy($id)
    {
        Order::destroy($id);
        return true;
    }
}   

