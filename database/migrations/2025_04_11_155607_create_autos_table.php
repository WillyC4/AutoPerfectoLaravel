<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('anio');
            $table->decimal('precio', 10, 2)->nullable();
            $table->decimal('rendimiento', 5, 2)->nullable(); // Consumo de combustible (L/100 km)
            $table->string('seguridad')->nullable();
            $table->string('tipo_traccion')->nullable(); // AWD, FWD, RWD
            $table->integer('potencia_hp')->nullable(); // Caballos de fuerza
            $table->integer('capacidad_maletero')->nullable(); // Litros
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};