<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    // Show Trips Page
    public function index() {
        return view("admin-trips", ["trips" => Trip::all()]);
    }

    // Create New Trip
    public function store(Request $request) {
        $formFields = $request->validate([
            "name" => "required",
            "descShort" => "required",
            "price" => "required",
            "descLong" => "required",
            "date" => "required",
            "departure" => "required",
            "priceIncludes" => "required",
            "priceNotIncludes" => "required",
        ]);

        $formFields["images"] = "";

        if ($request->hasFile("images")) {
            $folderName = "";

            foreach ($request->file("images") as $key => $image) {
                if ($key === array_key_first($request->file("images"))) {
                    $folderName = uniqid();
                    $formFields["images"] .= $image->storeAs("trips/" . $folderName, $image->getClientOriginalName(), "public") . ",";
                } else {
                    $formFields["images"] .= $image->storeAs("trips/" . $folderName, $image->getClientOriginalName(), "public") . ",";
                }

            }
        }
        
        Trip::create($formFields);

        return redirect("/admin/trips");
    }

    // Delete Trip
    public function destroy(Trip $trip) {
        $trip->delete();

        return redirect("/admin/trips");
    }
}
