<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Http\Requests\StoreComponentRequest;
use App\Http\Requests\UpdateComponentRequest;
use App\Models\Grade;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = Component::all()->map(function ($component) {
            return [
                'id' => $component->id,
                'component_type_id' => $component->component_type_id,
                'turbine_id' => $component->turbine_id,
                'created_at' => $component->created_at->toIso8601String(),
                'updated_at' => $component->updated_at->toIso8601String(),
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
     * @param  \App\Http\Requests\StoreComponentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComponentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Component $component
     * @return JsonResponse
     */
    public function show(Component $component): JsonResponse
    {
        return response()->json($component);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Component $component
     * @return Response
     */
    public function edit(Component $component)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateComponentRequest $request
     * @param Component $component
     * @return Response
     */
    public function update(UpdateComponentRequest $request, Component $component)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Component $component
     * @return Response
     */
    public function destroy(Component $component)
    {
        //
    }

    /**
     * Display specified resource's grades.
     *
     * @param Component $component
     * @return JsonResponse
     */
    public function grades(Component $component): JsonResponse
    {
        return response()->json(['data' => $component->grades]);
    }

    /**
     * Display specified resource's grade.
     *
     * @param Component $component
     * @param Grade $grade
     * @return JsonResponse
     */
    public function showGrade(Component $component, Grade $grade): JsonResponse
    {
        return response()->json($component->grades()->where('id', $grade->id)->first());
    }
}
