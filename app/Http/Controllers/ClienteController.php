<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\DAO\ClienteDAO;
use Log;
use Illuminate\Support\Facades\Input;


class ClienteController extends Controller
{
    protected function adicionarCliente()
    {
    	try
        {
            $clienteDAO = new ClienteDAO;
        	$cliente = $clienteDAO->inserir();
            // return $cliente;
            return view('Teste', ['name' => 'James']);
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
            $clienteDAO = new ClienteDAO;
            $cliente = $clienteDAO->consultar($id);
            Log::error($cliente);
            return view('Teste', compact('cliente'));
            // return $cliente;
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
            $clienteDAO = new ClienteDAO;
            $cliente = $clienteDAO->alterar();
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
            $clienteDAO = new ClienteDAO;
            $cliente = $clienteDAO->deletar($id);
            return $cliente;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
