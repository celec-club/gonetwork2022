<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {
    
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            "fullname"      =>      "required",
            "email"         =>      "required|unique:users",
            "password"      =>      "required",
            "phone_number"  =>      "required|unique:users,phone",
            "level"         =>      "required",
            "specialty"     =>      "required",
            // "matricule"     =>      "unique:users",
            "id_number"     =>      "required|unique:users,id_number",
        ]);
    
        if ($validator->fails()) {
            return redirect('/#register')->withErrors($validator)->withInput();
        }
        $user = User::create([
            "fullname"          =>      $request->fullname,
            "email"             =>      $request->email,
            "password"          =>      Hash::make($request->password),
            "phone"             =>      $request->phone_number,
            "education_level"   =>      $request->level,
            "field"             =>      $request->specialty,
            "matricule"         =>      $request->matricule,
            "id_number"         =>      $request->id_number,
            "is_usthb"          =>      ($request->has("is_student")) ? true : false,
            "is_member"         =>      ($request->has("is_member")) ? true : false,
            "accepted"      =>      true,
            "scanned_times" =>      0,
        ]);
        $user->createCodeQr();
        Auth::login($user);
        return redirect(url('account'));
    }

    public function auth(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(url('account'));
        }

        return redirect(url("/#connection"))->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }

    public function show() {
        // Auth::user()->createCodeQr();
        return view("account", ["user" => Auth::user()]);
    }
    public function verify(Request $request, int $id) {
        $user = User::findOrFail($id);
        if ($user->accepted) {
            $user->increment("scanned_times");
            return response(null, 200);
        }
        return response(null, 401);
    }
}
