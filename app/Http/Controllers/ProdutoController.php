<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\DAO\ProdutoDAO;



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
            // Log::erro($id);
            $produtoDAO = new ProdutoDAO;
            $produto = $produtoDAO->consultar($id);
            return $produto;
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
    protected function alterarProduto()
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
