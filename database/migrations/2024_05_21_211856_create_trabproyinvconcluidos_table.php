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
        Schema::create('trabproyinvconcluidos', function (Blueprint $table) {
            $table->id();
            $table->enum('trabajoproyecto', ['Proyecto', 'Trabajo']) -> comment('Proy o Trab investigación concluido') ->required;
            $table->date('fechainicio') ->min('1970-01-01') ->required;
            $table->date('fechafin') -> min(date('fechainicio')) ->max(date('Y-m-d')) -> required ;
            $table->string('duracion', 4) ->pattern('/^[0-9]+/') -> comment('En horas') -> required;
            $table->string('autor', 75) -> pattern('[a-zA-Z]+') -> required;
            $table->string('coautor', 75) -> pattern('[a-zA-Z]+') -> nullable;


            $table->foreignId('datospersona_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

//incluido p
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabproyinvconcluidos');
    }
};
