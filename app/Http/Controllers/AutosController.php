<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use Illuminate\Http\Request;

class AutosController
{

    public function index()
    {
        $autos = Autos::latest()->paginate(5);
        return view('autos.indexAuto', compact('autos'))->with(request()->input('page'));
    }
    //------- vista para crear un nuevo auto -------
    public function create()
    {
        return view('autos.createAuto');
    }

    //------- almacenar un nuevo auto -------
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1886|max:' . date('Y'),
            'precio' => 'nullable|numeric|min:0',
            'rendimiento' => 'nullable|numeric|min:0',
            'seguridad' => 'nullable|string',
            'tipo_traccion' => 'nullable|string',
            'potencia_hp' => 'nullable|integer|min:0',
            'capacidad_maletero' => 'nullable|integer|min:0',
        ]);

        $requestData = $request->all();

        Autos::create($requestData);

        return redirect()->route('autos.index')->with('success', 'Auto registrado correctamente.');
    }

    //------- mostrar un auto -------
    public function show(Autos $auto)
    {
        return view('autos.showAuto', compact('auto'));
    }

    //------- editar un auto -------
    public function edit(Autos $auto)
    {
       return view('autos.editAuto', compact('auto'));
    }

    //------- actualizar un auto -------
    public function update(Request $request, Autos $auto)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1886|max:' . date('Y'),
            'precio' => 'nullable|numeric|min:0',
            'rendimiento' => 'nullable|numeric|min:0',
            'seguridad' => 'nullable|string',
            'tipo_traccion' => 'nullable|string',
            'potencia_hp' => 'nullable|integer|min:0',
            'capacidad_maletero' => 'nullable|integer|min:0',
        ]);

        $auto->update($request->all());

        return redirect()->route('autos.index')->with('success', 'Auto actualizado correctamente.');
    }

//------- eliminar un auto -------
    public function destroy(Autos $auto)
    {
        $auto->delete();
        return redirect()->route('autos.index')->with('success', 'Auto eliminado correctamente.');
    }

}
