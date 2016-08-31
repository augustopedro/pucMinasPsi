<?php

namespace App\Http\DAO;
use App\Http\DAO\DAO;
use DB;
use App\Animal;
use Illuminate\Support\Facades\Input;

class AnimalDAO implements DAO
{
	public function inserir()
    {
    	$data = Input::all();
        try
        {
            DB::beginTransaction();
            $animal = $this->setData();
            $this->save();
            DB::commit();
            return $animal;
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function consultar()
    {
        try
        {
        	$id = Input::get('id');
        	$animal = Animal::find($id);
            return $animal;
        }
        catch(Exception $e) 
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }        
    }
    public function alterar()
    {
        $data =Input::all();    
        try
        {                                       
        	$animal = Animal::find(Input::get('id')); 
            $animal = $this->setData($animal);
            $animal->save();
            return $animal;
        }
        catch(Exception $e) 
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function deletar($id)
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
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function setData($animal='')
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