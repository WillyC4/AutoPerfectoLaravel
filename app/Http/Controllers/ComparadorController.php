<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autos;

use App\Services\Comparadores\ComparadorPorPrecio;
use App\Services\Comparadores\ComparadorPorSegmento;
use App\Services\Comparadores\ComparadorPorSeguridad;
use App\Services\Comparadores\GeneradorRankingAutos;

use App\Services\Comparadores\ComparadorFactory;


class ComparadorController
{

//---------------------------- Index y Segmento ----------------------------//
    public function index()
    {
        return view('comparar.index');
    }

    public function mostrarSegmento()
    {
        $autos = Autos::all();
        return view('comparar.segmento', compact('autos'));
    }


//---------------------------- Comparadores ----------------------------//

    public function comparar(Request $request)
    {
        $tipo = $request->input('tipo');
        $parametros = $this->resolverParametros($request, $tipo);

        $comparador = ComparadorFactory::crear($tipo);
        $resultado = $comparador->comparar(...$parametros);

        return view("comparar.{$tipo}_resultados", ['resultado' => $resultado]);
    }

    private function resolverParametros(Request $request, string $tipo): array
    {
        return match ($tipo) {
            'precio' => [
                $request->input('precio'),
                $request->input('rango'),
                $request->input('prioridad'),
            ],
            'segmento' => [
                Autos::findOrFail($request->input('auto1')),
                Autos::findOrFail($request->input('auto2')),
            ],
            'seguridad' => [
                $request->input('seguridad', 4),
            ],
            'ranking' => [
                $request->input('criterios', ['seguridad']),
                $request->input('limite', 10),
            ],
            default => throw new \InvalidArgumentException("Tipo de comparación no soportado: {$tipo}"),
        };
    }

}
