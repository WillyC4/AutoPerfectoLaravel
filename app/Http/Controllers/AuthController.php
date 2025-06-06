<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController
{
    //-------- vista para registrar un nuevo usuario -------
    public function showRegister()
    {
        return view('auth.register');
    }

    //-------- vista para iniciar sesión -------
    public function showLogin()
    {
        return view('auth.login');
    }

    //-------- registrar un nuevo usuario -------
    public function register(Request $request)
    {
        $validated=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('autos.index')->with('success', 'Registro exitoso!');
    }

    //-------- iniciar sesión -------
    public function login(Request $request)
    {
        $validated=$request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validated)){
            $request->session()->regenerate();

            return redirect()->route('autos.index')->with('success', 'Login exitoso!');
        }
        
        throw ValidationException::withMessages([
            'Credentials' => 'No hay registros que coincidan con esos datos.',
        ]);

    }

    //-------- cerrar sesión -------
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Su sesión se cerró satisfactoriamente!');
    }
}
