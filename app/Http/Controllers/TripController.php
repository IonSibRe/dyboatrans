<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TripController extends Controller
{
    // Show Trips Page
    public function index() {
        return view("admin-trips", ["trips" => Trip::all()]);
    }

    public function show(Trip $trip) {
        return view("trip-single-show", ["trip" => $trip]);
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

        if (!$request->hasFile("images") || count($request->images) != 3) {
            return redirect("/admin/trips")->with("error", "Je nutné nahrát 3 obrázky.");
        }

        $formFields["images"] = "";

        if ($request->hasFile("images")) {
            $folderName = "";

            foreach ($request->file("images") as $key => $image) {
                if ($key === array_key_first($request->file("images"))) {
                    $folderName = uniqid();
                    $formFields["images"] .= $image->store("trips/" . $folderName, "public") . ",";
                } else {
                    $formFields["images"] .= $image->store("trips/" . $folderName, "public") . ",";
                }

            }
        }

        Trip::create($formFields);

        return redirect("/admin/trips");
    }

    // Update Trip
    public function update(Request $request, Trip $trip) {
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

        // Create new dir and store imgs there
        if ($request->hasFile("images")) {
            $folderName = "";
            $formFields["images"] = "";

            Storage::deleteDirectory("public/trips/" . explode("/", $trip->images)[1]);

            foreach ($request->file("images") as $key => $image) {
                if ($key === array_key_first($request->file("images"))) {
                    $folderName = uniqid();
                    $formFields["images"] .= $image->store("trips/" . $folderName, "public") . ",";
                } else {
                    $formFields["images"] .= $image->store("trips/" . $folderName, "public") . ",";
                }
            }
        }

        $trip->update($formFields);

        return redirect("/admin/trips");
    }

    // Delete Trip
    public function destroy(Trip $trip) {
        $trip->delete();

        Storage::deleteDirectory("public/trips/" . explode("/", $trip->images)[1]);

        return redirect("/admin/trips");
    }
}
