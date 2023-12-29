<?php

namespace App\Http\Controllers;

use App\Http\Requests\Application\StoreRequest;
use App\Http\Resources\Application\ApplicationResource;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use function PHPUnit\Framework\isInstanceOf;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index():array
    {
        $application = Application::all();
        return ApplicationResource::collection($application)->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $data = $request->validated();
        Application::create($data);

        return response()->json([
            'success' => true,
            'description' => 'store'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Application $application):array
    {
        return ApplicationResource::make($application)->resolve();
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Application $application):JsonResponse
    {
        $data = $request->validated();
        $application->update($data);

        return response()->json([
            'success' => true,
            'description' => 'updated'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application): JsonResponse
    {
        $application->delete();

        return response()->json([
            'success' => true,
            'description' => 'destroy'
        ], 200);
    }
}
