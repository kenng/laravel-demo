<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestIndexRequest;
use App\Services\Admin\CreateAdminAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Rakutentech\LaravelRequestDocs\Attributes\UseValidator;

class AdminController extends Controller
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

    #[UseValidator(CreateAdminAction::class)]
    public function store(Request $request): JsonResponse
    {
        $res = (new CreateAdminAction())->execute($request->all());

        return response()->json([
            'message' => 'created',
            'data' => $res,
        ], 201);
    }
}
