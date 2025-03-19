<?php

use Illuminate\Support\Facades\Route;

Route::post('/store', [OrderController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
