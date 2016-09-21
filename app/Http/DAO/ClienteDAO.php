<?php

namespace App\Http\DAO;
use App\Http\DAO\DAO;
use DB;
use App\Cliente;
use Illuminate\Support\Facades\Input;

class ClienteDAO implements DAO
{
    public function inserir()
    {
        try
        {
            DB::beginTransaction();
            $cliente = $this->setData();
            $cliente->save();
            DB::commit();
            return $cliente;
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
            $cliente = Cliente::find($id);
            return $cliente;
        }
        catch(Exception $e) 
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }        
    }
    public function alterar()
    {    
        try
        {                                       
            $cliente = Cliente::find(Input::get('id')); 
            $cliente = $this->setData($cliente);
            $cliente->save();
            return $cliente;
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
            $cliente = Cliente::find($id); 
            $cliente->status = Consts::INACTIVE;
            $cliente->save();
            return $cliente;
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function setData($cliente='')
    {
        if(empty($cliente))
        $cliente = new Cliente();    
        if(!empty($nome = Input::get('nome')))
        {
            $cliente->nome = $nome;
        }
        if(!empty($email = Input::get('email')))
        {
            $cliente->email = $email;
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
            $cliente->cpf = $cpf;
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
    