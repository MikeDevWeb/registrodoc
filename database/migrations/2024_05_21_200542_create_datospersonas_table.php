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
        Schema::create('datospersonas', function (Blueprint $table) {
            $table->id(); // Se define la clave primaria id
            $table->date('fecharegistro') ->min(date('Y-m-d')) ->max(date('Y-m-d')) ->required;
            $table->string('nombre',27) ->pattern('/^[a-zA-Z\s]+') ->required;
            $table->string('apellidoPaterno',20) ->pattern('/^[a-zA-Z\s]+') ->nullable;
            $table->string('apellidoMaterno',20) ->pattern('/^[a-zA-Z\s]+') ->nullable;
            $table->string('profesion',20) ->pattern('/^[a-zA-Z\s]+') ->nullable;
            $table->date('fechaNacimiento') ->min('1940-01-01') ->max(date('Y-m-d')) ->required;
            $table->string('lugarNacimiento',17) ->pattern('/^[a-zA-Z\s]+') ->required;
            $table->string('edad',2) ->pattern('/^[0-9]+/') ->min(21)->required;
            $table->enum('estadoCivil',['Soltero, casado, unionlibre, viudo']) ->required;
            $table->enum('sexo', ['M', 'F'])->comment('M - Masculino, F - Femenino');
            $table->string('carnetidentidad',8) ->pattern('/^[0-9]+/') ->required;
            $table->string('ciexpedido',2) ->pattern('/^[a-zA-Z\s]+') ->required;

            // Crear la relación con el modelo Usuario
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datospersonas');
    }
};

