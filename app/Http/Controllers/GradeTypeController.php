<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGradeTypeRequest;
use App\Http\Requests\UpdateGradeTypeRequest;
use App\Models\GradeType;
use Illuminate\Http\JsonResponse;

class GradeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = GradeType::all()->map(function ($gradeType) {
            return [
                'id' => $gradeType->id,
                'name' => $gradeType->name,
                'score' => $gradeType->score,
                'created_at' => $gradeType->created_at->toIso8601String(),
                'updated_at' => $gradeType->updated_at->toIso8601String(),
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
     * @param  \App\Http\Requests\StoreGradeTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param GradeType $gradeType
     * @return JsonResponse
     */
    public function show(GradeType $gradeType): JsonResponse
    {
        return response()->json($gradeType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GradeType  $gradeType
     * @return \Illuminate\Http\Response
     */
    public function edit(GradeType $gradeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradeTypeRequest  $request
     * @param  \App\Models\GradeType  $gradeType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradeTypeRequest $request, GradeType $gradeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GradeType  $gradeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradeType $gradeType)
    {
        //
    }
}
