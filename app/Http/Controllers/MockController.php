<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class MockController extends Controller
{
    public function getTest(Request $request): JsonResponse
    {
        return response()->json(['success' => true, 'message' => 'Success', 'payload' => []]);
    }
}