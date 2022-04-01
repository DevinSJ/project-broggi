<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EstatsAgenciesResources;
use App\Models\Estats_agencies;
use Illuminate\Http\Request;

class EstatsAgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estats = Estats_agencies::all();

        return EstatsAgenciesResources::collection($estats);
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
     * @param  \App\Models\Estats_agencies  $estats_agencies
     * @return \Illuminate\Http\Response
     */
    public function show(Estats_agencies $estats_agencies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estats_agencies  $estats_agencies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estats_agencies $estats_agencies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estats_agencies  $estats_agencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estats_agencies $estats_agencies)
    {
        //
    }
}
