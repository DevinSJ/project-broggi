<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Cartes_trucades;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\Cartes_trucadesResource;

class CartesTrucadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Cartes_trucades::query()
            ->with('cartes_trucades_has_agencies.agencia')
            ->with('usuari')
            ->with('tipo_localitzacio')
            ->with('expedient')
            ->with('dada_personal')
            ->with('provincia')
            ->with('municipi.comarca')
            ->with('municipi_trucada')
            ->with('incident.tipo_incident');

        if ($request->input('filtreCodiCall')) {
            $query->where('codi_trucada', 'like', $request->input('filtreCodiCall'));
        }

        if ($request->input('filtreCodiExp')) {
            // $expedients = Expedients::select('id')->where('codi', 'like', '%' .$request->input('filtreCodiExp') .'%')->get();
            $query->whereHas('expedient', function (Builder $builder) use ($request) {
                $builder->where('codi', 'like', '%' . $request->input('filtreCodiExp') . '%');
            });
        }

        if ($request->input('userTypeId') == 1) {
            $query->where('usuaris_id', '=', $request->input('userId'));
        }

        $trucades = $query->paginate(5);

        return Cartes_trucadesResource::collection($trucades);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calls_from_expedients(Request $request, $idExpedient)
    {
        $id_rol = $request->input("id_rol");
        $id_user = $request->input("id_user");

        if ($id_rol == '1') {
            $trucades = Cartes_trucades::with('cartes_trucades_has_agencies.agencia')
                ->with('usuari')
                ->with('tipo_localitzacio')
                ->with('expedient')
                ->with('dada_personal')
                ->with('provincia')
                ->with('municipi.comarca')
                ->with('municipi_trucada')
                ->with('incident.tipo_incident')
                ->with('cartes_trucades_has_agencies.agencia')
                ->with('cartes_trucades_has_agencies.estat_agencia')
                ->where('expedients_id', '=', $idExpedient)
                ->where('usuaris_id', '=', $id_user)
                ->get();
        } else {
            $trucades = Cartes_trucades::with('cartes_trucades_has_agencies.agencia')
                ->with('usuari')
                ->with('tipo_localitzacio')
                ->with('expedient')
                ->with('dada_personal')
                ->with('provincia')
                ->with('municipi.comarca')
                ->with('municipi_trucada')
                ->with('incident.tipo_incident')
                ->with('cartes_trucades_has_agencies.agencia')
                ->with('cartes_trucades_has_agencies.estat_agencia')
                ->where('expedients_id', '=', $idExpedient)
                ->get();
        }

        return Cartes_trucadesResource::collection($trucades);
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
     * @param  \App\Models\Cartes_trucades  $cartes_trucades
     * @return \Illuminate\Http\Response
     */
    public function show(Cartes_trucades $cartes_trucades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartes_trucades  $cartes_trucades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartes_trucades $cartes_trucades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartes_trucades  $cartes_trucades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartes_trucades $cartes_trucades)
    {
        //
    }


    public function graph_calls()
    {

        $data = DB::select("SELECT descripcio, COUNT( incidents_id )as quantity FROM incidents
        INNER JOIN cartes_trucades
        on cartes_trucades.incidents_id =incidents.id
        GROUP BY incidents_id, descripcio
        ");

        return response($data);
    }
}
