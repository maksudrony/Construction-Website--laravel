<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get("/", [HomeController::class, "index"]);
Route::get("/redirects", [HomeController::class, "redirects"]);

Route::get("/users", [AdminController::class, "user"]);
Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);

Route::get("/imagesGalleries", [AdminController::class, "imagesGalleries"]);
Route::post("/uploadimage", [AdminController::class, "uploadimage"]);
Route::get("/deleteimage/{id}", [AdminController::class, "deleteimage"]);

Route::post("/contactUs", [AdminController::class, "contactUs"]);
Route::get("/viewcontactUs", [AdminController::class, "viewcontactUs"]);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
