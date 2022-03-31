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
use App\Http\Controllers\Api\CartesTrucadesController;
use App\Http\Controllers\Api\Estats_expedientsController;
use App\Models\Estats_expedients;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

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
Route::apiResource('cartestrucades', CartesTrucadesController::class);
Route::apiResource('estats_expedients', Estats_expedientsController::class);


Route::get('/video-interactive', function () {
    $path = public_path() . '\\assets\\video\\video-interactive.mp4';

    $size = filesize($path);
    $fileContents = file_get_contents($path);

    $response = Response::make($fileContents, 200);

    $response->header('Content-Type', 'video/mp4');
    $response->header('Accept-Ranges', 'bytes');
    $response->header('Content-Length', $size);
    $response->header('Content-Range', 'bytes 1-' . $size - 1 . '/' . $size);

    return $response;
});

// Customized routes
Route::get('/cartestrucades/list/{id_expedient}', [CartesTrucadesController::class, 'calls_from_expedients']);
