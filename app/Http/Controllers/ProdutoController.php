<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ProdutoController extends Controller
{
    protected function createProduto()
    {
    	$data = Input::all();

        
        try
        {
            DB::beginTransaction();
            $produto = $this->setProdutoData();
            $produto->save();
            DB::commit();
            return $produto;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function findProduto()
    {
        try
        {
        	$id = Input::get('id');
        	$produto = Produto::find($id);
            return $produto;

        }
        catch(Exception $e) 
        {
            Log::error($e);
        }        
    }
    protected function updateProduto()
    {
        $data =Input::all();    
        try
        {                                       
        	$produto = Produto::find(Input::get('id')); 
            $produto = $this->makeUpdate($produto);
            $produto->save();
            return $produto;
        }
        catch(Exception $e) 
        {
            Log::error($e);
        }
    }
    protected function deleteProduto($id)
    {
        try
        {
        	$produto = Produto::find($id); 
            $produto->status = Consts::INACTIVE;
            $this->saveProduto($produto);
            return $produto;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function setProdutoData($produto='')
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
