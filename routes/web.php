<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeopleController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', function () {
    return view('login');
});


Route::post('/register', [PeopleController::class, 'register'])->name('people-register');
