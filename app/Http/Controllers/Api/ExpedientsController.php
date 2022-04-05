<?php

namespace App\Http\Controllers\Api;

use App\Utilities\DBUtility;
use App\Models\Expedients;
use Illuminate\Http\Request;
use function PHPSTORM_META\map;
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

        if($request->input('filtreEstat1') == 'true'){
            array_push($values, 1);
        }
        if($request->input('filtreEstat2') == 'true'){
            array_push($values, 2);
        }
        if($request->input('filtreEstat3') == 'true'){
            array_push($values, 3);
        }
        if($request->input('filtreEstat4') == 'true'){
            array_push($values, 4);
        }
        if($request->input('filtreEstat5') == 'true'){
            array_push($values, 5);
        }

        $query = Expedients::query();

        if($request->input('filtreCodi')){
            $query->where('codi', '=', $request->input('filtreCodi'));
        }

        if(count($values) > 0){
            $query->whereIn('estats_expedients_id', $values);
        }


        $expedients = $query->paginate(10);

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
