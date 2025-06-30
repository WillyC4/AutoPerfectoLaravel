<?php

namespace App\Services\Comparadores;

use App\Models\Autos;

class ComparadorPorPrecio implements ComparadorInterface
{
    public function comparar(mixed ...$parametros)
    {
        [$precioBase, $rango, $prioridad] = $parametros;

        return Autos::whereBetween('precio', [$precioBase - $rango, $precioBase + $rango])
                    ->orderBy($prioridad, $prioridad === 'rendimiento' ? 'asc' : 'desc')
                    ->get();
    }
}
