<?php

use App\Http\Controllers\Api\AgenciesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarisController;
use App\Http\Controllers\Api\AjudesFrasesController;
use App\Http\Controllers\Api\ComarquesController;
use App\Http\Controllers\Api\ExpedientsController;
use App\Http\Controllers\Api\MunicipisController;
use App\Http\Controllers\Api\ProvinciesController;
use App\Http\Controllers\TipusLocalitzacionsController;
use App\Http\Controllers\Api\CartesTrucadesController;
use App\Http\Controllers\Api\CartesTrucadesHasAgenciesController;
use App\Http\Controllers\Api\Estats_expedientsController;
use App\Http\Controllers\Api\EstatsAgenciesController;
use App\Http\Controllers\Api\IncidentsController;
use App\Http\Controllers\Api\TipusIncidentsController;
use App\Models\Estats_expedients;
use App\Models\Tipus_incidents;

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
Route::apiResource('LocationsTypes', TipusLocalitzacionsController::class);
Route::apiResource('cartestrucades', CartesTrucadesController::class);
Route::apiResource('estats_expedients', Estats_expedientsController::class);
Route::apiResource('estats_agencies', EstatsAgenciesController::class);


Route::apiResource('types_incidents', TipusIncidentsController::class);
Route::apiResource('incidents', IncidentsController::class);
Route::apiResource('agencies', AgenciesController::class);

// Customized routes
Route::get('/cartestrucades/list/{id_expedient}', [CartesTrucadesController::class, 'calls_from_expedients']);
Route::post('/expedients/put/{expedient}', [ExpedientsController::class, 'update']);
Route::post('cartes_trucades_has_agencies/put/{id_call}/{id_agency}', [CartesTrucadesHasAgenciesController::class, 'update']);
Route::post('users/put/update/{user}',[UsuarisController::class,"update"]);
Route::post('users/put/updatePassword/{user}',[UsuarisController::class,"updatePassword"]);


