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
        Schema::create('textopublicados', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',120) ->pattern('[a-zA-Z]+') -> required;
            $table->string('anio',4) ->pattern('/^[0-9]+/') ->min(1970) ->max(date('Y')) -> required;
            $table->string('autor',50) ->pattern('[a-zA-Z]+') -> required;
            $table->string('coautor',50) ->pattern('[a-zA-Z]+')-> nullable;


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
        Schema::dropIfExists('textopublicados');
    }
};
