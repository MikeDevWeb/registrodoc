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
        Schema::create('datospersonbs', function (Blueprint $table) {
            $table->id();

            $table->enum('idiomaNativo', ['Español', 'Inglés', 'Portugués', 'Frances', 'Italiano', 'Chino', 'Japones', 'Coreano', 'Aleman', 'Ruso', 'Quechua', 'Aymara', 'Guarani', 'Otros']) ->required;
            $table->enum('nivelidiomaescritura', ['Bajo', 'Medio', 'Alto'])->required;
            $table->enum('nivelidiomalectura', ['Bajo', 'Medio', 'Alto'])->required;
            $table->enum('nivelidiomahabla', ['Bajo', 'Medio', 'Alto'])->required;
            $table->enum('idiomaSecundario', ['Español', 'Inglés', 'Portugués', 'Frances', 'Italiano', 'Chino', 'Japones', 'Coreano', 'Aleman', 'Ruso', 'Quechua', 'Aymara', 'Guarani', 'Otros']) ->nullable;
            $table->enum('nivelidiomaSecundarioescritura', ['Bajo', 'Medio', 'Alto'])->nullable;
            $table->enum('nivelidiomaSecundariolectura', ['Bajo', 'Medio', 'Alto'])->nullable;
            $table->enum('nivelidiomaSecundariohabla', ['Bajo', 'Medio', 'Alto'])->nullable;
            $table->primary('id'); // Se define la clave primaria id

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
        Schema::dropIfExists('datospersonbs');
    }
};
