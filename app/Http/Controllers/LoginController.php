<?php

namespace App\Http\Controllers;

use App\Models\Usuaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    public function show() {
        if (Auth::check()) {
            $response = redirect(RouteServiceProvider::HOME);
        } else {
            $response = view('login.index');
        }

        return $response;
    }

    public function login(Request $request)
    {
        $usuari = $request->input('usuari');
        $contrassenya = $request->input('contrassenya');

        $user = Usuaris::where('usuari', $usuari)->first();

        if ($user != null && Hash::check($contrassenya, $user->contrassenya)) {
            Auth::login($user);
            $response = redirect('/home');
        } else {
            $request->flash('error', 'Usuari o contrasenya incorrecte');
            $response = redirect('/login')->withInput();
        }

        return $response;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
