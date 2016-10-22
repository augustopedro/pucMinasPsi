<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\DAO\VeterinarioDAO;

class VeterinarioController extends Controller
{
    protected function adicionarVeterinario()
    {
        try
        {
            $veterinarioDAO = new VeterinarioDAO;
            $veterinario = $veterinarioDAO->inserir();
           
           return redirect('/')->with('cadastro', 'Cadastro realizado com sucesso!');
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
        
    }
    protected function procurarVeterinario($id)
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
    protected function alterarVeterinario()
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
    protected function deletarVeterinario($id)
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
