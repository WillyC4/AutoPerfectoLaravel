<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController
{
    //-------- vista de usuarios -------
    public function index()
    {
        $usuarios = User::paginate(10);
        return view('usuarios.index', compact('usuarios'));
    }

    //------- editar un usuario -------
    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    //------- actualizar un usuario -------
    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'role' => 'required|in:admin,cliente',
        ]);

        $usuario->update(['role' => $request->input('role')]);

        return redirect()->route('usuarios.index')->with('success', 'Rol actualizado correctamente.');
    }

    //------- eliminar un usuario -------
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }
    
}