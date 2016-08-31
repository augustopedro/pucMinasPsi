<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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
         $this->json('POST', 'cliente/create', ['nome' => 'Pedro','email' => 'teste@teste.com'])
         ->seeJsonEquals(['nome' => 'Pedro','email' => 'teste@teste.com']);
    }

    //Deletar Cliente
    // public function testDeleteCliente()
    // {
    //     $this->put('/cliente/delete',
    //         ['id' => '1']);
    // }

    // //Cadastrar Animal
    // public function testCreateAnimal()
    // {
    //     $this->post('/animal/create',
    //         ['id' => '1',
    //         'nome' => 'Krypto',
    //         'raca' => 'Vira Lata',
    //         'aniversario' => '30-08-2013',
    //         'clientes_id' => '1',
    //         'sexo' => 'Masc',
    //         'status' => 'Liberado']);
    // }

    // //Agendar Consulta
    // public function testCreateVeterinario()
    // {
    //     $this->post('/veterinario/create',
    //         ['id' => '1',
    //         'ctps' => '123',
    //         'clientes_id' => '1']);
    // }

    // public function testAgendaConsulta()
    // {
    //     $this->post('/consulta/create',
    //         ['id' => '1',
    //         'data' => '10-10-2016',
    //         'veterinarios_id' => '1',
    //         'animals_id' => '1',
    //         'status' => 'Aguardando Atendimento']);
    // }
}
