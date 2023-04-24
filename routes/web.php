<?php

use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusesController;
use App\Http\Controllers\FrontendDataController;
use App\Http\Controllers\MailController;

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

// Common Resource Routes:
// index - Show all tasks
// show - Show single task
// create - Show form to create new task
// store - Store new task
// edit - Show form to edit task
// update - Update task
// destroy - Delete task

// ===================== E-mail =====================

// ===================== Reverse Proxy =====================
$proxy_url    = getenv('PROXY_URL');
$proxy_scheme = getenv('PROXY_SCHEME');

if (!empty($proxy_url)) {
   URL::forceRootUrl($proxy_url);
}

if (!empty($proxy_scheme)) {
   URL::forceScheme($proxy_scheme);
}

// ===================== Page Routing =====================
Route::get('/', function () {
    $trips = Trip::all();
    $buses = Bus::all();

    return view("index", compact("trips", "buses"));
});
Route::view("/services", "services");

Route::get('/vehicles', function () {
    return view("vehicles", ["buses" => Bus::all()]);
});

Route::get('/trips', function () {
    return view("trips", ["trips" => Trip::all()]);
});

Route::view("/contact", "contact");
Route::post("/mail", [MailController::class, "send"]);

// ===================== Admin =====================
// Show Login Page
Route::get("/admin/login", [AdminController::class, "login"])->name("login")->middleware("guest");

// Show Admin Menu
Route::view("/admin/menu", "admin-menu")->middleware("auth");

// ----------- Trips -----------
// Show Trips Administration
Route::get("/admin/trips", [TripController::class, "index"])->middleware("auth");

// Create a Trip
Route::post("/trips/store", [TripController::class, "store"])->middleware("auth");

Route::put("/trips/edit/{trip}", [TripController::class, "update"])->middleware("auth");

Route::delete("/trips/{trip}", [TripController::class, "destroy"])->middleware("auth");

// Trips single page
Route::get("/trips/{trip}", [TripController::class, "show"]);

// ----------- Buses -----------
// Show Buses Administration
Route::get("/admin/buses", [BusesController::class, "index"])->middleware("auth");

Route::post("/buses/store", [BusesController::class, "store"])->middleware("auth");

Route::put("/buses/edit/{bus}", [BusesController::class, "update"])->middleware("auth");

Route::delete("/buses/{bus}", [BusesController::class, "destroy"])->middleware("auth");

// ----------- Auth -----------
// Login 
Route::post("/admin/signin", [AdminController::class, "signin"])->middleware("guest");

// Logout
Route::post("/admin/logout", [AdminController::class, "logout"])->middleware("auth");
