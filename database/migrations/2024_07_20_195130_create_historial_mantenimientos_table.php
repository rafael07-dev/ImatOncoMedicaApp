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
        Schema::create('historial_mantenimiento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nombre')->constrained('cronograma');
            $table->integer('numero_mantenimientos');
            $table->string('codigo_inventario');
            $table->enum('actividad', ['MP', 'MC', 'DNC', 'INTL']);
            $table->text('observaciones')->nullable();
            $table->date('fecha_reporte');
            $table->date('fecha_inicio');
            $table->time('hora_inicio');
            $table->date('fecha_entrega');
            $table->time('hora_entrega');
            $table->time('tiempo_utilizado');
            $table->date('fecha_registro');
            $table->time('hora_registro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_mantenimientos');
    }
};
