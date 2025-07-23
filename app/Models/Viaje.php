<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Viaje
 *
 * @property $id
 * @property $id_ruta
 * @property $origen
 * @property $destino
 * @property $duracion
 * @property $distancia
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @property Ruta $ruta
 * @property Boleto[] $boletos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Viaje extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_ruta', 'origen', 'destino', 'duracion', 'distancia', 'precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ruta()
    {
        return $this->belongsTo(\App\Models\Ruta::class, 'id_ruta', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boletos()
    {
        return $this->hasMany(\App\Models\Boleto::class, 'id', 'id_viaje');
    }
    
}
