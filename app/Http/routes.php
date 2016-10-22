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
Route::get('cliente/create', function () 
{
    return view('CadastrarCliente');
});
//Testes do Cliente
Route::post('cliente/create' , [
	'uses' => 'ClienteController@adicionarCliente',
	'as' => 'cliente/create'
]);
// Route::post('cliente/create','ClienteController@adicionarCliente');
Route::put('cliente/delete', 'ClienteController@deletarCliente');
Route::post('cliente/update', 'ClienteController@alterarCliente');
Route::get('cliente/procurar/{id}', 'ClienteController@procurarCliente');

//Testes de Veterinário
Route::get('veterinario/create', function () 
{
    return view('CadastrarVeterinario');
});
//Testes do Cliente
Route::post('veterinario/create' , [
	'uses' => 'VeterinarioController@adicionarVeterinario',
	'as' => 'veterinario/create'
]);
Route::put('veterinario/delete', 'VeterinarioController@deletarVeterinario');
Route::post('veterinario/update', 'VeterinarioController@alterarVeterinario');
Route::get('veterinario/procurar/{id}', 'VeterinarioController@procurarVeterinario');
// Route::post('veterinario/create', 'VeterinarioController@adicionarVeterinario');

//Testes do Animal
Route::get('animal/create', function () 
{
    return view('CadastrarAnimal');
});
Route::post('animal/create' , [
	'uses' => 'AnimalController@adicionarAnimal',
	'as' => 'animal/create'
]);
Route::put('animal/delete', 'AnimalController@deletarAnimal');
Route::post('animal/update', 'AnimalController@alterarAnimal');
Route::get('animal/procurar/{id}', 'AnimalController@procurarAnimal');
// Route::post('animal/create','AnimalController@adicionarAnimal');

//Testes da Consulta
Route::get('consulta/create','ConsultaController@getAllVets');
Route::post('consulta/create' , [
	'uses' => 'ConsultaController@adicionarConsulta',
	'as' => 'consulta/create'
]);
Route::put('consulta/delete', 'ConsultaController@deletarConsulta');
Route::post('consulta/update', 'ConsultaController@alterarConsulta');
Route::get('consulta/procurar/{id}', 'ConsultaController@procurarConsulta');
// Route::post('consulta/create', 'ConsultaController@adicionarConsulta');

// Testes de Produto
Route::get('produto/create', function () 
{
    return view('CadastrarProduto');
});
Route::post('produto/create' , [
	'uses' => 'ProdutoController@adicionarProduto',
	'as' => 'produto/create'
]);
Route::put('produto/delete', 'ProdutoController@deletarProduto');
Route::post('produto/update', 'ProdutoController@alterarProduto');
Route::get('produto/procurar/{id}', 'ProdutoController@procurarProduto');
// Route::post('produto/create', 'ProdutoController@adicionarProduto');

// Testes de Vender
Route::get('venda/create', function () 
{
    return view('VenderProduto');
});
Route::post('venda/create' , [
	'uses' => 'VendaController@adicionarVenda',
	'as' => 'venda/create'
]);

Route::get('/', function () 
{
    return view('index');
});
Route::put('venda/delete', 'VendaController@deletarVenda');
Route::post('venda/update', 'VendaController@alterarVenda');
Route::get('venda/procurar/{id}', 'VendaController@procurarVenda');

