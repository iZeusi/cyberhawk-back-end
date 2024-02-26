<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTurbineRequest;
use App\Http\Requests\UpdateTurbineRequest;
use App\Models\Component;
use App\Models\Inspection;
use App\Models\Turbine;
use App\Models\WindFarm;
use Illuminate\Http\JsonResponse;

class TurbineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = Turbine::all()->map(function ($turbine) {
            return [
                'id' => $turbine->id,
                'name' => $turbine->name,
                'farm_id' => $turbine->farm_id,
                'lat' => $turbine->lat,
                'lng' => $turbine->lng,
                'created_at' => $turbine->created_at->toIso8601String(),
                'updated_at' => $turbine->updated_at->toIso8601String(),
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
     * @param  \App\Http\Requests\StoreTurbineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTurbineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Turbine $turbine
     * @return JsonResponse
     */
    public function show(Turbine $turbine)
    {
        return response()->json($turbine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Turbine $turbine
     * @return \Illuminate\Http\Response
     */
    public function edit(Turbine $turbine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTurbineRequest  $request
     * @param Turbine $turbine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTurbineRequest $request, Turbine $turbine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Turbine $turbine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turbine $turbine)
    {
        //
    }

    /**
     * Display specified resource's components.
     *
     * @param Turbine $turbine
     * @return JsonResponse
     */
    public function components(Turbine $turbine): JsonResponse
    {
        return response()->json(['data' => $turbine->components]);
    }

    /**
     * Display specified resource's component.
     *
     * @param Turbine $turbine
     * @param Component $component
     * @return JsonResponse
     */
    public function showComponent(Turbine $turbine, Component $component): JsonResponse
    {
        return response()->json($turbine->components()->where('id', $component->id)->first());
    }

    /**
     * Display specified resource's inspections.
     *
     * @param Turbine $turbine
     * @return JsonResponse
     */
    public function inspections(Turbine $turbine): JsonResponse
    {
        return response()->json(['data' => $turbine->inspections]);
    }

    /**
     * Display specified resource's inspection.
     *
     * @param Turbine $turbine
     * @param Inspection $inspection
     * @return JsonResponse
     */
    public function showInspection(Turbine $turbine, Inspection $inspection): JsonResponse
    {
        return response()->json($turbine->inspections()->where('id', $inspection->id)->first());
    }
}
