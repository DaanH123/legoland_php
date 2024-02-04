<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpentimeController;
use App\Http\Controllers\OrderticketsController;
use App\Http\Controllers\TicketsController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');


//Route to the homepage
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route to the tickets page
Route::get('/tickets', [TicketsController::class, 'showTicketsPage'])->name('tickets');

//Route to the attractions page
Route::get('/attractions', [AttractionsController::class, 'showAttractionsPage'])->name('attractions');

//Route to the opening times page
Route::get('/opentimes', [OpentimeController::class, 'index'])->name('opentime');

//Route to the contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//Post form to contact controller
Route::post('postContactForm', [ContactController::class, 'store']);

//Route to order page
Route::get('/order', [OrderticketsController::class, 'index'])->name('order');

//Route to post ticket order
Route::post('orderticket', [OrderticketsController::class, 'store']);

//Route to the order confirmation page
Route::get('/orderconfirmation', function() {
    return view('ordercompleted');
})->name('orderconfirmation');

//Route to 404 not allowed page
Route::get('/notallowed', function() {
    return view('notallowed');
})->name('notallowed');

//Route to admin page
Route::get('/admin', [AdminController::class, 'index'])->name('adminpage');
