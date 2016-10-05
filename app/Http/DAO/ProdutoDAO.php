<?php

namespace App\Http\DAO;
use App\Http\DAO\DAO;
use DB;
use App\Produto;
use Illuminate\Support\Facades\Input;

class ProdutoDAO implements DAO
{
	public function inserir()
    {
        try
        {
            DB::beginTransaction();
            $produto = $this->setData();
            $produto->save();
            DB::commit();
            return $produto;
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function consultar($id)
    {
        try
        {
        	$id = Input::get('id');
        	$produto = Produto::find($id);
            return $produto;

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
        	$produto = Produto::find(Input::get('id')); 
            $produto = $this->setData($produto);
            $produto->save();
            return $produto;
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
        	$produto = Produto::find($id); 
            $produto->status = Consts::INACTIVE;
            $produto->save();
            return $produto;
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function setData($produto='')
    {
        if(empty($produto))
        $produto = new Produto();    
        
        if(!empty($descricao = Input::get('descricao')))
        {
            $produto->descricao = $descricao;
        }
        if(!empty($price = Input::get('price')))
        {
            $produto->price = $price;
        }
        return $produto;
    }

}