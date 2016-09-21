<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\ClienteController;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    // public function testBasicExample()
    // {
    //     $this->visit('/')
    //          ->see('Laravel 5');
    // }

     //Cadastrar Cliente
    public function testCreateCliente()
    {
         // $createController = new ClienteController();
         $input = array(
            'email' => 'email@gmail.com', 
            'nome' => 'henrique'
        );

        $response = $this->call('POST', 'cliente/create', $input);
        $content = $response->getContent();
        Log::error($content['status']);
        $data = json_decode($response->getContent());
        Log::error($data);
        $this->assertTrue($data);
         // $this->assertTrue($createController->adicionarCliente());
    }

    //Deletar Cliente
    // public function testDeleteCliente()
    // {
    //     $this->json('PUT', 'cliente/delete', ['id' => '1'])
    //     ->seeJsonEquals(['id' => '1']);
    // }

    // //Cadastrar Animal
    // public function testCreateAnimal()
    // {
    //     $this->json('POST', 'animal/create', ['clientes_id' => '1', 'nome' => 'Krypto'])
    //     ->seeJsonEquals(['clientes_id' => '1', 'nome' => 'Krypto']);
    // }

    // //Agendar Consulta
    // public function testCreateVeterinario()
    // {
    //     $this->json('POST', 'veterinario/create', ['ctps' => '123', 'clientes_id' => '1'])
    //     ->seeJsonEquals(['ctps' => '123', 'clientes_id' => '1']);
    // }
    // public function testCreateConsulta()
    // {
    //     $this->json('POST', 'consulta/create', ['data' => '2016-01-01', 'veterinarios_id' => '1', 'animals_id' => '1'])
    //     ->seeJsonEquals(['data' => '2016-01-01', 'veterinarios_id' => '1', 'animals_id' => '1']);
    // }
}
