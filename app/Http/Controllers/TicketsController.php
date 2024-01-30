<?php

namespace App\Http\Controllers;

use App\Models\tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all tickets from the database
        $tickets = tickets::all();

        // Return the tickets
        return $tickets;
    }

    public function showTicketsPage()
    {
        // Fetch all tickets from the database
        $tickets = tickets::all();

        // Return the tickets view and pass the tickets data to it
        return view('tickets', compact('tickets'));
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
    public function show(tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tickets $tickets)
    {
        //
    }
}
