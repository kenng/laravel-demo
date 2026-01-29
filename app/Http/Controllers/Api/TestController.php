<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestIndexRequest;
use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    /**
     * Test endpoint for request docs
     */
    public function index(TestIndexRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'OK',
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
    }
}
