<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libropublicado
 *
 * @property $id
 * @property $titulo
 * @property $anio
 * @property $autor
 * @property $coautor
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
class Libropublicado extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['titulo', 'anio', 'autor', 'coautor', 'datospersona_id', 'user_id'];


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
