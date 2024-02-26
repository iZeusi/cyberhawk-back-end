<?php

namespace App\Http\Controllers;

use App\Components;
use App\Http\Requests\StoreComponentRequest;
use App\Http\Requests\UpdateComponentRequest;

class ComponentController extends Controller
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
     * @param  \App\Components  $components
     * @return \Illuminate\Http\Response
     */
    public function show(Components $components)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Components  $components
     * @return \Illuminate\Http\Response
     */
    public function edit(Components $components)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComponentRequest  $request
     * @param  \App\Components  $components
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComponentRequest $request, Components $components)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Components  $components
     * @return \Illuminate\Http\Response
     */
    public function destroy(Components $components)
    {
        //
    }
}
