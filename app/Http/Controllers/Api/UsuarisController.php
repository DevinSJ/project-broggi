<?php

namespace App\Http\Controllers\Api;

use App\Class\Utilitat;
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
    public function index(Request $request)
    {

        $filtroUsuario = $request->input('filtroUsuario');
        $filtroPerfil = $request->input('filtroPerfil');
        $filtroActivo = $request->input('filtroActivo');

        if ($filtroPerfil == 4) {
            $filtroPerfil = "";
        }

        if ($filtroActivo == 2) {
            $filtroActivo = "";
        }

        $_usuaris = Usuaris::with('perfil')->where('usuari', "like", "%" . $filtroUsuario . "%")
            ->where('perfils_id', "like", "%" . $filtroPerfil . "%")
            ->where('actiu',  "like", "%" . $filtroActivo . "%")
            ->paginate(10);


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
        $usuari = new Usuaris();

        $usuari->usuari = $request->input('usuari');
        $usuari->nom = $request->input('nom');
        $usuari->cognoms = $request->input('cognoms');
        $usuari->contrassenya = bcrypt($request->input('contrassenya'));

        $usuari->perfils_id = $request->input('perfils_id');

        $usuari->actiu = $request->input('actiu');

        try {
            $usuari->save();

            $response = (new UsuarisResource($usuari))
                ->response()
                ->setStatusCode(201);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()
                ->json(["error" => $mensaje], 400);
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
    public function update(Request $request, Usuaris $user)
    {

        $user->usuari = $request->input('usuari');
        $user->nom = $request->input('nom');
        $user->cognoms = $request->input('cognoms');
        $user->perfils_id = $request->input('perfils_id');
        $user->actiu = $request->input('actiu');

        try {
            $user->save();

            $response = (new UsuarisResource($user))
                ->response()
                ->setStatusCode(201);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()
                ->json(["error" => $mensaje], 400);
        }


        return $response;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuaris  $usuaris
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, Usuaris $user)
    {

        $user->contrassenya = bcrypt($request->input('contrassenya'));

        try {
            $user->save();

            $response = (new UsuarisResource($user))
                ->response()
                ->setStatusCode(201);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()
                ->json(["error" => $mensaje], 400);
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
