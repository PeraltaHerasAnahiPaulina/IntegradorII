<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_vehiculo extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'tipo_vehiculos';

    protected $fillable = [
        'nom_tipo_vehiculo'
    ];

    public function entrada_estacionamiento(){
        return $this->hasOne(entrada_estacionamiento::class);
    }
}
