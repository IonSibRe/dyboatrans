<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BusesController extends Controller
{
    public function index() {
        return view("admin-buses", ["buses" => Bus::all()]);
    }

    // Create a Bus
    public function store(Request $request) {
        if (is_null($request->icons)) {
            return redirect("/admin/buses")->with("error", "Je nutné nahrát alespoň jednu ikonu.");
        }

        $formFields = $request->validate([
            "name" => "required",
            "descShort" => "required",
            "seatCount" => "required",
            "descLong" => "required",
            "icons" => "required"
        ]);

        if (!$request->hasFile("images") || count($request->images) != 3) {
            return redirect("/admin/buses")->with("error", "Je nutné nahrát 3 obrázky.");
        }

        $formFields["images"] = "";

        if ($request->hasFile("images")) {
            $folderName = "";

            foreach ($request->file("images") as $key => $image) {
                if ($key === array_key_first($request->file("images"))) {
                    $folderName = uniqid();
                    $formFields["images"] .= $image->storeAs("buses/" . $folderName, $image->getClientOriginalName(), "public") . ",";
                } else {
                    $formFields["images"] .= $image->storeAs("buses/" . $folderName, $image->getClientOriginalName(), "public") . ",";
                }

            }
        }

        Bus::create($formFields);

        return redirect("/admin/buses");
    }

    // Update Bus
    public function update(Request $request, Bus $bus) {
        $formFields = $request->validate([
            "name" => "required",
            "descShort" => "required",
            "seatCount" => "required",
            "descLong" => "required",
        ]);

        if(!is_null($request["icons"])) {
            $formFields["icons"] = $request["icons"];
        }

        // Delete dir with imgs
        if ($request->hasFile("images")) {
            Storage::deleteDirectory("public/buses/" . explode("/", $bus->images)[1]);
        }

        // Create new dir and store imgs there

        if ($request->hasFile("images")) {
            $formFields["images"] = "";
            $folderName = "";

            foreach ($request->file("images") as $key => $image) {
                if ($key === array_key_first($request->file("images"))) {
                    $folderName = uniqid();
                    $formFields["images"] .= $image->storeAs("buses/" . $folderName, $image->getClientOriginalName(), "public") . ",";
                } else {
                    $formFields["images"] .= $image->storeAs("buses/" . $folderName, $image->getClientOriginalName(), "public") . ",";
                }

            }
        }

        $bus->update($formFields);

        return redirect("/admin/buses");
    }

    // Delete Bus
    public function destroy(Bus $bus) {
        $bus->delete();

        Storage::deleteDirectory("public/buses/" . explode("/", $bus->images)[1]);

        return redirect("/admin/buses");
    }
}
