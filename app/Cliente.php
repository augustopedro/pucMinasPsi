<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function animal()
    {
        return $this->hasMany('App\Animal');
    }
    public function veterinario()
    {
        return $this->hasOne('App\Veterinario');
    }
    public function venda()
    {
        return $this->hasMany('App\Venda');
    }
}
