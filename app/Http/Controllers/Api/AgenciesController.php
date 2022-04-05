<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AgenciesResources;
use App\Models\Agencies;
use Illuminate\Http\Request;

class AgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agencies::with('municipi')->get();

        return AgenciesResources::collection($agencies);
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
     * @param  \App\Models\Agencies  $agencies
     * @return \Illuminate\Http\Response
     */
    public function show(Agencies $agencies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agencies  $agencies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agencies $agencies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agencies  $agencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agencies $agencies)
    {
        //
    }
}
