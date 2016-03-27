<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $table='casos';
    protected $fillable=[
    	'codigo',
    	'nombre',
    	'descripcion',
    	'fecha',
    	'status',
    ];

}
