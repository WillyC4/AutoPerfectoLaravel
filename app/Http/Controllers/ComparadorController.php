<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autos;

class ComparadorController
{
//---------------------------- Index de Comparador ----------------------------//
    public function index()
    {
        return view('comparar.index');
    }

//---------------------------- Comparar Parametros ----------------------------//
    public function compararSeguridad(Request $request)
    {
        $criterioExtra = $request->input('criterio', 'rendimiento');

        $autos = Autos::orderBy('seguridad', 'desc')
                    ->orderBy($criterioExtra, ($criterioExtra === 'rendimiento') ? 'asc' : 'desc')
                    ->get();

        return view('comparar.seguridad_resultados', compact('autos', 'criterioExtra'));
    }

//---------------------------- Comparar Segmento ----------------------------//
    public function compararSegmento(Request $request)
    {
        $auto1 = Autos::findOrFail($request->input('auto1'));
        $auto2 = Autos::findOrFail($request->input('auto2'));

        $autosSimilares = Autos::whereBetween('precio', [$auto1->precio * 0.9, $auto2->precio * 1.1])
                               ->whereIn('marca', [$auto1->marca, $auto2->marca])
                               ->orderBy('seguridad', 'desc')
                               ->get();

        return view('comparar.segmento_resultados', compact('auto1', 'auto2', 'autosSimilares'));
    }

    public function mostrarSegmento()
    {
        $autos = Autos::all();

        return view('comparar.segmento', compact('autos'));
    }

//---------------------------- Ranking de Autos ----------------------------//
    public function rankingAutos(Request $request)
    {
        $criteriosSeleccionados = $request->input('criterios', ['seguridad']);

        $rankingAutos = Autos::orderBy('seguridad', 'desc');

        foreach ($criteriosSeleccionados as $criterio) {
            $rankingAutos->orderBy($criterio, ($criterio === 'precio' || $criterio === 'rendimiento') ? 'asc' : 'desc');
        }

        $rankingAutos = $rankingAutos->limit(10)->get();

        return view('comparar.ranking_resultados', compact('rankingAutos', 'criteriosSeleccionados'));
    }
}