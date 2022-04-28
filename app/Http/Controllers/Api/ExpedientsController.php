<?php

namespace App\Http\Controllers\Api;

use App\Models\Expedients;
use App\Utilities\DBUtility;
use Illuminate\Http\Request;
use App\Models\Cartes_trucades;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\ExpedientsResource;

class ExpedientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $values = [];

        $query = Expedients::query()->with('cartes_trucades');

        if ($request->input('filtreEstat1') == 'true') array_push($values, 1);
        if ($request->input('filtreEstat2') == 'true') array_push($values, 2);
        if ($request->input('filtreEstat3') == 'true') array_push($values, 3);
        if ($request->input('filtreEstat4') == 'true') array_push($values, 4);
        if ($request->input('filtreEstat5') == 'true') array_push($values, 5);

        if ($request->input('filtreCodi')) $query->where('codi', 'LIKE', '%' . $request->input('filtreCodi') . '%');
        if (count($values) > 0) $query->whereIn('estats_expedients_id', $values);

        $expedients = $query->orderByDesc('data_ultima_modificacio', 'data_creacio')->paginate(10);

        return ExpedientsResource::collection($expedients);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function expedients_call(Request $request)
    {
        if (
            $request->has('phone') &&
            $request->has('incident') &&
            $request->has('outCatalunya') &&
            $request->has('provinceOutOfCatalunya') &&
            $request->has('townOutOfCatalunya') &&
            $request->has('provinceSelected') &&
            $request->has('townSelected')
        ) {
            $phone = $request->input('phone');
            $incident = $request->input('incident');
            $outCatalunya = $request->input('outCatalunya');
            $provinceOutOfCatalunya = $request->input('provinceOutOfCatalunya');
            $townOutOfCatalunya = $request->input('townOutOfCatalunya');
            $provinceSelected = $request->input('provinceSelected');
            $townSelected = $request->input('townSelected');

            $queryCalls = Cartes_trucades::query();

            $queryCalls->where('fora_catalunya', $outCatalunya == 'false' ? 0 : 1)
                ->where(function ($query) use ($phone, $incident, $outCatalunya, $provinceOutOfCatalunya, $townOutOfCatalunya, $provinceSelected, $townSelected) {
                    if (isset($phone)) $query->orWhere('telefon', 'LIKE', $phone . '%');
                    if (isset($incident)) $query->orWhere('incidents_id', $incident);

                    if ($outCatalunya == 'false') {
                        if (isset($provinceSelected)) $query->orWhere('provincies_id', $provinceSelected);
                        if (isset($townSelected)) $query->orWhere('municipis_id', $townSelected);
                    } else {
                        if (isset($provinceOutOfCatalunya)) $query->orWhere('descripcio_localitzacio', 'LIKE', '%' . strtoupper($provinceOutOfCatalunya) . '%');
                        if (isset($townOutOfCatalunya)) $query->orWhere('descripcio_localitzacio', 'LIKE', '%' . strtoupper($townOutOfCatalunya) . '%');
                    }
                });

            $ids_expedients = $queryCalls->groupBy('expedients_id')->pluck('expedients_id');

            $expedients = Expedients::with('cartes_trucades.incident')
                ->with('cartes_trucades.municipi')
                ->with('cartes_trucades.provincia')
                ->with('estat_expedient')
                ->whereIn('id', $ids_expedients)
                ->where('estats_expedients_id', '!=', 4)
                ->orderByDesc('data_ultima_modificacio', 'data_creacio')->get();
        } else {
            $expedients = Expedients::with('cartes_trucades.incident')
                ->with('cartes_trucades.municipi')
                ->with('cartes_trucades.provincia')
                ->with('estat_expedient')
                ->where('estats_expedients_id', '!=', 4)
                ->orderByDesc('data_ultima_modificacio', 'data_creacio')->get();
        }

        return ExpedientsResource::collection($expedients);
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
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function show(Expedients $expedients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expedients $expedient)
    {
        date_default_timezone_set('Europe/Madrid');
        $new_date = date('Y-m-d H:i:s');

        $expedient->data_ultima_modificacio = $new_date;
        $expedient->estats_expedients_id = $request->input('estat_exp');

        try {

            $expedient->save();

            $response = (new ExpedientsResource($expedient))
                ->response()
                ->setStatusCode(201);
        } catch (QueryException $ex) {
            $missatge = DBUtility::getPDOErrorMessage($ex);
            $response = \response()
                ->json(['error' => $missatge], 400);
        }

        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expedients $expedients)
    {
        //
    }

    public function graph_expedients_status()
    {

        $data = DB::select("SELECT esexp.id, esexp.estat, COUNT( expe.estats_expedients_id ) as quantity
                            FROM expedients expe
                            RIGHT JOIN estats_expedients esexp ON expe.estats_expedients_id = esexp.id
                            GROUP BY esexp.estat, esexp.id
                            ORDER BY esexp.id ASC");

        return response($data);
    }


    /*
    */
}
