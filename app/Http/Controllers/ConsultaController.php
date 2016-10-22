<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\DAO\ConsultaDAO;
use App\Cliente;
use App\Veterinario;
use Log;
class ConsultaController extends Controller
{
	protected function adicionarConsulta()
    {
    	try
        {
            $consultaDAO = new ConsultaDAO;
            Log::error('AA');
        	$consulta = $consultaDAO->inserir();
            return redirect('/');

            //return $consulta;
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
            $consultaDAO = new ConsultaDAO;
            $consulta = $consultaDAO->consultar();
            return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function getAllVets()
    {
        try
        {
            $veterinarios = Veterinario::with('cliente')
            ->select('id', 'clientes_id')
            ->get();
            // return $veterinarios;
            return view('AgendarConsulta', ['veterinarios' => $veterinarios]);
            // return $veterinarios;
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
            $consultaDAO = new ConsultaDAO;
            $consulta = $consultaDAO->alterar();
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
            $consultaDAO = new ConsultaDAO;
            $consulta = $consultaDAO->deletar($id);
            return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
