<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware("isLogin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");

    Route::middleware("isAdmin")->group(function () {
        Route::get("/user", [UserController::class, "index"])->name("user");
        Route::get("/user/create", [UserController::class, "create"])->name("user.create");
        Route::post("/user/create", [UserController::class, "store"])->name("user.store");
        Route::get("/user/edit/{id}", [UserController::class, "edit"])->name("user.edit");
        Route::patch("/user/update/{id}", [UserController::class, "update"])->name("user.update");
        Route::delete("/user/delete/{id}", [UserController::class, "destroy"])->name("user.delete");
    });
});

require __DIR__ . '/auth.php';
