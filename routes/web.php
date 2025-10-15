<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', function () {
    return view('auth.login');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::post('/login', function () {
    return "Login Successful!";
});

Route::post('/register', function () {
    return "Registration Successful!";
});
