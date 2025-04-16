<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autos = Autos::latest()->paginate(3);
        return view('autos.indexAuto', compact('autos'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autos.createAuto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1886|max:' . date('Y'),
        ]);

        //create a new auto
        Autos::create([
            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo'),
            'anio' => $request->input('anio'),
        ]);

        //redirect the user and send a success message
        return redirect()->route('autos.index')->with('success', 'Auto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autos $auto)
    {
        return view('autos.showAuto', compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autos $auto)
    {
       return view('autos.editAuto', compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autos $auto)
    {
                 //validate input
                 $request->validate([
                    'marca' => 'required|string|max:255',
                    'modelo' => 'required|string|max:255',
                    'anio' => 'required|integer|min:1886|max:' . date('Y'),
                ]);
        
                //create a new auto
                $auto->update([
                    'marca' => $request->input('marca'),
                    'modelo' => $request->input('modelo'),
                    'anio' => $request->input('anio'),
                ]);
        
                //redirect the user and send a success message
                return redirect()->route('autos.index')->with('success', 'Auto created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autos $auto)
    {
        //delete auto
        $auto->delete();
        //Mensaje de Exito
        return redirect()->route('autos.index')->with('success', 'Auto deleted successfully.');
    }
}
