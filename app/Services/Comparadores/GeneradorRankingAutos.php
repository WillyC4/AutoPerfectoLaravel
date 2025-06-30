<?php

namespace App\Services\Comparadores;

use App\Models\Autos;

class GeneradorRankingAutos implements ComparadorInterface
{
    public function comparar(mixed ...$parametros)
    {
        $criterios = $parametros[0] ?? ['seguridad'];
        $limite = $parametros[1] ?? 10;

        $query = Autos::query();

        foreach ($criterios as $criterio) {
            $query->orderBy(
                $criterio,
                in_array($criterio, ['precio', 'rendimiento']) ? 'asc' : 'desc'
            );
        }

        return $query->limit($limite)->get();
    }
}
