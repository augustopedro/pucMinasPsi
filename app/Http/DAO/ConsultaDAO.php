<?php

namespace App\Http\DAO;
use App\Http\DAO\DAO;
use DB;
use App\Consulta;
use App\Diagnostico;
use Illuminate\Support\Facades\Input;

class ConsultaDAO implements DAO
{
	public function inserir()
    {
        try
        {
            DB::beginTransaction();
            $consulta = $this->setData();
            $consulta->save();
            DB::commit();
            return $consulta;
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function consultar($id)
    {
        try
        {
            $id = Input::get('id');
            $consulta = Consulta::find($id);
            return $consulta;
        }
        catch(Exception $e) 
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }        
    }
    public function alterar()
    {
        $data =Input::all();    
        try
        {                                       
            $consulta = Consulta::find(Input::get('id')); 
            $consulta = $this->setData($consulta);
            $consulta->save();
            return $consulta;
        }
        catch(Exception $e) 
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function deletar($id)
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
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
    public function setData($consulta='')
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
        if(!empty($descricao = Input::get('descricao')))
        {
            $diagnostico = new Diagnostico();
            $diagnostico->descricao = $descricao;
            $diagnostico->save();
            $consulta->diagnosticos_id = $diagnostico->id;
        }
        else if (!empty($justificativa = Input::get('justificativa')))
        {
            $diagnostico = new Diagnostico();
            $diagnostico->justificativa = $justificativa;
            $diagnostico->save();
            $consulta->diagnosticos_id = $diagnostico->id;
        }
        return $consulta;
    }
}

