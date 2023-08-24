<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSalesCallSummaryRequest;
use App\Models\SalesCallSummary;
use Illuminate\Http\JsonResponse;

class CallSummaryAPI extends Controller
{
    public function create(StoreSalesCallSummaryRequest $request): JsonResponse
    {
        SalesCallSummary::query()->create($request->validated());
        return response()->json("Record Successfully Posted", 201);
    }
}
