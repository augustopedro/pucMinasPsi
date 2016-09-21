<?php
namespace App\Http\DAO;


interface DAO
{
    public function inserir();
    public function consultar($id);
    public function alterar();
    public function deletar($id);
    public function setData();
}
