<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Assalamualaikum STTNF, Selamat belajar laravel 11";
});
