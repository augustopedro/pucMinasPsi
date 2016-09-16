<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Testes do Cliente
Route::get('cliente/create','ClienteController@adicionarCliente');
// Route::post('cliente/create','ClienteController@adicionarCliente');
Route::put('cliente/delete', 'ClienteController@deletarCliente');
Route::post('cliente/update', 'ClienteController@alterarCliente');
Route::get('cliente/procurar/{id}', 'ClienteController@procurarCliente');

//Testes de Veterinário
Route::post('veterinario/create', 'VeterinarioController@adicionarVeterinario');

//Testes do Animal
Route::post('animal/create','AnimalController@adicionarAnimal');

//Testes da Consulta
Route::post('consulta/create', 'ConsultaController@adicionarConsulta');

//Vender
Route::post('produto/create', 'ProdutoController@adicionarProduto');
Route::post('venda/create', 'VendaController@adicionarVenda');

Route::get('/', function () 
{
    return view('welcome');
});
