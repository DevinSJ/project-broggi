<?php

namespace App\Http\Controllers\Api;

use App\Models\Usuaris;
use App\Utilities\DBUtility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UsuarisResource;
use App\Providers\RouteServiceProvider;
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

        if ($filtroPerfil == "null") $filtroPerfil = "";
        if ($filtroActivo == "null") $filtroActivo = "";

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
            $mensaje = DBUtility::getPDOErrorMessage($ex);
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
            $mensaje = DBUtility::getPDOErrorMessage($ex);
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
        try {
            $user->contrassenya = bcrypt($request->input('contrassenya'));
            $user->save();
            $response = response()->json(['message' => 'Contrassenya actualizat correctament'], 200);
        } catch (QueryException $ex) {
            $mensaje = DBUtility::getPDOErrorMessage($ex);
            $response = \response()
                ->json(["error" => $mensaje], 400);
        }

        return $response;
    }

    public function changePassword(Request $request, Usuaris $user) {

        $currentPassword = $request->input('current');
        $newPassword = $request->input('contrassenya');
        $repeatPassword = $request->input('repeat');

        if ($user && Hash::check($currentPassword, $user->contrassenya) && ($newPassword == $repeatPassword)) {

            $this->updatePassword($request, $user);

            $response = response()->json(['message' => 'Contrassenya actualizat correctament', 'home' => RouteServiceProvider::HOME], 200);
        } else {
            $response = response()->json(['message' => 'Les contrasenyes no coincideixen'], 401);
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


    public function graph_users_perfil()
    {

        $data = DB::select("SELECT usperfil.id,usperfil.nom ,COUNT( us.perfils_id ) as quantity FROM usuaris us
                            RIGHT JOIN perfils usperfil ON us.perfils_id = usperfil.id
                            GROUP BY usperfil.id,usperfil.nom
                            ORDER BY usperfil.id ASC");

        return response($data);
    }
}
