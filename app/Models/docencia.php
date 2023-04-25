<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class docencia extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'docencias';

    protected $fillable = [
        'nom_docencia',
        'carrera_id'
    ];

    public function carrera(){
        return $this->belongsTo('App\Models\carrera');
    }
    public function usuario(){
        return $this->hasMany('App\Models\usuario');
    }

}
