<?php

namespace App\Http\Controllers;

use App\Models\accomodaties;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AccomodatiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Haalt alle accomodaties op uit de database
        $accomodaties = accomodaties::all();

        // Stuurt de accomodaties mee naar de view
        return $accomodaties;
    }

    public function showAccomodatiesPage()
    {
        // Haalt alle accomodaties op uit de database
        $accomodaties = accomodaties::all();

        // Stuurt de accomodaties mee naar de view en accomodatiesdashboard
        return view('accommodaties', ['accomodaties' => $accomodaties]);
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
        $accomodaties = new accomodaties();

        $accomodaties->name = $request->name;
        $accomodaties->description = $request->description;
        $accomodaties->image_outside = $request->image_outside;
        $accomodaties->image_inside = $request->image_inside;
        $accomodaties->price = $request->price;
        $accomodaties->max_persons = $request->max_persons;

        $accomodaties->save();

        return redirect()->route('accomodatiesdashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $accomodatie = Accomodaties::findOrFail($id);
            return view('accommodatieDetailPage', ['accomodatie' => $accomodatie]);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('accomodaties')->with('error', 'Accommodation not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(accomodaties $accomodaties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, accomodaties $accomodaties, $id)
    {
        $accomodaties = accomodaties::find($id);

        if($accomodaties != null) {
            $accomodaties->name = $request->name;
            $accomodaties->description = $request->description;
            $accomodaties->image_outside = $request->image_outside;
            $accomodaties->image_inside = $request->image_inside;
            $accomodaties->price = $request->price;
            $accomodaties->max_persons = $request->max_persons;
            $accomodaties->save();
        }

        return redirect()->route('accomodatiesdashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accomodaties $accomodaties, $id)
    {
        $accomodatie = accomodaties::find($id);

        if($accomodatie != null) {
            $accomodatie->delete();
        }

        return redirect()->route('accomodatiesdashboard');
    }
}
