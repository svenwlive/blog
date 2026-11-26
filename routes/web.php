<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/button-test', function () {
    return view('button-test');
});
