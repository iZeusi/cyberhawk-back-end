<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWindFarmRequest;
use App\Http\Requests\UpdateWindFarmRequest;
use App\Models\Turbine;
use App\Models\WindFarm;
use Illuminate\Http\JsonResponse;

class WindFarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = WindFarm::all()->map(function ($windFarm) {
            return [
                'id' => $windFarm->id,
                'name' => $windFarm->name,
                'created_at' => $windFarm->created_at->toIso8601String(),
                'updated_at' => $windFarm->updated_at->toIso8601String(),
            ];
        });

        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreWindFarmRequest $request
     * @return JsonResponse
     */
    public function store(StoreWindFarmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param WindFarm $windFarm
     * @return JsonResponse
     */
    public function show(WindFarm $windFarm): JsonResponse
    {

        return response()->json($windFarm);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param WindFarm $windFarm
     * @return JsonResponse
     */
    public function edit(WindFarm $windFarm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWindFarmRequest  $request
     * @param WindFarm $windFarm
     * @return JsonResponse
     */
    public function update(UpdateWindFarmRequest $request, WindFarm $windFarm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param WindFarm $windFarm
     * @return JsonResponse
     */
    public function destroy(WindFarm $windFarm)
    {
        //
    }

    /**
     * Display specified resource's turbines.
     *
     * @param WindFarm $windFarm
     * @return JsonResponse
     */
    public function turbines(WindFarm $windFarm): JsonResponse
    {
        return response()->json(['data' => $windFarm->turbines]);
    }

    /**
     * Display specified resource's turbine.
     *
     * @param WindFarm $windFarm
     * @param Turbine $turbine
     * @return JsonResponse
     */
    public function showTurbine(WindFarm $windFarm, Turbine $turbine): JsonResponse
    {
        return response()->json($windFarm->turbines()->where('id', $turbine->id)->first());
    }
}
