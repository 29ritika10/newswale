<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/",[HomeController::class,"index"])->name("homepage");
Route::get("/insert",[HomeController::class,"create"])->name("create");
Route::get("/view",[HomeController::class,"view"])->name('view');