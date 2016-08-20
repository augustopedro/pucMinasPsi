<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ConsultaController extends Controller
{
    protected function createConsulta()
    {
        $data = Input::all();
        try
        {
            DB::beginTransaction();
            $consulta = $this->setSubjectData();
            $consulta->save();
            DB::commit();
            return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function findConsulta()
    {
        try
        {
            $id = Input::get('id');
            $consulta = Consulta::find($id);
            return $consulta;
        }
        catch(Exception $e) 
        {
            Log::error($e);
        }        
    }
    protected function updateConsulta()
    {
        $data =Input::all();    
        try
        {                                       
            $consulta = Consulta::find(Input::get('id')); 
            $consulta = $this->makeUpdate($consulta);
            $consulta->save();
            return $consulta;
        }
        catch(Exception $e) 
        {
            Log::error($e);
        }
    }
    protected function deleteConsulta($id)
    {
        try
        {
            $consulta = Consulta::find($id); 
            $consulta->status = Consts::INACTIVE;
            $consulta->save();
            return $consulta;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function setConsultaData($consulta='')
    {
        if(empty($consulta))
        $consulta = new Consulta();    
        if(!empty($data = Input::get('data')))
        {
            $consulta->data = $data;
        }
        if(!empty($veterinarios_id = Input::get('veterinarios_id')))
        {
            $consulta->veterinarios_id = $veterinarios_id;
        }
        if(!empty($animals_id = Input::get('animals_id')))
        {
            $consulta->animals_id = $animals_id;
        }
        return $consulta;
    }
}
