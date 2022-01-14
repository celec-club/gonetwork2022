<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertficationController;
use App\Http\Controllers\UserController;
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