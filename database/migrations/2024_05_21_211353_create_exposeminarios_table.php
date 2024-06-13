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
        Schema::create('exposeminarios', function (Blueprint $table) {
            $table->id();
            $table->string('institucion',120) ->pattern('[a-zA-Z]+') -> required;
            $table->enum('tipoevento', ['Seminario']) -> required;
            $table->string('tematica',120) ->pattern('[a-zA-Z]+') -> required;
            $table->date('fechainicio')  ->min('1970-01-01') -> required;
            $table->date('fechafin')
            ->min(date('fechainicio'))
            ->max(date('Y-m-d'))
            ->required;
            $table->string('duracion', 4) ->pattern('/^[0-9]+/') -> comment('En horas') -> required;


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
        Schema::dropIfExists('exposeminarios');
    }
};
