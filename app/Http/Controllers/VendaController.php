<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class VendaController extends Controller
{
    protected function createVenda()
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
            Log::error($e);
        }
    }
    protected function findVenda()
    {
        try
        {
        	$id = Input::get('id');
        	$venda = Venda::find($id);
            return $venda;

        }
        catch(Exception $e) 
        {
            Log::error($e);
        }        
    }
    protected function updateVenda()
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
            Log::error($e);
        }
    }
    protected function deleteVenda($id)
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
            Log::error($e);
        }
    }
    protected function setVendaData($venda='')
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
