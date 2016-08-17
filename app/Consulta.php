<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public function animal()
    {
        return $this->belongsTo('App\Animal');
    }
    public function veterinario()
    {
        return $this->belongsTo('App\Veterinario');
    }
}
