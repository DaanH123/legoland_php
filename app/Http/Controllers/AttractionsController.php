<?php

namespace App\Http\Controllers;

use App\Models\attractions;
use Illuminate\Http\Request;

class AttractionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all attractions from the database
        $attractions = attractions::all();
    
        // Return the attractions
        return $attractions;
    }

    public function showAttractionsPage()
    {
        // Fetch all attractions from the database
        $attractions = attractions::all();

        // Return the attractions view and pass the attractions data to it
        return view('attractions', compact('attractions'));
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
    public function show(attractions $attractions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(attractions $attractions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, attractions $attractions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(attractions $attractions)
    {
        //
    }
}
