<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\DAO\VendaDAO;

class VendaController extends Controller
{
    protected function adicionarVenda()
    {
        try
        {
            $vendaDAO = new VendaDAO;
            $venda = $vendaDAO->inserir();
            return redirect('/');
            //return $venda;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
        
    }
    protected function procurarVenda($id)
    {
        try
        {
            $vendaDAO = new VendaDAO;
            $venda = $vendaDAO->Vendar();
            return $venda;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function alterarVenda()
    {
        try
        {
            $vendaDAO = new VendaDAO;
            $venda = $vendaDAO->alterar();
            return $venda;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function deletarVenda($id)
    {
        try
        {
            $vendaDAO = new VendaDAO;
            $venda = $vendaDAO->deletar($id);
            return $venda;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
