<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInspectionRequest;
use App\Http\Requests\UpdateInspectionRequest;
use App\Models\Grade;
use App\Models\Inspection;
use Illuminate\Http\JsonResponse;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = Inspection::all()->map(function ($component) {
            return [
                'id' => $component->id,
                'turbine_id' => $component->turbine_id,
                'inspected_at' => $component->created_at->toIso8601String(),
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
     * @param  \App\Http\Requests\StoreInspectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInspectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Inspection $inspection
     * @return JsonResponse
     */
    public function show(Inspection $inspection): JsonResponse
    {
        return response()->json($inspection);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Inspection $inspection
     * @return JsonResponse
     */
    public function edit(Inspection $inspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInspectionRequest  $request
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInspectionRequest $request, Inspection $inspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspection $inspection)
    {
        //
    }

    /**
     * Display specified resource's grades.
     *
     * @param Inspection $inspection
     * @return JsonResponse
     */
    public function grades(Inspection $inspection): JsonResponse
    {
        return response()->json(['data' => $inspection->grades]);
    }

    /**
     * Display specified resource's grade.
     *
     * @param Inspection $inspection
     * @param Grade $grade
     * @return JsonResponse
     */
    public function showGrade(Inspection $inspection, Grade $grade): JsonResponse
    {
        return response()->json($inspection->grades()->where('id', $grade->id)->first());
    }
}
