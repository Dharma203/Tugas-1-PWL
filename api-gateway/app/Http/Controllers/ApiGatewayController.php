<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiGatewayController extends Controller
{
    public function forward(Request $request, $service, $endpoint)
    {
        // Set up the services
        $services = [
            'user' => 'http://localhost:8001/api',
            'product' => 'http://localhost:8002/api',
            'order' => 'http://localhost:8003/api'
        ];

        // Forward the request to the correct service
        $response = Http::send($request->method(), "{$services[$service]}/{$endpoint}", [
            'json' => $request->all()
        ]);

        return response()->json($response->json(), $response->status());
    }
}
