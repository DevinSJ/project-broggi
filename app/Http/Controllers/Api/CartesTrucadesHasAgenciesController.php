<?php

namespace App\Http\Controllers\Api;

use App\Utilities\DBUtility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Models\Cartes_trucades_has_agencies;
use App\Http\Resources\CartesTrucadesHasAgenciesResources;

class CartesTrucadesHasAgenciesController extends Controller
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
     * @param  \App\Models\Cartes_trucades_has_agencies  $cartes_trucades_has_agencies
     * @return \Illuminate\Http\Response
     */
    public function show(Cartes_trucades_has_agencies $cartes_trucades_has_agencies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartes_trucades_has_agencies  $cartes_trucades_has_agencies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_call, $id_agency)
    {
        $cartes_trucades_has_agencies = Cartes_trucades_has_agencies::where('cartes_trucades_id', '=', $id_call)
                                                                    ->where('agencies_id', '=', $id_agency)
                                                                    ->first();

        $cartes_trucades_has_agencies->estats_agencies_id =intval($request->input('estat_agencia'));

        // return response($cartes_trucades_has_agencies);

        try {
            $cartes_trucades_has_agencies->save();

            $response = (new CartesTrucadesHasAgenciesResources($cartes_trucades_has_agencies))
                        ->response()
                        ->setStatusCode(201);

        } catch (QueryException $ex) {
            $missatge = DBUtility::getPDOErrorMessage($ex);
            $response = \response()
                        ->json(['error' => $missatge], 400);
        }

        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartes_trucades_has_agencies  $cartes_trucades_has_agencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartes_trucades_has_agencies $cartes_trucades_has_agencies)
    {
        //
    }
}
