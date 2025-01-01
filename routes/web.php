<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "index"])->name("home");

Route::middleware("guest")->group(function () {
    Route::get("/login", [AuthController::class, "showLogin"])->name("login");
    Route::post("/login", [AuthController::class, "loginPost"])->name("login.post");
});
Route::middleware("auth")->group(function () {
    Route::get("/logout", [AuthController::class, "logout"])->name("logout");
});

Route::get("/dashboard", [PageController::class, "dashboard"])->name("dashboard");
Route::get("/virtual-tour", [PageController::class, "virtual_tour"])->name("virtual-tour");
Route::get("/users", [PageController::class, "users"])->name("user-role");
Route::get("/master", [PageController::class, "master"])->name("master");
Route::put("/master/{id}", [MasterController::class, "update"])->name("master.update");

Route::get("/get-data", [MasterController::class, "getData"])->name("getData");
