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
            $animalDAO = new AnimalDAO;
        	$animal = $animalDAO->inserir();
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
            $animalDAO = new AnimalDAO;
            $animal = $animalDAO->consultar();
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
            $animalDAO = new AnimalDAO;
            $animal = $animalDAO->alterar();
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
            $animalDAO = new AnimalDAO;
            $animal = $animalDAO->deletar($id);
            return $animal;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
