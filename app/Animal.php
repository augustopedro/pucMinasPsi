<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
	protected $table = 'animals';
	
    
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'clientes_id', 'id');
    }
    public function consulta()
    {
        return $this->hasMany('App\Consulta');
    }
}
