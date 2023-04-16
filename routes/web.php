<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusesController;

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

// ===================== Page Routing =====================
Route::view('/', "index");
Route::view("/services", "services");
Route::view("/vehicles", "vehicles");
Route::view("/trips", "trips");
Route::view("/contact", "contact");

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