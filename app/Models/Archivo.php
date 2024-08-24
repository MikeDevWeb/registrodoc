<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    public function articulogenerals() {
        return $this->hasMany(Articulogeneral::class);
    }

    public function articulorevistas() {
        return $this->hasMany(Articulorevista::class);
    }

    public function contactos() {
        return $this->hasMany(Contacto::class);
    }

    public function datospersonbs() {
        return $this->hasMany(Datospersonb::class);
    }

    public function expdocentes() {
        return $this->hasMany(Expdocente::class);
    }
    public function expoconferencias() {
        return $this->hasMany(Expoconferencia::class);
    }

    public function expoeventos() {
        return $this->hasMany(Expoevento::class);
    }

    public function exposeminarios() {
        return $this->hasMany(Exposeminario::class);
    }

    public function expprograrels() {
        return $this->hasMany(Expprograrel::class);
    }

    public function formcursos() {
        return $this->hasMany(Formcurso::class);
    }

    public function formpostgrados() {
        return $this->hasMany(Formpostgrado::class);
    }

    public function formprofesionales() {
        return $this->hasMany(Formprofesional::class);
    }

    public function funcadminacad() {
        return $this->hasMany(Funcadminacad::class);
    }

    public function libropublicados() {
        return $this->hasMany(Libropublicado::class);
    }

    public function reconocimientos() {
        return $this->hasMany(Reconocimiento::class);
    }

    public function textopublicados() {
        return $this->hasMany(Textopublicado::class);
    }

    public function tutortribunals() {
        return $this->hasMany(Tutortribunal::class);
    }

    public function trabproyinvconcluidos() {
        return $this->hasMany(Trabproyinvconcluido::class);
    }
}
