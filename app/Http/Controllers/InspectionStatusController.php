<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInspectionStatusRequest;
use App\Http\Requests\UpdateInspectionStatusRequest;
use App\InspectionStatuses;

class InspectionStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreInspectionStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInspectionStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InspectionStatuses  $inspectionStatuses
     * @return \Illuminate\Http\Response
     */
    public function show(InspectionStatuses $inspectionStatuses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InspectionStatuses  $inspectionStatuses
     * @return \Illuminate\Http\Response
     */
    public function edit(InspectionStatuses $inspectionStatuses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInspectionStatusRequest  $request
     * @param  \App\InspectionStatuses  $inspectionStatuses
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInspectionStatusRequest $request, InspectionStatuses $inspectionStatuses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InspectionStatuses  $inspectionStatuses
     * @return \Illuminate\Http\Response
     */
    public function destroy(InspectionStatuses $inspectionStatuses)
    {
        //
    }
}
