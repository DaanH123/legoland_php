<?php

namespace App\Http\Controllers;

use App\Models\ordertickets;
use App\Models\tickets;
use Illuminate\Http\Request;

class OrderticketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = tickets::all();

        return view('ticketorder', ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orderticket = new ordertickets();

        $orderticket->firstname = $request->voornaam;
        $orderticket->lastname = $request->achternaam;
        $orderticket->email = $request->email;
        $orderticket->street = $request->straat;
        $orderticket->housenumber = $request->huisnummer;
        $orderticket->city = $request->stad;
        $orderticket->country = $request->land;
        $orderticket->state = $request->provincie;
        $orderticket->zipcode = $request->postcode;
        $orderticket->tickettype = $request->input('ticket_type');
        $orderticket->amount = $request->aantal;
        $orderticket->paymentmethod = "Ideal";


        $orderticket->save();

        return redirect()->route('orderconfirmation');
    }

    /**
     * Display the specified resource.
     */
    public function show(ordertickets $ordertickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ordertickets $ordertickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ordertickets $ordertickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ordertickets $ordertickets)
    {
        //
    }
}
