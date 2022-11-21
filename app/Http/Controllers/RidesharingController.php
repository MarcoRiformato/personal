<?php

namespace App\Http\Controllers;

use App\Models\Ridesharing;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RidesharingController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ridesharing  $ridesharing
     * @return \Illuminate\Http\Response
     */
    public function show(Ridesharing $ridesharing)
    {
        return Inertia::render('ElbaPassaggi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ridesharing  $ridesharing
     * @return \Illuminate\Http\Response
     */
    public function edit(Ridesharing $ridesharing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ridesharing  $ridesharing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ridesharing $ridesharing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ridesharing  $ridesharing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ridesharing $ridesharing)
    {
        //
    }
}