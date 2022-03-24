<?php

namespace App\Http\Controllers\Api;

use App\Utilities\DBUtility;
use Illuminate\Http\Request;
use App\Models\Ajudes_frases;
use App\Http\Controllers\Controller;
use App\Http\Resources\AjudesFrasesResources;
use Illuminate\Database\QueryException;

class AjudesFrasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $search = $request->input('search');
            $type = $request->input('type');;

            $ajudes_frases = Ajudes_frases::where('ca_lang', 'LIKE', '%' . $search . '%')->get(['ca_lang', $type]);
            $response = AjudesFrasesResources::collection($ajudes_frases);
        } catch (QueryException $ex) {
            $message = DBUtility::getPDOErrorMessage($ex);
            $response = response()->json(['error' => $message], 400);
        }

        return $response;
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
     * @param  \App\Models\Ajudes_frases  $ajudes_frases
     * @return \Illuminate\Http\Response
     */
    public function show(Ajudes_frases $ajudes_frases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ajudes_frases  $ajudes_frases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ajudes_frases $ajudes_frases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ajudes_frases  $ajudes_frases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ajudes_frases $ajudes_frases)
    {
        //
    }
}
