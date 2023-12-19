<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index;
    public store
    public function update(Request $request)
    {
        $order = Event::find($request->id);
        
        $order->date;
        $order->client_id;
        $order->price;
        $order->seat_id;
        
        $order->save();
        return true;
    }
}   

