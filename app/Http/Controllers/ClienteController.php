<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\DAO\ClienteDAO;
use Log;


class ClienteController extends Controller
{
    protected function adicionarCliente()
    {
    	try
        {
            $cliente = new ClienteDAO;
        	$cliente->inserir();
            return $cliente;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
        
    }
    protected function procurarCliente($id)
    {
        try
        {
            $cliente = new ClienteDAO;
            $cliente->consultar();
            return $cliente;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function alterarCliente()
    {
        try
        {
            $cliente = new ClienteDAO;
            $cliente->alterar();
            return $cliente;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function deletarCliente($id)
    {
        try
        {
            $cliente = new ClienteDAO;
            $cliente->deletar($id);
            return $cliente;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
