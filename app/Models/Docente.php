<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    // Define the relationships with other models here
    public function datospersonas()
    {
        return $this->belongsTo(Datospersona::class);
    }
    public function datospersonbs()
    {
        return $this->belongsTo(Datospersonb::class);
    }
    public function contactos()
    {
        return $this->belongsTo(Contacto::class);
    }

    public function expdocentes()
    {
        return $this->hasMany(Expdocente::class);
    }

    public function expoconferencias()
    {
        return $this->hasMany(Expoconferencia::class);
    }

    public function expoeventos()
    {
        return $this->hasMany(Expoevento::class);
    }

    public function exposeminarios()
    {
        return $this->hasMany(Exposeminario::class);
    }

    public function expprograrels()
    {
        return $this->hasMany(Expprograrel::class);
    }

    public function formcursos()
    {
        return $this->hasMany(Formcurso::class);
    }

    public function formpostgrados()
    {
        return $this->hasMany(Formpostgrado::class);
    }

    public function formprofesionals()
    {
        return $this->hasMany(Formprofesional::class);
    }

    public function funcadminacads()
    {
        return $this->hasMany(Funcadminacad::class);
    }

    public function libropublicados()
    {
        return $this->hasMany(Libropublicado::class);
    }

    public function textopublicados()
    {
        return $this->hasMany(Textopublicado::class);
    }

    public function tutortribunals()
    {
        return $this->hasMany(Tutortribunal::class);
    }

    public function trabproyinvconcluidos()
    {
        return $this->hasMany(Trabproyinvconcluido::class);
    }
}
