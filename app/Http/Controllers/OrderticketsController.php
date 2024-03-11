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
        // Validate de form
        $validateData = $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'email' => 'required|email|max:255',
            'straat' => 'required',
            'huisnummer' => 'required',
            'stad' => 'required',
            'land' => 'required',
            'provincie' => 'required',
            'postcode' => 'required',
            'ticket_type' => 'required',
            'aantal' => 'required'
        ]);

        $orderticket = new ordertickets();

        $orderticket->firstname = $validateData['voornaam'];
        $orderticket->lastname = $validateData['achternaam'];
        $orderticket->email = $validateData['email'];
        $orderticket->street = $validateData['straat'];
        $orderticket->housenumber = $validateData['huisnummer'];
        $orderticket->city = $validateData['stad'];
        $orderticket->country = $validateData['land'];
        $orderticket->state = $validateData['provincie'];
        $orderticket->zipcode = $validateData['postcode'];
        $orderticket->tickettype = $validateData['ticket_type'];
        $orderticket->amount = $validateData['aantal'];
        $orderticket->paymentmethod = "Ideal";


        $orderticket->save();

        // Redirect de gebruiker naar de orderconfirmation pagina na het plaatsen van een order
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
