<?php

namespace App\Http\Controllers\Api;

use App\Models\Expedients;
use App\Utilities\DBUtility;
use Illuminate\Http\Request;
use App\Models\Cartes_trucades;
use App\Models\Dades_personals;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Cartes_trucades_has_agencies;
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
            $query->where('codi_trucada', 'like', '%' . $request->input('filtreCodiCall') . '%');
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
        $carta_trucada = new Cartes_trucades();


        $address = $request->input('address');
        $agenciesSelected = $request->input('agenciesSelected');
        $antecedents = $request->input('antecedents');
        $callDateTimeIni = $request->input('callDateTimeIni');
        $codeCall = $request->input('codeCall');
        $commonNote = $request->input('commonNote');
        $createNewExpedient = $request->input('createNewExpedient');
        $cronoSeconds = $request->input('cronoSeconds');
        $directionHighway = $request->input('directionHighway');
        $expedientCode = $request->input('expedientCode');
        $expedientSelected = $request->input('expedientSelected');
        $extraInformationStreet = $request->input('extraInformationStreet');
        $incidentSelected = $request->input('incidentSelected');
        $kmHighway = $request->input('kmHighway');
        $nameHighway = $request->input('nameHighway');
        $nameStreet = $request->input('nameStreet');
        $numberDoor = $request->input('numberDoor');
        $numberFloor = $request->input('numberFloor');
        $numberStair = $request->input('numberStair');
        $numberStreet = $request->input('numberStreet');
        $outCatalunya = $request->input('outCatalunya');
        $saveNewPhoneNumber = $request->input('saveNewPhoneNumber');
        $phone = $request->input('phone');
        $phoneSelected = $request->input('phoneSelected');
        $provenance = $request->input('provenance');
        $provinceOutOfCatalunya = $request->input('provinceOutOfCatalunya');
        $provinceSelected = $request->input('provinceSelected');
        $regionSelected = $request->input('regionSelected');
        $singularPoint = $request->input('singularPoint');
        $townCallSelected = $request->input('townCallSelected');
        $townOutOfCatalunya = $request->input('townOutOfCatalunya');
        $townSelected = $request->input('townSelected');
        $typeLocationSelected = $request->input('typeLocationSelected');
        $typeStreet = $request->input('typeStreet');
        $user = $request->input('user');

        try {
            DB::beginTransaction();

            if ($createNewExpedient) {
                $expedient = new Expedients();
                $expedient->data_creacio = date('Y-m-d H:i:s');
                $expedient->data_ultima_modificacio = date('Y-m-d H:i:s');
                $expedient->estats_expedients_id = 1; //Default in progress.
                $expedient->codi = $expedientCode;
                $expedient->save();

                $carta_trucada->expedients_id = $expedient['id'];
            } else {
                $carta_trucada->expedients_id = $expedientSelected['id'];
            }

            $carta_trucada->usuaris_id = $user['id']; // Con $user->id da error porque user en este caso se envia como un array, no como un objeto.

            $carta_trucada->codi_trucada = $codeCall;
            $carta_trucada->data_hora = $callDateTimeIni;
            $carta_trucada->temps_trucada = $cronoSeconds;

            if (!$phoneSelected) {
                if ($saveNewPhoneNumber) {
                    $dada_personal = new Dades_personals();
                    $dada_personal->telefon = $phone;
                    $dada_personal->adreca = $address;
                    $dada_personal->antecedents = $antecedents;
                    $dada_personal->save();

                    $carta_trucada->dades_personals_id = $dada_personal['id'];
                }
            } else {
                $dada_personal = Dades_personals::find($phoneSelected['id']);
                $dada_personal->telefon = $phone;
                $dada_personal->adreca = $address;
                $dada_personal->antecedents = $antecedents;
                $dada_personal->save();

                $carta_trucada->dades_personals_id = $dada_personal->id;
            }

            $carta_trucada->telefon = $phone;
            $carta_trucada->procedencia_trucada = $provenance;
            $carta_trucada->adreca_trucada = $address;
            $carta_trucada->fora_catalunya = $outCatalunya;

            $description_location = "";

            if ($outCatalunya) {
                $description_location = $provinceOutOfCatalunya . ";" . $townOutOfCatalunya;
            } else {
                $province = "";
                $region = "";
                $town = "";

                if ($provinceSelected) $province = $provinceSelected['nom']; //Igual que con user.
                if ($regionSelected) $region = $regionSelected['nom']; //Igual que con user.
                if ($townSelected) $town = $townSelected['nom']; //Igual que con user.

                switch ($typeLocationSelected['id']) { //Igual que con user.
                    case 1: //CARRERS
                        $description_location = $typeStreet . " " . $nameStreet . " " . $numberStreet . ", Escalera " . $numberStair . ", Pis " . $numberFloor . " Porta " . $numberDoor;

                        break;
                    case 2: //PUNT SINGULAR
                        $description_location = $singularPoint . ", " . $town;

                        break;
                    case 3: //ENTITAT POBLACIÓ
                        $description_location = $province . " " . $region . " " . $town;

                        break;
                    case 4: //CARRETERA
                        $description_location = $nameHighway . " " . $directionHighway . ", " . $kmHighway . ", " . $province . " " . $region . " " . $town;

                        break;
                }
            }

            $carta_trucada->descripcio_localitzacio = trim($description_location);
            $carta_trucada->altres_ref_localitzacio = $extraInformationStreet;
            $carta_trucada->nota_comuna_descripcio = $commonNote;

            $carta_trucada->municipis_id_trucada = $townCallSelected['id'] ?? null;
            $carta_trucada->provincies_id = $provinceSelected['id'] ?? null;
            $carta_trucada->municipis_id = $townSelected['id'] ?? null;
            $carta_trucada->tipus_localitzacions_id = $typeLocationSelected['id'];
            $carta_trucada->incidents_id = $incidentSelected['id'] ?? null;
            $carta_trucada->save();

            $carta_trucada_agencia = new Cartes_trucades_has_agencies();
            //Insert agencies.
            foreach ($agenciesSelected as $agency) {
                $carta_trucada_agencia->cartes_trucades_id = $carta_trucada['id'];
                $carta_trucada_agencia->agencies_id = $agency['id'];
                $carta_trucada_agencia->estats_agencies_id = 1; //Default contacted.
            }

            if ($agenciesSelected) {
                $carta_trucada_agencia->save();
            }

            $response = (new Cartes_trucadesResource($carta_trucada))
                ->response()
                ->setStatusCode(201);

            DB::commit();
        } catch (QueryException $ex) {
            $mensaje = DBUtility::getPDOErrorMessage($ex);
            $response = \response()
                ->json(["error" => $mensaje], 400);

            DB::rollback();
        }

        return $response;
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
