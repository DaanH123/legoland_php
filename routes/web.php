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
Route::view('/home', 'home')->name('home');

Route::get('/attractions', [App\Http\Controllers\AttractionsController::class, 'index'])->name('attractions');
