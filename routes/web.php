<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Default route (to the homepage)
Route::get('/', function () {
    return view('home');
});


//Route to the homepage
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route to the tickets page
Route::get('/tickets', [App\Http\Controllers\TicketsController::class, 'showTicketsPage'])->name('tickets');

//Route to the attractions page
Route::get('/attractions', [App\Http\Controllers\AttractionsController::class, 'showAttractionsPage'])->name('attractions');
