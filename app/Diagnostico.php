<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    //
    public function consulta()
    {
        return $this->belongsTo('App\Consulta');
    }
}
