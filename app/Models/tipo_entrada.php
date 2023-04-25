<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_entrada extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'tipo_entradas';

    protected $fillable = [
        'nom_entrada',
        'entrada_estacionamientos_id'
    ];

    public function entrada_estacionamiento(){
        return $this->belongsTo('App\Models\entrada_estacionamiento');
    }

    public function usuario(){
        return $this->hasMany('App\Models\usuario');
    }

}
