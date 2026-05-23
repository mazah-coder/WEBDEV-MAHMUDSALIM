<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

Route::get('/', function () {
    return view('santri');
});
Route::get('/dashboard', function () {
    return view('Dashboard');
});
Route::resource('santri', SantriController::class);

