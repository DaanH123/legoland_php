<?php

namespace App\Http\Controllers;

use App\Models\accomodaties;
use App\Models\orderaccommodatie;
use Illuminate\Http\Request;

class OrderAccommodatieController extends Controller
{
    public function index(Request $request)
    {
        $accommodaties = accomodaties::all();
        $selectedAccommodatieId = $request->get('accomodatie_id');

        return view('accommodatieorder', [
            'accommodaties' => $accommodaties,
            'selectedAccommodatieId' => $selectedAccommodatieId,
        ]);
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
        // Validate the form
        $validateData = $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'email' => 'required|email|max:255',
            'accommodatie_id' => 'required',
            'dates' => 'required',
        ]);
    
        $orderaccommodatie = new orderaccommodatie();
    
        $orderaccommodatie->firstname = $validateData['voornaam'];
        $orderaccommodatie->lastname = $validateData['achternaam'];
        $orderaccommodatie->email = $validateData['email'];
        $orderaccommodatie->accommodatie_id = $validateData['accommodatie_id'];
    
        if (strpos($validateData['dates'], ' to ') !== false) {
            list($booked_from, $booked_until) = explode(' to ', $validateData['dates']);
            $orderaccommodatie->booked_from = $booked_from;
            $orderaccommodatie->booked_until = $booked_until;
        } else {
            dd("Invalid date format");
        }
    
        $orderaccommodatie->paymentmethod = "Ideal";
    
        $orderaccommodatie->save();
    
        return redirect()->route('orderconfirmation');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderAccommodatieController $orderaccommodaties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderAccommodatieController $orderaccommodatie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AccomodatiesController $orderaccommodatie, $id)
    {
        $orderaccommodatie = orderaccommodatie::find($id);

        if ($orderaccommodatie) {
            $orderaccommodatie->firstname = $request->firstname;
            $orderaccommodatie->lastname = $request->lastname;
            $orderaccommodatie->email = $request->email;
            $orderaccommodatie->accommodatie_id = $request->accommodatie_id;
            $orderaccommodatie->booked_from = $request->booked_from;
            $orderaccommodatie->booked_until = $request->booked_until;

            $orderaccommodatie->save();
        }

        return redirect()->route('accommodatieorders');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderAccommodatieController $orderaccommodatie, $id)
    {
        $orderaccommodatie = orderaccommodatie::find($id);

        if ($orderaccommodatie) {
            $orderaccommodatie->delete();
        }

        return redirect()->route('accommodatieorders');
    }
}
