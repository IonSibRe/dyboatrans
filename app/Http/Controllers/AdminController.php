<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show Login
    public function login() {
        return view("login");
    }

    // Signin
    public function signin(Request $request) {
        $formFields = $request->validate([
            "email" => ["required", "email"],
            "password" => "required"
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect("/admin/menu");
        }

        return back()->withErrors(["email" => "Neplatné přihlašovací údaje"])->onlyInput("email");
    }

    // Logout
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/admin/login");
    }
}
