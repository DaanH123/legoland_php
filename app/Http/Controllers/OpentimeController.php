<?php

namespace App\Http\Controllers;

use App\Models\opentime;
use Illuminate\Http\Request;

class OpentimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Retrieve all opentimes from the database
        $opentime = opentime::all();

        //Return opentimes to view
        return view('opentime', ['opentime' => $opentime]);
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
    public function show(opentime $opentime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(opentime $opentime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, opentime $opentime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(opentime $opentime)
    {
        //
    }
}
