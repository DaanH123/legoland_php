<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
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
            'email' => 'required|email|max:255',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Sla de data op in de database
        $contact = new contact();
        $contact->email = $validateData['email'];
        $contact->subject = $validateData['subject'];
        $contact->message = $validateData['message'];
        $contact->save();

        // Stuur de gebruiker terug naar de contact pagina met een succes bericht
        session()->flash('success', 'Je bericht is verzonden!');
        return redirect()->route('contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact, $id)
    {
        $contactForm = contact::find($id);

        if($contactForm) {
            $contactForm->delete();
        }

        return redirect()->route('contactforms');
    }
}
