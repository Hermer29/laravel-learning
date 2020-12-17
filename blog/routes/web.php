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

Route::post('/login/submit', "AccountController@login") -> name('login-submit');

Route::get('/register', function () {
    return view('register');
}) -> name('register');

Route::post('/register/submit', "AccountController@register") -> name('register-submit');

Route::get('/accounts', 'AccountController@getAll') -> name('accounts');