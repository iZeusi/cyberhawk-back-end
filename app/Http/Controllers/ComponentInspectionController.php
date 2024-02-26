<?php

namespace App\Http\Controllers;

use App\ComponentInspections;
use App\Http\Requests\StoreComponentInspectionRequest;
use App\Http\Requests\UpdateComponentInspectionRequest;

class ComponentInspectionController extends Controller
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
     * @param  \App\Http\Requests\StoreComponentInspectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComponentInspectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComponentInspections  $componentInspections
     * @return \Illuminate\Http\Response
     */
    public function show(ComponentInspections $componentInspections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComponentInspections  $componentInspections
     * @return \Illuminate\Http\Response
     */
    public function edit(ComponentInspections $componentInspections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComponentInspectionRequest  $request
     * @param  \App\ComponentInspections  $componentInspections
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComponentInspectionRequest $request, ComponentInspections $componentInspections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComponentInspections  $componentInspections
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComponentInspections $componentInspections)
    {
        //
    }
}
