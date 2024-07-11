<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Formprofesional
 *
 * @property $id
 * @property $fecharegistro
 * @property $universidad
 * @property $anio
 * @property $gradoacademico
 * @property $titulodiploma
 * @property $datospersona_id
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Datospersona $datospersona
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Formprofesional extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fecharegistro', 'universidad', 'anio', 'gradoacademico', 'titulodiploma', 'datospersona_id', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function datospersona()
    {
        return $this->belongsTo(\App\Models\Datospersona::class, 'datospersona_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

}
