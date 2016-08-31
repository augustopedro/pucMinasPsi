<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class VeterinarioController extends Controller
{
    protected function adicionarConsulta()
    {
        try
        {
            $veterinarioDAO = new VeterinarioDAO;
            $veterinario = $veterinarioDAO->inserir();
            return $veterinario;
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
            $veterinarioDAO = new VeterinarioDAO;
            $veterinario = $veterinarioDAO->consultar();
            return $veterinario;
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
            $veterinarioDAO = new VeterinarioDAO;
            $veterinario = $veterinarioDAO->alterar();
            return $veterinario;
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
            $veterinarioDAO = new VeterinarioDAO;
            $veterinario = $veterinarioDAO->deletar($id);
            return $veterinario;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
