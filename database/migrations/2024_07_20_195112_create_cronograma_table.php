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
        if (!Schema::hasTable('cronograma')) {
            Schema::create('cronograma', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->string('tipo_equipo');
                $table->string('codigo_inventario');
                $table->string('ubicacion')->nullable();
                $table->string('area')->nullable();
                $table->string('razon_social')->nullable();
                $table->string('torre')->nullable();
                $table->string('piso')->nullable();
                $table->string('marca');
                $table->string('modelo');
                $table->string('serie');
                $table->integer('frecuencia');
                $table->foreignId('responsable')->constrained('personal_mantenimiento');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cronograma');
    }
};
