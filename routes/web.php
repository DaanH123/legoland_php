<?php

use App\Http\Controllers\AccomodatiesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpentimeController;
use App\Http\Controllers\OrderticketsController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\OrderAccommodatieController;
use App\Models\accomodaties;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// Default route (naar de homepage)
Route::get('/', [HomeController::class, 'index'])->name('home');


// Route naar de home pagina
Route::get('/home', [HomeController::class, 'index']);

// Route naar de tickets pagina
Route::get('/tickets', [TicketsController::class, 'showTicketsPage'])->name('tickets');

// Route naar de attracrions pagina
Route::get('/attractions', [AttractionsController::class, 'showAttractionsPage'])->name('attractions');

// Route naar de attracrion detail pagina
Route::get('/attractiondetails/{id}', [AttractionsController::class, 'showAttractiondetailsPage'])->name('attractiondetails');

// Route naar de opentimes pagina
Route::get('/opentimes', [OpentimeController::class, 'index'])->name('opentime');

// Route naar de contact pagina
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//Post form naar de contact controller
Route::post('postContactForm', [ContactController::class, 'store']);

//R Route naar de order pagina
Route::get('/order', [OrderticketsController::class, 'index'])->name('order');

// Route om het order form te posten
Route::post('orderticket', [OrderticketsController::class, 'store']);

Route::get('/orderaccommodatie', [OrderAccommodatieController::class, 'index'])->name('orderaccommodatie');

Route::post('orderaccommodatie', [OrderAccommodatieController::class, 'store']);

// Route naar de order completed pagina
Route::get('/orderconfirmation', function () {
    return view('ordercompleted');
})->name('orderconfirmation');

Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::put('/opentimes/{id}', [OpentimeController::class, 'update'])->name('opentimes.update');
Route::delete('/opentimes/{id}', [OpentimeController::class, 'destroy'])->name('opentimes.destroy');
Route::get('/opentimesdashboard', [AdminController::class, 'opentimesdashboard'])->name('opentimes');

Route::get('/users', [AdminController::class, 'userdashboard'])->name('users');
Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('users.update');
Route::delete('/users/{id}', [AdminController::class, 'destroyUser'])->name('users.destroy');

Route::get('/ticketorders', [AdminController::class, 'ticketOrdersDashboard'])->name('ticketorders');
Route::delete('/ticketorders/{id}', [OrderticketsController::class, 'destroy'])->name('ticketorders.destroy');
Route::put('/ticketorders/{id}', [OrderticketsController::class, 'update'])->name('ticketorders.update');

Route::get('/contactforms', [AdminController::class, 'contactFormDashboard'])->name('contactforms');
Route::delete('/contactforms/{id}', [ContactController::class, 'destroy'])->name('contactforms.destroy');

Route::get('/attractionsdashboard', [AdminController::class, 'attractionsdashboard'])->name('attractionsdashboard');
Route::post('/attractions', [AttractionsController::class, 'store'])->name('attractions.store');
Route::put('/attractions/{id}', [AttractionsController::class, 'update'])->name('attractions.update');
Route::delete('/attractions/{id}', [AttractionsController::class, 'destroy'])->name('attractions.destroy');

Route::get('/accomodaties' , [AccomodatiesController::class, 'showAccomodatiesPage'])->name('accomodaties');
Route::get('/accomodaties/{id}', [AccomodatiesController::class, 'show'])->name('accomodaties.show');

Route::get('/accomodatiesdashboard', [AdminController::class, 'accomodatiesdashboard'])->name('accomodatiesdashboard');
Route::post('/accomodaties', [AccomodatiesController::class, 'store'])->name('accomodaties.store');
Route::put('/accomodaties/{id}', [AccomodatiesController::class, 'update'])->name('accomodaties.update');
Route::delete('/accomodaties/{id}', [AccomodatiesController::class, 'destroy'])->name('accomodaties.destroy');

Route::get('/orderaccommodaties', [AdminController::class, 'orderAccommodatiesDashboard'])->name('accommodatieorders');
Route::delete('/orderaccommodaties/{id}', [OrderAccommodatieController::class, 'destroy'])->name('orderaccommodaties.destroy');
Route::put('/orderaccommodaties/{id}', [OrderAccommodatieController::class, 'update'])->name('orderaccommodaties.update');
Route::get('/orderaccommodatiedashboard', [AdminController::class, 'orderaccommodatiedashboard'])->name('orderaccommodatiedashboard');

Route::get('/unavailable-dates/{id}', function($id) {
    $bookings = DB::table('orderaccommodaties')
        ->where('accommodatie_id', $id)
        ->select('booked_from', 'booked_until')
        ->get();

    $unavailableDates = [];
    foreach ($bookings as $booking) {
        $start = new DateTime($booking->booked_from);
        $end = new DateTime($booking->booked_until);
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($start, $interval, $end);

        foreach ($period as $dt) {
            $unavailableDates[] = $dt->format("Y-m-d");
        }
    }

    return response()->json($unavailableDates);
});
