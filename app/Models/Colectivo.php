<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colectivo
 *
 * @property $id
 * @property $id_conductor
 * @property $empresa
 * @property $patente
 * @property $modelo
 * @property $capacidad
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Conductore $conductore
 * @property Boleto[] $boletos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Colectivo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_conductor','empresa', 'patente', 'modelo', 'capacidad', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conductore()
    {
        return $this->belongsTo(\App\Models\Conductore::class, 'id_conductor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boletos()
    {
        return $this->hasMany(\App\Models\Boleto::class, 'id', 'id_colectivo');
    }
    
}
