<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Datospersona
 *
 * @property $id
 * @property $fecharegistro
 * @property $nombre
 * @property $apellidoPaterno
 * @property $apellidoMaterno
 * @property $profesion
 * @property $fechaNacimiento
 * @property $lugarNacimiento
 * @property $edad
 * @property $estadoCivil
 * @property $sexo
 * @property $carnetidentidad
 * @property $ciexpedido
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Articulogeneral[] $articulogenerals
 * @property Articulorevista[] $articulorevistas
 * @property Contacto[] $contactos
 * @property Datospersonb[] $datospersonbs
 * @property Expdocente[] $expdocentes
 * @property Expoconferencia[] $expoconferencias
 * @property Expoevento[] $expoeventos
 * @property Exposeminario[] $exposeminarios
 * @property Expprograrel[] $expprograrels
 * @property Formcurso[] $formcursos
 * @property Formpostgrado[] $formpostgrados
 * @property Formprofesional[] $formprofesionals
 * @property Funcadminacad[] $funcadminacads
 * @property Libropublicado[] $libropublicados
 * @property Reconocimiento[] $reconocimientos
 * @property Textopublicado[] $textopublicados
 * @property Trabproyinvconcluido[] $trabproyinvconcluidos
 * @property Tutortribunal[] $tutortribunals
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Datospersona extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fecharegistro', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'profesion', 'fechaNacimiento', 'lugarNacimiento', 'edad', 'estadoCivil', 'sexo', 'carnetidentidad', 'ciexpedido', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articulogenerals()
    {
        return $this->hasMany(\App\Models\Articulogeneral::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articulorevistas()
    {
        return $this->hasMany(\App\Models\Articulorevista::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactos()
    {
        return $this->hasMany(\App\Models\Contacto::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datospersonbs()
    {
        return $this->hasMany(\App\Models\Datospersonb::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expdocentes()
    {
        return $this->hasMany(\App\Models\Expdocente::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expoconferencias()
    {
        return $this->hasMany(\App\Models\Expoconferencia::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expoeventos()
    {
        return $this->hasMany(\App\Models\Expoevento::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exposeminarios()
    {
        return $this->hasMany(\App\Models\Exposeminario::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expprograrels()
    {
        return $this->hasMany(\App\Models\Expprograrel::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formcursos()
    {
        return $this->hasMany(\App\Models\Formcurso::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formpostgrados()
    {
        return $this->hasMany(\App\Models\Formpostgrado::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formprofesionals()
    {
        return $this->hasMany(\App\Models\Formprofesional::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function funcadminacads()
    {
        return $this->hasMany(\App\Models\Funcadminacad::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libropublicados()
    {
        return $this->hasMany(\App\Models\Libropublicado::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reconocimientos()
    {
        return $this->hasMany(\App\Models\Reconocimiento::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function textopublicados()
    {
        return $this->hasMany(\App\Models\Textopublicado::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trabproyinvconcluidos()
    {
        return $this->hasMany(\App\Models\Trabproyinvconcluido::class, 'id', 'datospersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tutortribunals()
    {
        return $this->hasMany(\App\Models\Tutortribunal::class, 'id', 'datospersona_id');
    }
    
}
