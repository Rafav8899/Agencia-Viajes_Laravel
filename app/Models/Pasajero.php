<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pasajero
 *
 * @property $id
 * @property $nombre
 * @property $email
 * @property $tel
 * @property $dni
 * @property $created_at
 * @property $updated_at
 *
 * @property Boleto[] $boletos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pasajero extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'email', 'tel', 'dni'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boletos()
    {
        return $this->hasMany(\App\Models\Boleto::class, 'id', 'id_pasajero');
    }
    
}
