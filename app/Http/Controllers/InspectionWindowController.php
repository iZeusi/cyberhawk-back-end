<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInspectionWindowRequest;
use App\Http\Requests\UpdateInspectionWindowRequest;
use App\InspectionWindows;

class InspectionWindowController extends Controller
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
     * @param  \App\Http\Requests\StoreInspectionWindowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInspectionWindowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InspectionWindows  $inspectionWindows
     * @return \Illuminate\Http\Response
     */
    public function show(InspectionWindows $inspectionWindows)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InspectionWindows  $inspectionWindows
     * @return \Illuminate\Http\Response
     */
    public function edit(InspectionWindows $inspectionWindows)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInspectionWindowRequest  $request
     * @param  \App\InspectionWindows  $inspectionWindows
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInspectionWindowRequest $request, InspectionWindows $inspectionWindows)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InspectionWindows  $inspectionWindows
     * @return \Illuminate\Http\Response
     */
    public function destroy(InspectionWindows $inspectionWindows)
    {
        //
    }
}
