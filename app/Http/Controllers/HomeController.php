<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\TicketsController;

class HomeController extends Controller
{
    public function index()
    {
        // Maak een nieuw object van de klasse
        $attractionsController = new AttractionsController;
        $ticketsController = new TicketsController;

        // Roep de index methode aan op de controller en sla het op in een variable
        $attractions = $attractionsController->index();
        $tickets = $ticketsController->index();

        // Check of het een string is zo ja maak er een lege array van
        if (is_string($attractions)) {
            $attractions = [];
        }

        if (is_string($tickets)) {
            $tickets = [];
        }

        // Stuur tickets en attracties mee naar de home view
        return view('home', compact('attractions', 'tickets'));
    }
}
