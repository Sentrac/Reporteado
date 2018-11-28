<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    //protected $fillable = ['nombre','alias','rfc','descripcion'];
    protected $primaryKey = 'idequipo';

    public function equipo()
    {
    	return $this->belongsTo(Cliente::class, 'idcliente');
    }

}