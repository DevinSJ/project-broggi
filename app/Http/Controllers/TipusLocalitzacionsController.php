<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipusLocalitzacionsResources;
use App\Models\Tipus_localitzacions;
use Illuminate\Http\Request;

class TipusLocalitzacionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Tipus_localitzacions::all();

        return TipusLocalitzacionsResources::collection($types);
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
     * @param  \App\Models\Tipus_localitzacions  $tipus_localitzacions
     * @return \Illuminate\Http\Response
     */
    public function show(Tipus_localitzacions $tipus_localitzacions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipus_localitzacions  $tipus_localitzacions
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipus_localitzacions $tipus_localitzacions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipus_localitzacions  $tipus_localitzacions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipus_localitzacions $tipus_localitzacions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipus_localitzacions  $tipus_localitzacions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipus_localitzacions $tipus_localitzacions)
    {
        //
    }
}
