<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class AnimalController extends Controller
{
    protected function createAnimal()
    {
    	$data = Input::all();
        try
        {
            DB::beginTransaction();
            $animal = $this->setSubjectData();
            $animal = $this->saveSubject($animal);
            DB::commit();
            return $animal;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function findAnimal()
    {
        try
        {
        	$id = Input::get('id');
        	$animal = Animal::find($id);
            return $animal;
        }
        catch(Exception $e) 
        {
            Log::error($e);
        }        
    }
    protected function updateAnimal()
    {
        $data =Input::all();    
        try
        {                                       
        	$animal = Cliente::find(Input::get('id')); 
            $animal = $this->makeUpdate($animal);
            $animal = $this->saveUser($animal);
            return $animal;
        }
        catch(Exception $e) 
        {
            Log::error($e);
        }
    }
    protected function deleteAnimal($id)
    {
        try
        {
        	$animal = Animal::find($id); 
            $animal->status = Consts::INACTIVE;
            $this->saveUser($animal);
            return $animal;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function setAnimalData($animal='')
    {
        if(empty($animal))
        $animal = new Animal();    
        if(!empty($nome = Input::get('nome')))
        {
            $animal->nome = $name;
        }
        if(!empty($raca = Input::get('raca`')))
        {
            $animal->raca = $raca;
        }
        if(!empty($aniversario = Input::get('aniversario')))
        {
            $animal->aniversario = $aniversario;
        }
        if(!empty($clientes_id = Input::get('clientes_id')))
        {
            $animal->clientes_id = $clientes_id;
        }
        if(!empty($sexo = Input::get('sexo')))
        {
            $animal->sexo = $sexo;
        }
        return $animal;
    }
}
