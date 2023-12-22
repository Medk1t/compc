<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seatController extends Controller
{
    public function index()
    {
        $seat = seatResources::collection(seat::all());

        return $seat;
    }

    public function create()
    {
        //
    }

    public function edit(Seller $seller)
    {
        //
    }

    public function update(Request $request, seat $seat)
    {
        if($request->id==null)
        {
            $seat = new seat;
        
            $seat->date;
            $seat->client_id;
            $seat->price;
            $seat->seat_id;
        
            $seat->save();
            return true;
        }
        
    }

    public function store(Request $request)
    {
        if ($request->id == null)
        {
            $seat = new seat;
            $seat->date;
            $seat->client;
            $seat->price;
            $seat->seat_id;
            
            $seat->save();
            return $seat;
        }
    }

    public function show($id)
    {
        $seat = seat::find($id);
        return $sellers;
    }

    public function destroy($id)
    {
        seat::destroy($id);
        return true;
    }
}
