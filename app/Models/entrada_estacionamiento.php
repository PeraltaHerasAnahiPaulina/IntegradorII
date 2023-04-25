<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class entrada_estacionamiento extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'entrada_estacionamientos';

    protected $fillable = [
        'matricula_auto',
        'modelo',
        'tipo_vehiculo_id'
    ];

    public function tipo_vehiculo(){
        return $this->belongsTo('App\Models\tipo_vehiculo');
    }

    public function tipo_entrada(){
        return $this->hasOne(tipo_entrada::class);
    }
}
