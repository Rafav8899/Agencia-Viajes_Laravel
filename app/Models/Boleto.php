<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Boleto
 *
 * @property $id
 * @property $id_pasajero
 * @property $id_viaje
 * @property $id_colectivo
 * @property $fecha
 * @property $hora
 * @property $created_at
 * @property $updated_at
 *
 * @property Colectivo $colectivo
 * @property Pasajero $pasajero
 * @property Viaje $viaje
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Boleto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_pasajero', 'id_viaje', 'id_colectivo', 'fecha', 'hora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function colectivo()
    {
        return $this->belongsTo(\App\Models\Colectivo::class, 'id_colectivo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasajero()
    {
        return $this->belongsTo(\App\Models\Pasajero::class, 'id_pasajero', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function viaje()
    {
        return $this->belongsTo(\App\Models\Viaje::class, 'id_viaje', 'id');
    }
    
}
