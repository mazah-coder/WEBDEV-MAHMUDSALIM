<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::resource('santri', SantriController::class);

