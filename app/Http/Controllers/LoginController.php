<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{

   public function verLogin()
    {
          return view('iniciar-sesion'); 
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validate([
            'usuario' => 'required',
            'contraseña' => 'required',
        ]);

        if ($credentials['usuario'] === 'admin' && $credentials['contraseña'] === 'admin') {
            return redirect()->intended('administracion');
        }

        return back()->withErrors([
            'usuario' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
}