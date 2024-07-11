<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Datospersona;
/**
 * Class Datospersonb
 *
 * @property $id
 *
//  * @property $direccion
//  * @property $telefono
//  * @property $celular
//  * @property $correo
//  *
 * @property $idiomaNativo
 * @property $nivelidiomaescritura
 * @property $nivelidiomalectura
 * @property $nivelidiomahabla
 * @property $idiomaSecundario
 * @property $nivelidiomaSecundarioescritura
 * @property $nivelidiomaSecundariolectura
 * @property $nivelidiomaSecundariohabla
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
class Datospersonb extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idiomaNativo', 'nivelidiomaescritura', 'nivelidiomalectura', 'nivelidiomahabla', 'idiomaSecundario', 'nivelidiomaSecundarioescritura', 'nivelidiomaSecundariolectura', 'nivelidiomaSecundariohabla', 'fecharegistro', 'datospersona_id', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function datospersona()
    {
        return $this->belongsTo(Datospersona::class, 'datospersona_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

}
