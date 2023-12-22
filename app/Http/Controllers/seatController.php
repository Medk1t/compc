<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index()
    {
        $Seat = SeatResources::collection(Seat::all());

        return $Seat;
    }

    public function create()
    {
        //
    }

    public function edit(Seller $seller)
    {
        //
    }

    public function update(Request $request, Seat $Seat)
    {
        if($request->id==null)
        {
            $Seat = new Seat;
        
            $Seat->date;
            $Seat->client_id;
            $Seat->price;
            $Seat->Seat_id;
        
            $Seat->save();
            return true;
        }
        
    }

    public function store(Request $request)
    {
        if ($request->id == null)
        {
            $Seat = new Seat;
            $Seat->date;
            $Seat->client;
            $Seat->price;
            $Seat->Seat_id;
            
            $Seat->save();
            return $Seat;
        }
    }

    public function show($id)
    {
        $Seat = Seat::find($id);
        return $sellers;
    }

    public function destroy($id)
    {
        Seat::destroy($id);
        return true;
    }
}
