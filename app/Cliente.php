<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

	protected $table = 'clientes';
    protected $fillable = ['nombre','alias','rfc','descripcion'];
    protected $primaryKey = 'idcliente';

    public function cliente()
    {
    	return $this->hasMany(Equipo::class, 'idequipo');
    }
    
}
