<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\TicketsController;

class HomeController extends Controller
{
    public function index()
    {
        $attractionsController = new AttractionsController;
        $ticketsController = new TicketsController;
    
        $attractions = $attractionsController->index();
        $tickets = $ticketsController->index();
    
        if(is_string($attractions)) {
            $attractions = [];
        }
    
        if(is_string($tickets)) {
            $tickets = [];
        }
    
        return view('home', compact('attractions', 'tickets'));
    }
}
