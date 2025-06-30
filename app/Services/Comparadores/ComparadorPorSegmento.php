<?php

namespace App\Services\Comparadores;

use App\Models\Autos;

class ComparadorPorSegmento implements ComparadorInterface
{
    public function comparar(mixed ...$parametros)
    {
        [$auto1, $auto2] = $parametros;

        $rangoInferior = $auto1->precio * 0.9;
        $rangoSuperior = $auto2->precio * 1.1;

        return Autos::where('id', '!=', $auto1->id)
            ->where('id', '!=', $auto2->id)
            ->whereBetween('precio', [$rangoInferior, $rangoSuperior])
            ->whereIn('marca', [$auto1->marca, $auto2->marca])
            ->orderBy('seguridad', 'desc')
            ->get();
    }
}
