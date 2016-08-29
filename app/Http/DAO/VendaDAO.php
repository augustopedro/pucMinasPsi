<?php

namespace App\Http\DAO;
use App\Http\DAO\DAO;
use DB;
use App\Venda;
use Illuminate\Support\Facades\Input;

class VendaDAO implements DAO
{
	public function inserir()
    {
    	$data = Input::all();

        
        try
        {
            DB::beginTransaction();
            $venda = $this->setVendaData();
            $venda->save();
            DB::commit();
            return $venda;
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
        	$venda = Venda::find($id);
            return $venda;

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
        	$venda = Venda::find(Input::get('id')); 
            $venda = $this->makeUpdate($venda);
            $venda->save()
            return $venda;
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
        	$venda = Venda::find($id); 
            $venda->status = Consts::INACTIVE;
            $venda->save()
            return $venda;
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function setData($venda='')
    {
        if(empty($venda))
        $venda = new Venda();    
        
        if(!empty($clientes_id = Input::get('clientes_id')))
        {
            $venda->clientes_id = $clientes_id;
        }
        return $venda;
    }

}