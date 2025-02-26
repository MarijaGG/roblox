<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Charts', function () {
    return view('charts');
});

Route::get('/Marketplace', function () {
    return view('marketplace');
});

Route::get('/Create', function () {
    return view('create');
});

Route::get('/Robux', function () {
    return view('robux');
});


