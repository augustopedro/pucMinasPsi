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
            $veterinario = new VeterinarioDAO;
            $veterinario->inserir();
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
            $veterinario = new VeterinarioDAO;
            $veterinario->consultar();
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
            $veterinario = new VeterinarioDAO;
            $veterinario->alterar();
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
            $veterinario = new VeterinarioDAO;
            $veterinario->deletar($id);
            return $veterinario;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
