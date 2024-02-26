<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInspectionRequest;
use App\Http\Requests\UpdateInspectionRequest;
use App\Inspections;

class InspectionController extends Controller
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
     * @param  \App\Inspections  $inspections
     * @return \Illuminate\Http\Response
     */
    public function show(Inspections $inspections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inspections  $inspections
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspections $inspections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInspectionRequest  $request
     * @param  \App\Inspections  $inspections
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInspectionRequest $request, Inspections $inspections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inspections  $inspections
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspections $inspections)
    {
        //
    }
}
