<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\DAO\AnimalDAO;
use Log;

class AnimalController extends Controller
{
    protected function adicionarAnimal()
    {
    	try
        {
            $animal = new AnimalDAO;
        	$animal->inserir();
            return $animal;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
        
    }
    protected function procurarAnimal($id)
    {
        try
        {
            $animal = new AnimalDAO;
            $animal->consultar();
            return $animal;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function alterarAnimal()
    {
        try
        {
            $animal = new AnimalDAO;
            $animal->alterar();
            return $animal;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function deletarAnimal($id)
    {
        try
        {
            $animal = new AnimalDAO;
            $animal->deletar($id);
            return $animal;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
