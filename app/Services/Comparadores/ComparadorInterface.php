<?php

namespace App\Services\Comparadores;

interface ComparadorInterface
{
    public function comparar(mixed ...$parametros);
}
