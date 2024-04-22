<?php

namespace App\Http\Controllers;

use App\Models\accomodaties;
use App\Models\orderaccommodatie;
use Illuminate\Http\Request;

class OrderAccommodatieController extends Controller
{
    public function index()
    {
        $accommodaties = accomodaties::all();

        return view('accommodatieorder', ['accommodaties' => $accommodaties]);
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
            'accommodatie_id' => 'required',
        ]);

        $orderaccommodatie = new orderaccommodatie();

        $orderaccommodatie->firstname = $validateData['voornaam'];
        $orderaccommodatie->lastname = $validateData['achternaam'];
        $orderaccommodatie->email = $validateData['email'];
        $orderaccommodatie->accommodatie_id = $validateData['accommodatie_id'];
        $orderaccommodatie->paymentmethod = "Ideal";


        $orderaccommodatie->save();

        // Redirect de gebruiker naar de orderconfirmation pagina na het plaatsen van een order
        return redirect()->route('orderconfirmation');
    }

    /**
     * Display the specified resource.
     */
    // public function show(orderaccommodaties $orderaccommodaties)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(ordertickets $ordertickets)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, ordertickets $ordertickets, $id)
    // {
    //     $ticketorder = ordertickets::find($id);

    //     $ticketorder->firstname = $request->input('voornaam');
    //     $ticketorder->lastname = $request->input('achternaam');
    //     $ticketorder->email = $request->input('email');
    //     $ticketorder->street = $request->input('straat');
    //     $ticketorder->housenumber = $request->input('huisnummer');
    //     $ticketorder->city = $request->input('stad');
    //     $ticketorder->country = $request->input('land');
    //     $ticketorder->state = $request->input('provincie');
    //     $ticketorder->zipcode = $request->input('postcode');
    //     $ticketorder->tickettype = $request->input('ticket_type');
    //     $ticketorder->amount = $request->input('aantal');
    //     $ticketorder->paymentmethod = $request->input('payment_method');

    //     $ticketorder->save();

    //     return redirect()->route('ticketorders');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(ordertickets $ordertickets, $id)
    // {
    //     $ticketorder = ordertickets::find($id);

    //     if ($ticketorder) {
    //         $ticketorder->delete();
    //     }

    //     return redirect()->route('ticketorders');
    // }
}
