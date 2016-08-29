<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class VendaController extends Controller
{
    protected function adicionarVenda()
    {
        try
        {
            $venda = new VendaDAO;
            $venda->inserir();
            return $venda;
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
            $venda = new VendaDAO;
            $venda->Vendar();
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
            $venda = new VendaDAO;
            $venda->alterar();
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
            $venda = new VendaDAO;
            $venda->deletar($id);
            return $venda;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
