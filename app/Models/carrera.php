<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class carrera extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'carreras';

    protected $fillable = [
        'nom_carrera'
    ];

    public function docencia(){
        return $this->hasOne(docencia::class);
    }

}
