<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthController::class, "login"]);
Route::post("/auth", [AuthController::class, "auth"])->name("auth.login");

Route::get("/profile", [ProfileController::class, "index"])->name("profile");
Route::patch("/profile/update", [ProfileController::class, "update"])->name("profile.update");
Route::patch("/profile/password", [ProfileController::class, "updatePassword"])->name("profile.password");

Route::get("/logout", [AuthController::class, "logout"])->name("auth.logout");