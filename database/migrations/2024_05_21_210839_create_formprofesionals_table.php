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
        Schema::create('formprofesionals', function (Blueprint $table) {
            $table->id();
            $table->string('universidad', 120) ->pattern('/^[a-zA-Z\s]+') ->required;
            $table->string('anio') ->pattern('/^[0-9]+/') ->min(1970) ->max(date('Y')) ->required;
            $table->enum('gradoacademico', ['Tecnico', 'Tecnologo', 'Licenciatura', 'Maestria', 'Doctorado']) ->required;
            $table->string('titulodiploma', 120) ->pattern('/^[a-zA-Z\s]+') ->required;

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
        Schema::dropIfExists('formprofesionals');
    }
};
