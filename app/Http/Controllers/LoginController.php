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
        $username = $request->input('username');
        $password = $request->input('password');

        $user = Usuaris::with('perfil')->where('usuari', $username)->first();

        if ($user && Hash::check($password, $user->contrassenya)) {
            Auth::login($user);

            $response = response()->json(['message' => 'Login correcte.', 'home' => RouteServiceProvider::HOME], 200);
        } else {
            $response = response()->json(['message' => 'Usuari o contrasenya incorrecte.'], 401);
        }

        return $response;
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
