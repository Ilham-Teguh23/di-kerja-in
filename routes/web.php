<?php

use App\Http\Controllers\LandingPage\AppController;
use App\Http\Controllers\Monitoring\Authorization\LoginController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AppController::class, "index"]);

Route::prefix("monitoring")->group(function() {
    Route::prefix("dashboard")->group(function() {
        Route::get("main", function() {
            return view("monitoring.pages.layouts.app");
        });
    });

    Route::prefix("authorization")->group(function() {
        Route::get("/login", [LoginController::class, "login"]);
    });
});
