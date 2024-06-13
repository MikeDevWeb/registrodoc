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
        Schema::create('formpostgrados', function (Blueprint $table) {
            $table->id();
            $table->string('institucionUniversidad', 120) ->pattern('/^[a-zA-Z\s]+') -> required;
            $table->string('anio') ->pattern('/^[0-9]+/') ->min(1970) ->max(date('Y')) ->required;
            $table->enum('gradoacademico', ['Diplomado', 'Maestria', 'Especialidad', 'Doctorado', 'MBA']) -> required;
            $table->string('titulodiploma', 120) ->pattern('/^[a-zA-Z\s]+') -> required;

            $table->foreignId('datospersona_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formpostgrados');
    }
};
