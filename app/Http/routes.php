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
<<<<<<< HEAD
Route::post('cliente/create' , [
	'uses' => 'ClienteController@adicionarCliente',
	'as' => 'cliente/create'
]);
=======
Route::get('cliente/create','ClienteController@adicionarCliente');
>>>>>>> 0a534890a7f00c03769e108cc974bf46e18cb35f
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
// Route::post('animal/create','AnimalController@adicionarAnimal');

//Testes da Consulta
Route::get('consulta/create', function () 
{
    return view('CadastrarAnimal');
});
Route::post('consulta/create' , [
	'uses' => 'ConsultaController@adicionarConsulta',
	'as' => 'consulta/create'
]);
// Route::post('consulta/create', 'ConsultaController@adicionarConsulta');

//Produto
Route::get('produto/create', function () 
{
    return view('CadastrarProduto');
});
Route::post('produto/create' , [
	'uses' => 'ProdutoController@adicionarProduto',
	'as' => 'produto/create'
]);
// Route::post('produto/create', 'ProdutoController@adicionarProduto');

//Vender
Route::get('venda/create', function () 
{
    return view('VenderProduto');
});
Route::post('venda/create' , [
	'uses' => 'VendaController@adicionarVenda',
	'as' => 'venda/create'
]);
// Route::post('venda/create', 'VendaController@adicionarVenda');

// Route::get('/', function () 
// {
//     return view('welcome');
// });
