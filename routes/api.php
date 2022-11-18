<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Api\UsuarisController;
use App\Http\Controllers\Api\AgenciesController;
use App\Http\Controllers\Api\ComarquesController;
use App\Http\Controllers\Api\IncidentsController;
use App\Http\Controllers\Api\MunicipisController;
use App\Http\Controllers\Api\ExpedientsController;
use App\Http\Controllers\Api\ProvinciesController;
use App\Http\Controllers\Api\AjudesFrasesController;
use App\Http\Controllers\Api\CartesTrucadesController;
use App\Http\Controllers\Api\DadesPersonalsController;
use App\Http\Controllers\Api\EstatsAgenciesController;
use App\Http\Controllers\Api\TipusIncidentsController;
use App\Http\Controllers\TipusLocalitzacionsController;
use App\Http\Controllers\Api\Estats_expedientsController;
use App\Http\Controllers\Api\CartesTrucadesHasAgenciesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('users', UsuarisController::class);
Route::apiResource('help-phrases', AjudesFrasesController::class);
Route::apiResource('expedients', ExpedientsController::class);
Route::apiResource('provinces', ProvinciesController::class);
Route::apiResource('regions', ComarquesController::class);
Route::apiResource('towns', MunicipisController::class);
Route::apiResource('locations_types', TipusLocalitzacionsController::class);
Route::apiResource('cartes_trucades', CartesTrucadesController::class);
Route::apiResource('estats_expedients', Estats_expedientsController::class);
Route::apiResource('estats_agencies', EstatsAgenciesController::class);
Route::apiResource('types_incidents', TipusIncidentsController::class);
Route::apiResource('incidents', IncidentsController::class);
Route::apiResource('agencies', AgenciesController::class);
Route::apiResource('phones', DadesPersonalsController::class);

// Customized routes
Route::get('expedients_call', [ExpedientsController::class, 'expedients_call']);
Route::get('cartes_trucades/list/{id_expedient}', [CartesTrucadesController::class, 'calls_from_expedients']);
Route::post('expedients/put/{expedient}', [ExpedientsController::class, 'update']);
Route::post('cartes_trucades_has_agencies/put/{id_call}/{id_agency}', [CartesTrucadesHasAgenciesController::class, 'update']);
Route::post('users/put/update/{user}', [UsuarisController::class, "update"]);
Route::post('users/put/updatePassword/{user}', [UsuarisController::class, "updatePassword"]);
Route::get('graph-expedients-status', [ExpedientsController::class, "graph_expedients_status"]);
Route::get('graph-users-perfil', [UsuarisController::class, "graph_users_perfil"]);
Route::get('graph-calls', [CartesTrucadesController::class, "graph_calls"]);

Route::get('video-interactive', function () {
    $path = public_path() . '\\video\\video-interactive.mp4';

    $size = filesize($path);
    $fileContents = file_get_contents($path);

    $response = Response::make($fileContents, 200);

    $response->header('Content-Type', 'video/mp4');
    $response->header('Accept-Ranges', 'bytes');
    $response->header('Content-Length', $size);
    $response->header('Content-Range', 'bytes 1-' . $size - 1 . '' . $size);

    return $response;
});

// Customized routes
Route::get('cartes_trucades/list/{id_expedient}', [CartesTrucadesController::class, 'calls_from_expedients']);
Route::post('expedients/put/{expedient}', [ExpedientsController::class, 'update']);
Route::post('cartes_trucades_has_agencies/put/{id_call}/{id_agency}', [CartesTrucadesHasAgenciesController::class, 'update']);
Route::post('users/put/update/{user}', [UsuarisController::class, "update"]);
Route::post('users/put/updatePassword/{user}', [UsuarisController::class, "updatePassword"]);
Route::post('users/changePassword/{user}', [UsuarisController::class, "changePassword"]);
Route::get('graph-expedients-status', [ExpedientsController::class, "graph_expedients_status"]);
Route::get('graph-users-perfil', [UsuarisController::class, "graph_users_perfil"]);
