<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
	protected $table = 'consultas';
    public function animal()
    {
        return $this->belongsTo('App\Animal');
    }
    public function veterinario()
    {
        return $this->belongsTo('App\Veterinario');
    }
    public function diagnostico()
    {
        return $this->hasOne('App\Diagnostico');
    }
}
