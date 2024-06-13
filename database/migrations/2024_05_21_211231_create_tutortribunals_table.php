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
        Schema::create('tutortribunals', function (Blueprint $table) {
            $table->id();
            $table->string('institucion', 120) ->pattern('/^[a-zA-Z\s]+') -> required;
            $table->enum('pregradopostgrado', ['Pregrado', 'Postgrado']) -> required;
            $table->string('nivelprograma', 120) ->pattern('/^[a-zA-Z\s]+') -> required;
            $table->enum('tutorevalutribu', ['Tutor', 'Tutora', 'Evaluador', 'Tribunal', 'Coordinador', 'Asesor' ]) -> required;
            $table->string('tituloinvestigacion', 120) ->pattern('/^[a-zA-Z0-9\s]+') -> required;


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
        Schema::dropIfExists('tutortribunals');
    }
};
