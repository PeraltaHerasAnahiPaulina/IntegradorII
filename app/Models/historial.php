<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class historial extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'historials';

    protected $fillable = [
        'fecha',
        'matricula',
        'horaentrada',
        'estatus_id',
        'usuario_id'
    ];

    public function estatus(){
        return $this->belongsTo('App\Models\estatus');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\usuario');
    }
}