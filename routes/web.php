<?php

use App\Http\Controllers\UsuarisController;
use App\Http\Controllers\LoginController;
use App\Models\Usuaris;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('login.index');
});

Route::get('/login',[App\Http\Controllers\LoginController::class,'show']);
Route::post('/login',[App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::get('/login',[App\Http\Controllers\LoginController::class,'logout']);


/* Route::get('/login', function () {
    if (!Auth::check()) {
        $response = view('login/index');
    } else {
        $response = redirect(RouteServiceProvider::HOME);
    }

    return $response;
}); */

Route::middleware(['auth'])->group(function () {
    Route::get('/expedients', function () {
        $user=Auth::user();

        return view('menu/expedients',compact('user'));
    });
});

//Route::resource('usuaris',UsuarisController::class);

//Route::get('/login',[App\Http\Controllers\UsuarisController::class,'login'])->name('login');
