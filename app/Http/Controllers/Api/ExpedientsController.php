<?php

namespace App\Http\Controllers\Api;

use DateTime;
use App\Class\Utilitat;
use App\Models\Expedients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\ExpedientsResource;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class ExpedientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedients = Expedients::with('cartes_trucades')->get();

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

        $new_date = new DateTime();
        $new_date->format('Y-m-d H:i:s');

        $expedient->data_ultima_modificacio = $new_date;
        $expedient->estats_expedients_id = $request->input('estat_exp');
        // DB::beginTransaction();

        // try {
        //     DB::delete($expedient);
        //     DB::insert($new_expedient);

        //     $response = \response()
        //                 ->json(['missatge' => 'Registre esborrat correctament'], 200);

        //     DB::commit();
        // } catch (QueryException $ex) {
        //     DB::rollBack();
        // $missatge = Utilitat::errorMessage($ex);
        // $response = \response()
        //             ->json(['error' => $missatge], 400);
        // }

        try {

            $expedient->save();

            $response = (new ExpedientsResource($expedient))
                ->response()
                ->setStatusCode(201);
        } catch (QueryException $ex) {
            $missatge = Utilitat::errorMessage($ex);
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
