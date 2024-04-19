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

        // Stuurt de attracties mee naar de view en attractiesdashboard
        return view('attractions', ['attractions' => $attractions]);
    }

    public function showAttractiondetailsPage(Request $request, $id)
    {
        // Haalt alle attracties op uit de database
        $attraction = attractions::find($id);

        // Stuurt de attracties mee naar de view
        return view('attractiondetails', compact('attraction'));
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
        $attractions = new attractions();

        $attractions->name = $request->name;
        $attractions->description = $request->description;
        $attractions->image = $request->image;
        $attractions->min_age = $request->min_age;
        $attractions->min_length = $request->min_length;
        $attractions->ride_time = $request->ride_time;
        $attractions->save();

        return redirect()->route('attractionsdashboard');
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
    public function update(Request $request, attractions $attractions, $id)
    {
        $attractions = attractions::find($id);

        if($attractions != null) {
            $attractions->name = $request->name;
            $attractions->description = $request->description;
            $attractions->image = $request->image;
            $attractions->min_age = $request->min_age;
            $attractions->min_length = $request->min_length;
            $attractions->ride_time = $request->ride_time;
            $attractions->save();
        }

        return redirect()->route('attractionsdashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(attractions $attractions, $id)
    {
        $attractions = attractions::find($id);

        if($attractions != null) {
            $attractions->delete();
        }

        return redirect()->route('attractionsdashboard');
    }
}
