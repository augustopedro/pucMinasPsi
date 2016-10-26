<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\DAO\ConsultaDAO;
use App\Cliente;
use App\Veterinario;
use App\Animal;
use App\Consulta;
use Log;
use Illuminate\Support\Facades\Input;

class ConsultaController extends Controller
{
	protected function adicionarConsulta()
    {
    	try
        {
            $consultaDAO = new ConsultaDAO;
            // Log::error('AA');
        	$consulta = $consultaDAO->inserir();
            return redirect('/');

            //return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function procurarConsulta()
    {
        try
        {
            //NO RETORNO RETORNAR UMA NOVA VIEW QUE CONTERA TODOS OS DADOS DA CONSULTA DE FORMA EDITAVEL
            $id = Input::get('id');
            $consulta = Consulta::find($id)->with(['animal' =>function($query) 
            {
                $query->with('cliente');
            }])
            ->first();
            // return $consulta;
            return view('Consultar', ['consulta' => $consulta]);
            // return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    //Pegar todas as consultas, exibir na nova view que vai ser criada 
    //Passar o objeto 'consultas' e popular um dropdown igual na AgendaConsulta
    //Quando clicar, exibir informacao da consulta
    protected function getConsultas()
    {
        try
        {
            $consultas = Consulta::with(['animal' =>function($query) 
            {
                $query->with('cliente');
            }])
            ->get();
            // Log::error($consultas);
            // return $consulta[0]->animal->cliente->nome;
            return view('Consultar', ['consultas' => $consultas]);
            // return view('Consultar', ['veterinarios' => $veterinarios, 'animals' => $animals]);
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
            return redirect('/')->with('consulta', 'Consulta alterada com sucesso!');
            // return $consulta;
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
