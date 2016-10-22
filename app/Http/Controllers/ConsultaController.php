<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\DAO\ConsultaDAO;
use App\Cliente;
use App\Veterinario;
use App\Animal;
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
            //NO RETORNO RETORNAR UMA NOVA VIEW QUE CONTERA TODOS OS DADOS DA CONSULTA DE FORMA EDITAVEL
            $consultaDAO = new ConsultaDAO;
            $consulta = $consultaDAO->consultar();
            return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    //Pegar todas as consultas, exibir na nova view que vai ser criada 
    //Passar o objeto 'consultas' e popular um dropdown igual na AgendaConsulta
    //Quando clicar, exibir informacao da consulta
    protected function getConsulta()
    {
        try
        {
            $consulta = Consulta::all();
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

            $animals = Animal::all();
            // return $veterinarios;
            return view('AgendarConsulta', ['veterinarios' => $veterinarios, 'animals' => $animals]);
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
