<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthSessionController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/signup", [AuthSessionController::class, "signup"]);
Route::post("/login", [AuthSessionController::class, "login"])->name("login");
