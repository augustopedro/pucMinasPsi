<?php
namespace App\Http\DAO;


interface DAO
{
    public function inserir();
    public function consultar();
    public function alterar();
    public function deletar($id);
    public function setData();
}
