<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo'); // nombre del estudiante
            $table->string('email')->unique(); // correo electrónico
            $table->string('celular')->nullable(); // teléfono opcional
            $table->string('nivel_academico'); // grado o nivel
            $table->string('programa'); // carrera o programa
            $table->date('fecha_matricula'); // fecha de ingreso
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
