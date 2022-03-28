<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarisController;
use App\Http\Controllers\Api\AjudesFrasesController;
use App\Http\Controllers\Api\ComarquesController;
use App\Http\Controllers\Api\ExpedientsController;
use App\Http\Controllers\Api\MunicipisController;
use App\Http\Controllers\Api\ProvinciesController;
use App\Http\Controllers\Api\TipusLocalitzacions;
use App\Http\Controllers\Api\TrucadesController;
use App\Http\Controllers\TipusLocalitzacionsController;

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
Route::apiResource('call', TrucadesController::class);
Route::apiResource('provinces', ProvinciesController::class);
Route::apiResource('regions', ComarquesController::class);
Route::apiResource('towns', MunicipisController::class);
Route::apiResource('LocationsTypes', TipusLocalitzacionsController::class);
