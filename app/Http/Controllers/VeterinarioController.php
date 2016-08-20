<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class VeterinarioController extends Controller
{
    protected function createVeterinario()
    {
    	$data = Input::all();
        try
        {
            DB::beginTransaction();
            $veterinario = $this->setVeterinarioData();
            $veterinario->save();
            DB::commit();
            return $veterinario;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function findVeterinario()
    {
        try
        {
        	$id = Input::get('id');
        	$veterinario = Veterinario::find($id);
            return $veterinario;

        }
        catch(Exception $e) 
        {
            Log::error($e);
        }        
    }
    protected function updateVeterinario()
    {
        $data =Input::all();    
        try
        {                                       
        	$veterinario = Veterinario::find(Input::get('id')); 
            $veterinario = $this->makeUpdate($veterinario);
            $veterinario->save();
            return $veterinario;
        }
        catch(Exception $e) 
        {
            Log::error($e);
        }
    }
    protected function deleteVeterinario($id)
    {
        try
        {
        	$veterinario = Veterinario::find($id); 
            $veterinario->status = Consts::INACTIVE;
            $veterinario->save();
            return $veterinario;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function setVeterinarioData($veterinario='')
    {
        if(empty($veterinario))
        $veterinario = new Veterinario();    
        
        if(!empty($ctps = Input::get('ctps')))
        {
            $veterinario->ctps = $ctps;
        }
        if(!empty($clientes_id = Input::get('clientes_id')))
        {
            $veterinario->clientes_id = $clientes_id;
        }
        return $veterinario;
    }
}
