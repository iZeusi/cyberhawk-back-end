<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComponentTypeRequest;
use App\Http\Requests\UpdateComponentTypeRequest;
use App\Models\ComponentType;
use Illuminate\Http\JsonResponse;

class ComponentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = ComponentType::all()->map(function ($componentType) {
            return [
                'id' => $componentType->id,
                'name' => $componentType->name,
                'created_at' => $componentType->created_at->toIso8601String(),
                'updated_at' => $componentType->updated_at->toIso8601String(),
            ];
        });

        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComponentTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComponentTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ComponentType $componentType
     * @return JsonResponse
     */
    public function show(ComponentType $componentType): JsonResponse
    {
        return response()->json($componentType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function edit(ComponentType $componentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComponentTypeRequest  $request
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComponentTypeRequest $request, ComponentType $componentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComponentType $componentType)
    {
        //
    }
}
