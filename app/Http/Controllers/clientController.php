<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index()
    {
        $client = clientResources::collection(client::all());

        return $client;
    }

    public function create()
    {
        //
    }

    public function edit(Seller $seller)
    {
        //
    }

    public function update(Request $request, client $client)
    {
        if($request->id==null)
        {
            $client = new client;
        
            $client->date;
            $client->client_id;
            $client->price;
            $client->seat_id;
        
            $client->save();
            return true;
        }
        
    }

    public function store(Request $request)
    {
        if ($request->id == null)
        {
            $client = new client;
            $client->date;
            $client->client;
            $client->price;
            $client->seat_id;
            
            $client->save();
            return $client;
        }
    }

    public function show($id)
    {
        $client = client::find($id);
        return $sellers;
    }

    public function destroy($id)
    {
        client::destroy($id);
        return true;
    }
}
