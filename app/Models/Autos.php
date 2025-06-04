<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Autos extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'anio',
        'precio',
        'rendimiento',
        'seguridad',
        'tipo_traccion',
        'potencia_hp',
        'capacidad_maletero',
    ];
}