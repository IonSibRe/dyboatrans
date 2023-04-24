<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request) {
        $request->validate([
            "fullname" => "required",
            "phone" => "required",
            "departure" => "required",
            "destination" => "required",
            "vehicle_type" => "required",
            "company" => "required",
            "email" => "required",
            "arrival" => "required",
            "people_count" => "required",
        ]);

        $contact = Contact::create($request->all());;
        $toAddress = getenv('MAIL_CONTACT_ADDRESS');

        Mail::to($toAddress)
            ->queue(new ContactMail($contact));

        return redirect("/contact");
    }
}
