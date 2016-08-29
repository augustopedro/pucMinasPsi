<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
	protected $table = 'animals';
	
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    public function consulta()
    {
        return $this->hasMany('App\Consulta');
    }
}
