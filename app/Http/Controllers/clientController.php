<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $Client = ClientResources::collection(Client::all());

        return $Client;
    }

    public function create()
    {
        //
    }

    public function edit(Seller $seller)
    {
        //
    }

    public function update(Request $request, Client $Client)
    {
        if($request->id==null)
        {
            $Client = new Client;
            $Client->tel;
            
            $Client->save();
            return true;
        }
        
    }

    public function store(Request $request)
    {
        if ($request->id == null)
        {
            $Client = new Client;
            $Client->tel;
            
            $Client->save();
            return $Client;
        }
    }

    public function show($id)
    {
        $Client = Client::find($id);
        return $Client;
    }

    public function destroy($id)
    {
        Client::destroy($id);
        return true;
    }
}
