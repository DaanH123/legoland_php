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
        $accomodatiesController = new AccomodatiesController;

        // Roep de index methode aan op de controller en sla het op in een variable
        $attractions = $attractionsController->index();
        $tickets = $ticketsController->index();
        $accomodaties = $accomodatiesController->index();

        // Check of het een string is zo ja maak er een lege array van
        if (is_string($attractions)) {
            $attractions = [];
        }

        if (is_string($tickets)) {
            $tickets = [];
        }

        if (is_string($accomodaties)) {
            $accomodaties = [];
        }

        // Stuur de data mee naar de view
        return view('home', ['attractions' => $attractions, 'tickets' => $tickets, 'accomodaties' => $accomodaties]);
    }
}
