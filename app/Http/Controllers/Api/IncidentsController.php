<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\IncidentsResources;
use App\Models\Incidents;
use Illuminate\Http\Request;

class IncidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidents = Incidents::all();
         return IncidentsResources::collection($incidents);
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
     * @param  \App\Models\Incidents  $incidents
     * @return \Illuminate\Http\Response
     */
    public function show(Incidents $incidents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidents  $incidents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidents $incidents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidents  $incidents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidents $incidents)
    {
        //
    }
}
