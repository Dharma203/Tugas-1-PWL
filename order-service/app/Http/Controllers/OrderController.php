<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Simulasi pembuatan pesanan
        return response()->json(['message' => 'Order placed successfully'], 201);
    }
}
