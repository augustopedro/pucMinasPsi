<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ProdutoController extends Controller
{
    protected function adicionarProduto()
    {
        try
        {
            $produto = new ProdutoDAO;
            $produto->inserir();
            return $produto;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function procurarProduto($id)
    {
        try
        {
            $produto = new ProdutoDAO;
            $produto->Produtor();
            return $produto;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function alterarProduto()Ï
    {
        try
        {
            $produto = new ProdutoDAO;
            $produto->alterar();
            return $produto;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function deletarProduto($id)
    {
        try
        {
            $produto = new ProdutoDAO;
            $produto->deletar($id);
            return $produto;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
