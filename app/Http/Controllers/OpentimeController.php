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
        // Haalt alle opentimes op uit de database
        $opentime = opentime::all();

        // Stuurt de opentimes mee naar de view
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
    public function update(Request $request, $id)
    {
        $opentime = OpenTime::find($id);
        $opentime->day = $request->input('day');
        $opentime->open_time = $request->input('open_time');
        $opentime->close_time = $request->input('close_time');
        $opentime->save();

        return redirect()->back()->with('message', 'Tijd aangepast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $opentime = OpenTime::find($id);
        if ($opentime) {
            $opentime->delete();
            return redirect()->back()->with('message', 'Tijd verwijderd');
        } else {
            return redirect()->back()->with('error', 'Niet gevonden');
        }
    }
}
