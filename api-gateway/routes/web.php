<?php

use Illuminate\Support\Facades\Route;

Route::any('/{service}/{endpoint}', [ApiGatewayController::class, 'forward']);

Route::get('/products', function () {
    return view('products');
});
