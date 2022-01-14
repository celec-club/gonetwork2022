<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {
    public function show() {
        return view("dashboard");
    }

    public function login() {
        return view("adminlogin");
    }
    
    public function check(Request $request) {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard("admin")->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(url('admin/dashboard'));
        }

        return redirect()->back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }
}
