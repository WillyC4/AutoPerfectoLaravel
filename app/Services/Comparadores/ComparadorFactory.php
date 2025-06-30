<?php

namespace App\Services\Comparadores;

class ComparadorFactory
{
    public static function crear(string $tipo): ComparadorInterface
    {
        return match ($tipo) {
            'precio' => new ComparadorPorPrecio(),
            'segmento' => new ComparadorPorSegmento(),
            'seguridad' => new ComparadorPorSeguridad(),
            'ranking' => new GeneradorRankingAutos(),
            default => throw new \InvalidArgumentException("Tipo no soportado: {$tipo}"),
        };
    }

}
