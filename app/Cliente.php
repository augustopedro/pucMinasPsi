<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $hidden = array ('created_at','updated_at', 'id');
    public function animal()
    {
        return $this->hasMany('App\Animal');
    }
    public function veterinario()
    {
        return $this->hasOne('App\Veterinario', 'clientes_id','id');
    }
    public function venda()
    {
        return $this->hasMany('App\Venda');
    }
}
