<?php

namespace App\Services\Comparadores;

use App\Models\Autos;

class ComparadorPorSeguridad implements ComparadorInterface
{
    public function comparar(mixed ...$parametros)
    {
        [$nivelSeguridad] = $parametros;

        return Autos::where('seguridad', '>=', $nivelSeguridad)
                    ->orderBy('seguridad', 'desc')
                    ->orderBy('precio', 'asc')
                    ->get();
    }
}
