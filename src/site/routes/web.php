<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertficationController;
use App\Http\Controllers\UserController;
use App\Models\Comment;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::POST("cert/create", [CertficationController::class, "create"]);
Route::POST("users/create", [UserController::class, "create"]);
Route::POST("users/login", [UserController::class, "auth"])->name("login");
Route::GET("users/check/{id}", [UserController::class, "verify"]);
Route::GET("account", [UserController::class, "show"])->middleware("auth");

Route::GET("admin/login", [AdminController::class, "login"])->name("adminlogin");
Route::POST("admin/login", [AdminController::class, "check"]);
Route::GET("admin/dashboard", [AdminController::class, "show"])->middleware("auth:admin");

Route::GET("archive/{year}", function($year) {
    if(view()->exists($year)){
        return view($year);
    }
    abort(404);
});
Route::POST("comment", function(Request $request) {
    $validatedData = $request->validate([
        "comment"   => "required"
    ]);
    Comment::create(["comment" => $validatedData["comment"], "event" => $request->year]);
    alert('Thank you for your feedback', 'we appreciate that', 'success');
    return redirect()->back();
});

Route::POST("message", function(Request $request) {
    $validatedData = $request->validate([
        "name"   => "required",
        "email"   => "required|email",
        "message"   => "required"
    ]);
    Message::create(["name" => $validatedData["name"], "email" => $validatedData["email"], "message" => $validatedData["message"]]);
    alert('Thank you for your message', 'We will get back to you as soon as possible', 'success');
    return redirect()->back();
});