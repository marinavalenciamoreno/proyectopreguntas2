<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable=[
        'nombre',
    ];

    public function user(){ //Profesor
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function nivel(){
        return $this->belongsTo('App\Models\Nivel', 'nivel_id');
    }
}
