<?php

namespace App\Http\Controllers;

use App\Grades;
use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;

class GradeController extends Controller
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
     * @param  \App\Http\Requests\StoreGradeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function show(Grades $grades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function edit(Grades $grades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradeRequest  $request
     * @param  \App\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradeRequest $request, Grades $grades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grades $grades)
    {
        //
    }
}
