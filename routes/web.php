<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/button-test', function () {
    return view('button-test');
});
