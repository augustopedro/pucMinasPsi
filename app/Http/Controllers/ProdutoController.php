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
            $produtoDAO = new ProdutoDAO;
            $produto = $produtoDAO->inserir();
            return $produto;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function procurarProdutoByName($name)
    {
        try
        {
            $produto = Produto::where('descricao',$name)->get();
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
            $produtoDAO = new ProdutoDAO;
            $produto = $produtoDAO->Produtor();
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
            $produtoDAO = new ProdutoDAO;
            $produto = $produtoDAO->alterar();
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
            $produtoDAO = new ProdutoDAO;
            $produto = $produtoDAO->deletar($id);
            return $produto;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
