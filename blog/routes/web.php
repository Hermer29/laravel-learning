<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) -> name('home');

Route::get('/login', function () {
    return view('login');
}) -> name('login');

Route::get('/feed', function () {
    return view('feed');
}) -> name('feed');

Route::post('/login/submit', "AccountController@execute") -> name('login-submit');
