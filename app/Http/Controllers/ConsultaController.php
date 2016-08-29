<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ConsultaController extends Controller
{
	protected function adicionarConsulta()
    {
    	try
        {
            $consulta = new ConsultaDAO;
        	$consulta->inserir();
            return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function procurarConsulta($id)
    {
        try
        {
            $consulta = new ConsultaDAO;
            $consulta->consultar();
            return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function alterarConsulta()
    {
        try
        {
            $consulta = new ConsultaDAO;
            $consulta->alterar();
            return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function deletarConsulta($id)
    {
        try
        {
            $consulta = new ConsultaDAO;
            $consulta->deletar($id);
            return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
