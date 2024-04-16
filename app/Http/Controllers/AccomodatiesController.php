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
        //
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
    public function update(Request $request, accomodaties $accomodaties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accomodaties $accomodaties)
    {
        //
    }
}
