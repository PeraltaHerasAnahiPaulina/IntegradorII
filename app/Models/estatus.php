<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estatus extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'estatuses';

    protected $fillable = [
        'nom_estatus'
    ];

    public function histrial(){
        return $this->hasMany('App\Models\historial');
    }
}
