<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuario extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'ap',
        'am',
        'correo',
        'matricula',
        'contraseña',
        'qr',
        'tipo_entradas_id',
        'docencias_id'
    ];

    public function docencia(){
        return $this->belongsTo('App\Models\docencia');
    }

    public function tipo_entrada(){
        return $this->belongsTo('App\Models\tipo_entrada');
    }
    public function historial (){
        return $this->hasMany('App\Models\historial');
    }
}
