<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
	protected $table = 'veterinarios';
    public function consulta()
    {
        return $this->hasMany('App\Consulta');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
