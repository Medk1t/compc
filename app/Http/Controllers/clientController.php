<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index()
    {
        $order = orderResources::collection(order::all());

        return $order;
    }

    public function create()
    {
        //
    }

    public function edit(Seller $seller)
    {
        //
    }

    public function update(Request $request, order $order)
    {
        if($request->id==null)
        {
            $order = new order;
        
            $order->date;
            $order->client_id;
            $order->price;
            $order->seat_id;
        
            $order->save();
            return true;
        }
        
    }

    public function store(Request $request)
    {
        if ($request->id == null)
        {
            $order = new order;
            $order->date;
            $order->client;
            $order->price;
            $order->seat_id;
            
            $order->save();
            return $order;
        }
    }

    public function show($id)
    {
        $order = order::find($id);
        return $sellers;
    }

    public function destroy($id)
    {
        order::destroy($id);
        return true;
    }
}
