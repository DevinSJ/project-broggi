<?php

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
    return redirect('/expedients');
});

Route::get('/login', function () {
    if (!Auth::check()) {
        $response = view('login/index');
    } else {
        $response = redirect(RouteServiceProvider::HOME);
    }

    return $response;
});

Route::middleware(['auth'])->group(function () {
    Route::get('/expedients', function () {
        return view('menu/expedients');
    });
});
