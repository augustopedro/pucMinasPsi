<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VeterinarioController extends Controller
{
    protected function createAnimal()
    {
    	$data = Input::all();

        
        try
        {
            DB::beginTransaction();
            $subject = $this->setSubjectData();
            $subject = $this->saveSubject($subject);
            DB::commit();
            return HTTPErrorMessages::okMessageResponse($subject);
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function findAnimal()
    {
        try
        {
        	$id = Input::get('id');
        	$user = User::find($id);
            return HTTPErrorMessages::okMessageResponse($user);

        }
        catch(Exception $e) 
        {
            Log::error($e);
        }        
    }
    protected function updateAnimal()
    {
        $data =Input::all();    
        try
        {                                       
        	$user = User::find(Input::get('id')); 
            $user = $this->makeUpdate($user);
            $user = $this->saveUser($user);
            return HTTPErrorMessages::okMessageResponse($user);
        }
        catch(Exception $e) 
        {
            Log::error($e);
        }
    }
    protected function deleteAnimal($id)
    {
        try
        {
        	$user = User::find($id); 
            $user->status = Consts::INACTIVE;
            $this->saveUser($user);
            return HTTPErrorMessages::okMessageResponse($user);
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
