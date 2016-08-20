<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ClienteController extends Controller
{
    protected function createCliente()
    {
        $data = Input::all();
        try
        {
            DB::beginTransaction();
            $cliente = $this->setSubjectData();
            $cliente->save();
            DB::commit();
            return $cliente;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function findCliente()
    {
        try
        {
            $id = Input::get('id');
            $cliente = Cliente::find($id);
            return $cliente;
        }
        catch(Exception $e) 
        {
            Log::error($e);
        }        
    }
    protected function updateCliente()
    {
        $data =Input::all();    
        try
        {                                       
            $cliente = Cliente::find(Input::get('id')); 
            $cliente = $this->makeUpdate($cliente);
            $cliente->save();
            return $cliente;
        }
        catch(Exception $e) 
        {
            Log::error($e);
        }
    }
    protected function deleteCliente($id)
    {
        try
        {
            $cliente = Cliente::find($id); 
            $cliente->status = Consts::INACTIVE;
            $cliente->save();
            return $cliente;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function setClienteData($cliente='')
    {
        if(empty($cliente))
        $cliente = new Cliente();    
        if(!empty($nome = Input::get('nome')))
        {
            $cliente->nome = $name;
        }
        if(!empty($telefone = Input::get('telefone')))
        {
            $cliente->telefone = $telefone;
        }
        if(!empty($celular = Input::get('celular')))
        {
            $cliente->celular = $celular;
        }
        if(!empty($numero = Input::get('numero')))
        {
            $cliente->numero = $numero;
        }
        if(!empty($complemento = Input::get('complemento')))
        {
            $cliente->complemento = $complemento;
        }
        if(!empty($rua = Input::get('rua')))
        {
            $cliente->rua = $rua;
        }
        if(!empty($bairro = Input::get('bairro')))
        {
            $cliente->bairro = $bairro;
        }
        if(!empty($cidade = Input::get('cidade')))
        {
            $cliente->cidade = $cidade;
        }
        if(!empty($cpf = Input::get('cpf')))
        {
            $cliente->cpf = $cpfß;
        }
        if(!empty($aniversario = Input::get('aniversario')))
        {
            $cliente->aniversario = $aniversario;
        }
        if(!empty($sexo = Input::get('sexo')))
        {
            $cliente->sexo = $sexo;
        }
        return $cliente;
    }
}
