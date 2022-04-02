<?php

namespace App\Http\Controllers\Api;

use App\Utilities\DBUtility;
use App\Models\Usuaris;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UsuarisResource;
use Illuminate\Database\QueryException;

class UsuarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_usuaris= Usuaris::with('perfil')->paginate(5);

        return UsuarisResource::collection($_usuaris);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuari=new Usuaris();

        $usuari->usuari=$request->input('usuari');
        $usuari->nom=$request->input('nom');
        $usuari->cognoms=$request->input('cognoms');
        $usuari->contrassenya=bcrypt($request->input('contrassenya'));

        $usuari->perfils_id=$request->input('perfils_id');

        $usuari->actiu= $request->input('actiu');

        try{
            $usuari->save();

            $response=(new UsuarisResource($usuari))
                        ->response()
                        ->setStatusCode(201);

        }catch(QueryException $ex){
            $mensaje=DBUtility::getPDOErrorMessage($ex);
            $response=\response()
                        ->json(["error"=>$mensaje], 400);
        }


        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuaris  $usuaris
     * @return \Illuminate\Http\Response
     */
    public function show(Usuaris $usuaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuaris  $usuaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuaris $usuari)
    {

        $usuari->usuari=$request->input('usuari');
        $usuari->nom=$request->input('nom');
        $usuari->cognoms=$request->input('cognoms');
        $usuari->contrassenya=bcrypt($request->input('contrassenya'));
        $usuari->perfils_id=$request->input('perfils_id');

        $usuari->actiu= ($request->input('actiu')=='actiu');

        try{
            $usuari->save();

            $response=(new UsuarisResource($usuari))
                        ->response()
                        ->setStatusCode(201);

        }catch(QueryException $ex){
            $mensaje=DBUtility::getPDOErrorMessage($ex);
            $response=\response()
                        ->json(["error"=>$mensaje], 400);
        }


        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuaris  $usuaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuaris $usuaris)
    {
        //
    }
}
