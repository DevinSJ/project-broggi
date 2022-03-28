<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarisController;
use App\Http\Controllers\Api\AjudesFrasesController;
use App\Http\Controllers\Api\CartesTrucadesController;
use App\Http\Controllers\Api\Estats_expedientsController;
use App\Http\Controllers\Api\ExpedientsController;
use App\Models\Estats_expedients;

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
Route::apiResource('cartestrucades', CartesTrucadesController::class);
Route::apiResource('estats_expedients', Estats_expedientsController::class);


// Customized routes
Route::get('/cartestrucades/list/{id_expedient}', [CartesTrucadesController::class, 'calls_from_expedients']);

