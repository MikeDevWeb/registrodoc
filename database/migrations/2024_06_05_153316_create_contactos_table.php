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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();

            $table->string('ciudadresidencia',50) ->pattern('[a-zA-Z]+') -> nullable;
            $table->string('direccion', 50) ->pattern('/^[a-zA-Z\s]+') ->required;
            $table->string('telefonofijo',9) ->pattern('/^[0-9]+/') ->required;
            $table->string('celular',9) ->regex('/^(7|6)[0-9]{8}/')->required;
            $table->string('correo', 25)->required()->unique()->format('email');
            $table->string('facebook', 50) ->url('') ->required;
            $table->string('twitter', 50) ->url('') ->required;
            $table->string('linkedin', 50) ->url('') ->required;
            $table->string('instagram', 50) ->url('') ->required;
            $table->string('telegram', 50) ->url('') ->required;
            $table->string('whatsapp', 50) ->regex('/^(7|6)[0-9]{11}/');
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
        Schema::dropIfExists('contactos');
    }
};
