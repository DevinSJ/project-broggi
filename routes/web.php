<?php

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return redirect(RouteServiceProvider::HOME);
});

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('expedients', function () {
        return view('templates.index');
    })->middleware(['role:1|2|3']);

    Route::get('trucades', function () {
        return view('templates.index');
    })->middleware(['role:1|2|3']);

    Route::get('grafics', function () {
        return view('templates.index');
    })->middleware(['role:1|2|3']);

    Route::get('usuaris', function () {
        return view('templates.index');
    })->middleware(['role:3']);

    Route::any('{catchall}', function () {
        return view('errors.404');
    })->where('catchall', '.*');
});
