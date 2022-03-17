<?php

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;

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

Route::get('/login',[App\Http\Controllers\LoginController::class, 'show']);
Route::post('/login',[App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::get('/logout',[App\Http\Controllers\LoginController::class,'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get(RouteServiceProvider::HOME, function () {
        return view('menu/expedients');
    });
});
