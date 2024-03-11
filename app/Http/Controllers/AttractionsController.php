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
        // Haalt alle attracties op uit de database
        $attractions = attractions::all();
    
        // Stuurt de attracties mee naar de view
        return $attractions;
    }

    public function showAttractionsPage()
    {
        // Haalt alle attracties op uit de database
        $attractions = attractions::all();

        // Stuurt de attracties mee naar de view
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
